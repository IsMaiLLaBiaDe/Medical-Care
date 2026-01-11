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
6. Social History (SH)
    • Purpose: To understand the patient's environment, habits, and support system, which can profoundly influence health.
    • Content:
        ◦ Occupation and exposure risks.
        ◦ Marital Status and support system.
        ◦ Substance Use:
            ▪ Tobacco (type, amount, duration, past attempts to quit).
            ▪ Alcohol (type, frequency, amount).
            ▪ Illicit Drug Use (type, route, frequency).
        ◦ Diet and Exercise habits.
        ◦ Travel History (if relevant).
        ◦ Living Situation (stairs, home environment).
		
		
		
		<?php //patient,doctor ?>
		<form>
		
		<input>Occupation and exposure risks.</input>
		<input>Substance Use.</input>
		<input>Diet and Exercise habits.</input>
		<input>Living Situation (stairs, home environment).</input>
		</form>
		