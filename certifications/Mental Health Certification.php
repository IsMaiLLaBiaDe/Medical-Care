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


<!--Mental Health Certification
This often refers to a medical document used for legal or official purposes (e.g., fitness for work, court proceedings, involuntary commitment, or disability claims). The required content varies significantly based on the purpose, but generally includes:
Required Details
    • Patient/Client Information:
        ◦ Full Name, Date of Birth, and Identification Number.
    • Certifying Professional's Information:
        ◦ Name, Signature, Title (e.g., Psychiatrist, Licensed Psychologist), and Official License/Registration Number.
        ◦ Facility/Clinic Address and Contact Information.
    • Diagnosis (Based on official criteria like DSM or ICD):
        ◦ The specific diagnosis or mental health condition.
        ◦ The criteria used to make the diagnosis.
    • Assessment & Rationale:
        ◦ A summary of the patient's symptoms and history.
        ◦ The date(s) the patient was examined/assessed.
        ◦ The purpose of the certification (e.g., "The patient is fit to return to work," "The patient requires inpatient treatment," or "The patient is unable to manage their financial affairs").
    • Duration/Validity:
        ◦ A statement regarding the prognosis or the duration for which the certification is valid.-->
		
		
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
