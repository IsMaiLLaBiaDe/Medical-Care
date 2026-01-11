<?php

// 1. Database Configuration - REPLACE THESE WITH YOUR ACTUAL CREDENTIALS
$servername = "localhost";
$dbusername = "root"; // Database username
$dbpassword = "";     // Database password
$dbname = "resident-evil";

// 2. Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// 1. Define the directory where files will be stored (must be writable by the web server)
$upload_directory = "uploads/";

// 2. Create the directory if it doesn't exist
// The third argument 'true' allows nested directories to be created.
if (!is_dir($upload_directory)) {
    // Attempt to create the directory with permissions 0777 (or 0755 for more restricted access)
    if (!mkdir($upload_directory, 0777, true)) {
        die("Fatal Error: Failed to create upload directory '{$upload_directory}'. Check folder permissions.");
    }
}

// 3. DEFINE THE CORE UPLOAD FUNCTION (This was missing)
/**
 * Handles the security checks and physical move of an uploaded file.
 * @param string $fileInputName The name attribute from the HTML input (e.g., 'pimage').
 * @param string $uploadDir The permanent directory path where files are stored.
 * @return string|false|null The stored file path on success, FALSE on error, or NULL if no file was uploaded.
 */
function handleFileUpload($fileInputName, $uploadDir) {
    // Check if the file data exists in the $_FILES array
    if (!isset($_FILES[$fileInputName])) {
        return null; // No file input found
    }
    
    $file = $_FILES[$fileInputName];

    // Check if a file was selected but no error occurred
    if ($file['error'] === UPLOAD_ERR_NO_FILE) {
         return null; 
    }
    
    // Check if file was uploaded without errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        // Handle other upload errors (size, partial, etc.)
        error_log("File upload error for $fileInputName: " . $file['error']);
        return false; 
    }

    // --- Basic Security Validation ---
    
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 5 * 1024 * 1024; // 5MB

    if (!in_array($file['type'], $allowedTypes)) {
        // You can check the MIME type stored in the database OR check the actual file header (more secure)
        echo "Error: Invalid file type for $fileInputName.";
        return false;
    }
    
    if ($file['size'] > $maxFileSize) {
        echo "Error: File size too large for $fileInputName.";
        return false;
    }

    // --- File Storage ---
    
    // Generate a unique filename to prevent collisions and security issues
    $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newFilename = uniqid('img_', true) . '.' . $fileExt;
    $targetPath = $uploadDir . $newFilename;

    // Move the temporary file to its final, permanent location
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        // Success: Return the relative path to be stored in the database
        return $targetPath;
    } else {
        error_log("Failed to move uploaded file for $fileInputName.");
        return false;
    }
}

// 4. PROCESS THE UPLOADS
// This is your original code snippet, now functional because the function is defined

// Process Profile Image (Required)
$pimage_path = handleFileUpload('pimage', $upload_directory);
if ($pimage_path === false) {
    // Stop execution if required profile image upload failed due to validation/error
    die("Registration failed due to profile image error."); 
}
if ($pimage_path === true) {
    $pimage = $uploadDir . $newFilename;
}

// Process Cover Image (Optional)
$cimage_path = handleFileUpload('cimage', $upload_directory);
// If optional cover image upload failed, set NULL in the database
if ($cimage_path === true) {
    $cimage = $uploadDir . $newFilename;
}
if ($cimage_path === false) {
    $cimage = null; 
}




// Now you can proceed to bind $pimage_path and $cimage_path to your SQL statement...



// 3. Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 4. Retrieve and sanitize form data
    // Use trim and stripslashes for basic sanitation, but prepare statements are key for security.
    $username = trim($_POST['username']);
    $fname    = trim($_POST['fname']);
    $lname    = trim($_POST['lname']);
    $email    = trim($_POST['email']);
    $password = $_POST['password']; // Get the raw password
    
    // Hash the password for secure storage
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $birthday = $_POST['birthday'];
    $pnumber  = $_POST['pnumber'];
    $gender   = $_POST['gender'];
	
	
	
	$file_input_name = 'pimage'; 

// 1. Check if the form was submitted and the file field exists
if (isset($_FILES[$file_input_name])) {
    
    // Check for any upload errors
    if ($_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "uploads/";
        // 2. Get the original filename
        // This is the name the file had on the user's computer.
        $original_file_name = pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION);
		$newFilename = uniqid('img_', true) . '.' . $original_file_name;
		$targetPath = $uploadDir . $newFilename;
        }
}

	$file_input_name = 'cimage'; 

// 1. Check if the form was submitted and the file field exists
if (isset($_FILES[$file_input_name])) {
    
    // Check for any upload errors
    if ($_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "uploads/";
        // 2. Get the original filename
        // This is the name the file had on the user's computer.
        $original_file_name = pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION);
		$newFilename = uniqid('img_', true) . '.' . $original_file_name;
		$targetPath = $uploadDir . $newFilename;
        }
}



	
	
	
    $pimage   = $targetPath; // In a real app, this would handle file uploads
    $cimage   = $targetPath; // In a real app, this would handle file uploads
    $about    = $_POST['about'];
    $status   = $_POST['status'];
    $uaddress = $_POST['uaddress'];
    $type     = $_POST['type'];
    
    // Note: 'date' and 'id' are handled by the database (AUTO_INCREMENT/DEFAULT)
    
    // 5. SQL INJECTION PREVENTION: Use a prepared statement
    $sql = "INSERT INTO  doctors (
                username, fname, lname, email, password_hash, password, 
                birthday, pnumber, gender, pimage, cimage, about, status, 
                uaddress, type
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters (s=string, i=integer, d=double, b=blob)
    // Adjust types if your database structure differs (e.g., if pnumber is an INT)
    $stmt->bind_param(
        "sssssssssssssss", 
        $username, $fname, $lname, $email, $password_hash, $password, 
        $birthday, $pnumber, $gender, $pimage, $cimage, $about, $status, 
        $uaddress, $type
    );

    // 6. Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully. User ID: " . $conn->insert_id;
    } else {
        echo "Error: " . $stmt->error;
    }

    // 7. Close the statement
    $stmt->close();

} else {
    // Optional: Echo a message if someone tries to access the script directly
    echo "This script must be accessed via a POST request from a form.";
}

// 8. Close the connection
$conn->close();

?>