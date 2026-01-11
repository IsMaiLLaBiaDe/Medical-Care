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
8. Progress Notes (SOAP Notes)
    • Purpose: To document the patient's status and progress during a course of treatment or hospital stay. Often used daily.
    • Content (Structured by SOAP acronym):
        ◦ Subjective: How the patient feels/reports (CC, pain changes, etc.) since the last note.
        ◦ Objective: Vitals, Physical Exam findings, Lab results, and Imaging results since the last note.
        ◦ Assessment: The provider's analysis of the patient's status, differential diagnoses, or changes in diagnosis.
        ◦ Plan: The next steps in care (New medications, tests ordered, follow-up scheduled, patient education, changes in treatment).
<form>
<input>status and progress</input>

<?php //doc name ?> 


</form>