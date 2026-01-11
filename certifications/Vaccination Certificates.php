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
<!-- This document, also known as an Immunization Record, verifies that an individual has received specific vaccinations.
Required Details
    • Individual's Identification:
        ◦ Full Name, Date of Birth, and Address.
        ◦ Unique Identification Number (e.g., medical record number, passport number).
    • Vaccination Record (for each dose received):
        ◦ Name of the Vaccine (e.g., Measles, Mumps, Rubella (MMR), COVID-19, Tdap).
        ◦ Date the Vaccine was Administered.
        ◦ Dose Number (e.g., Dose 1 of 2, Booster).
        ◦ Route and Site of Administration (e.g., Intramuscular, Left Arm).
        ◦ Batch/Lot Number of the vaccine administered (crucial for safety/recall tracking).
    • Certifying Authority:
        ◦ Name and Signature of the administering healthcare professional.
        ◦ Name of the Clinic/Facility where the vaccine was given.
        ◦ Official Stamp or Seal of the facility.-->

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
