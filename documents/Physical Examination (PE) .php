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
7. Physical Examination (PE)
    • Purpose: The objective findings observed and elicited by the healthcare provider during a structured examination.
    • Content:
        ◦ General Appearance (e.g., well-nourished, distressed, pale).
        ◦ Vital Signs (Temperature, Blood Pressure, Heart Rate, Respiratory Rate, Oxygen Saturation).
        ◦ Systemic Examination: Detailed findings for each body system (e.g., Head, Eyes, Ears, Nose, Throat, Neck, Cardiovascular, Lungs/Chest, Abdomen, Extremities, Neurological).
        ◦ Relevant Specific Findings related to the CC (e.g., tenderness, swelling, murmurs).
		
		<form>
		<input>
		what you did doc
		<?php //doc name ?>
		</input>
		</form>