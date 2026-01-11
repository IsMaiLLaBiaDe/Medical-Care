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
4. Past Medical History (PMH)
    • Purpose: A record of the patient's previous medical conditions, procedures, and illnesses, which can impact current treatment.
    • Content:
        ◦ Major Illnesses/Hospitalizations (e.g., Diabetes, Hypertension, Asthma).
        ◦ Past Surgeries and Dates (e.g., Appendectomy 2015).
        ◦ Current and Past Medications (including dose and frequency).
        ◦ Allergies (Medication, food, environmental—must state the reaction).
        ◦ Immunization Status (e.g., Flu shot, Tetanus, COVID-19 series).
        ◦ Relevant Injuries.
		
	<form>
	<input> A record of the patient's previous medical conditions</input>
	<?php //patient name ?>
	</form>