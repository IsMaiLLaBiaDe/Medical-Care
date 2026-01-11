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
10. Discharge Summary
    • Purpose: A comprehensive document prepared at the time a patient is released from a hospital or facility, ensuring continuity of care.
    • Content:
        ◦ Admission Date and Discharge Date.
        ◦ Primary Diagnoses at admission and discharge.
        ◦ Procedure(s) performed during the stay.
        ◦ Brief Hospital Course: A narrative summary of the key events, treatments, and response to therapy.
        ◦ Condition at Discharge.
        ◦ Discharge Medication List (new and changed medications).
        ◦ Follow-up Plan: Appointments, necessary tests, and who the patient should follow up with.
        ◦ Discharge Instructions: Diet, activity restrictions, and when to seek emergency care.
<form>
<input>A comprehensive document prepared at the time a patient is released from a hospital</input>
</form>
<?php //doc name ?>