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
5. Family History (FH)
    • Purpose: To identify illnesses that have a genetic component or increased familial risk.
    • Content:
        ◦ Health Status of Immediate Relatives (Parents, Siblings, Children).
        ◦ Age and Cause of Death for deceased relatives.
        ◦ Specific diseases present in the family, such as:
            ▪ Cancer (type and age of onset).
            ▪ Heart disease/Stroke.
            ▪ Diabetes.
            ▪ Mental illness.
            ▪ Genetic disorders.
			
		<form>
		<input>
		Genetic disorders.
		</input>
		
		</form>
		<?php //patient name ?>