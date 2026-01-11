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
			2. History of Present Illness (HPI)
    • Purpose: A chronological and detailed account of the development of the Chief Complaint. This is the narrative of the current problem.
    • Content: This section should elaborate on the CC using the standard medical framework (often called OPQRST or LOCATES):
        ◦ Onset (When did it start?)
        ◦ Palliative/Provocative factors (What makes it better or worse?)
        ◦ Quality (What does it feel like—sharp, dull, throbbing?)
        ◦ Radiation/Region (Where is it, and does it move?)
        ◦ Severity (Pain scale 0-10 or impact on function)
        ◦ Timing/Temporal relationship (Continuous, intermittent, sudden, gradual).
        ◦ Any associated signs or symptoms.
		
		
		
<form>
<input>u last opts chronologicaly</input>
<?php //patient name ?>
</form>