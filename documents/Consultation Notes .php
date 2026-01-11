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
9. Consultation Notes
    • Purpose: Documentation written by a specialist (consultant) who was asked by the primary provider to evaluate the patient for a specific problem.
    • Content:
        ◦ Consulting Provider's Name and specialty.
        ◦ Reason for Consultation (the specific question the primary team asked).
        ◦ Review of relevant data (labs, imaging, previous notes).
        ◦ Consultant's Findings (Brief history, relevant physical exam).
        ◦ Consultant's Assessment (Diagnosis related to their specialty).
        ◦ Consultant's Recommendations/Plan (specific advice for treatment, management, or further testing).

<form>help to doc</form>
<?php //doc name ?>