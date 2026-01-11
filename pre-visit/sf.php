<?php
// Database Configuration - UPDATE THESE VALUES
$servername = "localhost";
$db_username = "root"; 
$db_password = "";
$dbname = "resident-evil"; 

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- 1. COLLECT AND VALIDATE INPUT ---
    
    $patient_id = isset($_POST['patient_id']) ? intval($_POST['patient_id']) : null;
    $date = isset($_POST['date']) ? $_POST['date'] : null;
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    
    // Handle the specialty checkboxes array
    $specialty_array = isset($_POST['specialty']) ? $_POST['specialty'] : [];
    
    // Convert the selected specialties array into a single string for storage
    // Example: ['Cardiology', 'Pediatrics'] becomes "Cardiology, Pediatrics"
    $specialty_string = implode(", ", $specialty_array); 

    if (empty($patient_id) || empty($date)) {
        die("Error: Patient ID and Date are required.");
    }

    // --- 2. ESTABLISH CONNECTION ---
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // --- 3. PREPARE AND EXECUTE STATEMENT ---

    // The SQL statement you provided is used here
    $sql = "INSERT INTO `pre-visit` (`patient_id`, `date`, `status`, `specialty`) VALUES (?, ?, ?, ?)";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    
    // Bind parameters: "isss" indicates Integer, String, String, String
    $stmt->bind_param("isss", $patient_id, $date, $status, $specialty_string);

    // Execute the statement
    if ($stmt->execute()) {
        echo "✅ Pre-Visit record for Patient ID **" . $patient_id . "** inserted successfully.";
    } else {
        echo "❌ Error inserting record: " . $stmt->error;
    }

    // --- 4. CLOSE CONNECTION ---
    $stmt->close();
    $conn->close();
} else {
    echo "Access Denied. This page must be accessed via form submission.";
}
?>