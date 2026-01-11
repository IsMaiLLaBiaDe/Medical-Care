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
			3. Review of Systems (ROS)
    • Purpose: A systematic, head-to-toe inventory of symptoms a patient may be experiencing, covering all major body systems. This helps uncover related or otherwise undiagnosed problems.
    • Content: The interviewer asks a series of questions about the following systems, noting if the patient reports a positive or negative finding for each:
        ◦ Constitutional (fever, weight loss, fatigue).
        ◦ Eyes, Ears, Nose, Throat (ENT).
        ◦ Cardiovascular (chest pain, palpitations).
        ◦ Respiratory (cough, shortness of breath).
        ◦ Gastrointestinal (nausea, bowel changes).
        ◦ Genitourinary (urinary changes, discharge).
        ◦ Musculoskeletal (joint pain, weakness).
        ◦ Skin/Breast (rashes, lumps).
        ◦ Neurological (headache, dizziness).
        ◦ Psychiatric (anxiety, depression).
        ◦ Endocrine and Hematologic/Lymphatic.
		
		<form>
		<input>Diagnostic</input>
		<?php //doc name ?> 
		</form>
