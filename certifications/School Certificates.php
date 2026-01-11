<?php

session_start();
if (isset($_SESSION["clients_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM doctors
            WHERE id = {$_SESSION["clients_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}



if (isset($_SESSION['role']) && $_SESSION['role'] == 'clients') {
  // Display the admin.php page

} else {
  // Redirect the user to the login page
  header('Location: login.php');
}


?>
<!--School Certificates
This usually refers to an official document verifying a student's educational achievement (e.g., completion of a degree, secondary education certificate, or transcript).
Required Details
    • Student Identification:
        ◦ Full Name, Date of Birth, and Student ID/Registration Number.
    • Issuing Institution's Details:
        ◦ Full Name of the School/University.
        ◦ Official Seal and Logo.
        ◦ Location and Date of Issue.
    • Academic Achievement:
        ◦ The name of the qualification/certificate awarded (e.g., High School Diploma, Bachelor of Science, GCSE, A-Level).
        ◦ The date of award/completion.
        ◦ For transcripts/records: A detailed breakdown of subjects taken and the grades/marks received (usually including credits or hours).
        ◦ The overall result (e.g., Pass, Honours, First Class).
    • Signatures:
        ◦ Official signature of the Head of the Institution (e.g., Principal, Dean, Registrar).
// -->
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox Layout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
/* General Setup */
html, body {
    height: 100%; /* Ensures the body takes up the full viewport height */
    margin: 0;
}

.container {
    display: flex;
    flex-direction: column; /* Stacks the children (header, main, footer) vertically */
    min-height: 100vh; /* Ensures the container is at least the full height of the viewport */
    width: 100%; /* Ensures the container spans the full width */
}

/* Children Styling */
.header, .main, .footer {
    width: 100%; /* Ensures each section is full width */
    padding: 20px;
    box-sizing: border-box; /* Includes padding in the element's total width/height */
    text-align: center;
    font-size: 1.2em;
    color: white; /* Text color for visibility */
}

.header {
    background-color: #007bff; /* Blue */
}

.main {
    flex-grow: 1; /* This is crucial! It allows the main content to take up all available vertical space */
    background-color: #f4f4f4; /* Light Grey */
    color: #333;
}

.footer {
    background-color: #333; /* Dark Grey */
}


</style>
<body>
    <div class="container">
        <header class="header">Header Content</header>
        <main class="main">Main Content Area</main>
        <footer class="footer">Footer Content</footer>
    </div>
</body>
</html>
