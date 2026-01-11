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

Medical Chart Components: Detailed Content
1. Chief Complaint (CC)
    • Purpose: The single, briefest statement explaining why the patient is seeking care now.
    • Content:
        ◦ The patient's primary symptom or problem.
        ◦ Usually stated in the patient's own words (e.g., "Sharp pain in the chest," "Coughing for three days," "Fever and weakness").
        ◦ Includes the duration of the symptom (e.g., "Headache × 2 days").

<form><input>patient tag</input></form>
<?php //doc name ?>