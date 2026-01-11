<?php

if (empty($_POST["fname"])) {
    die("Name is missing");
}

if ( ! filter_var($_POST["lname"])) {
    die("last name missing");
}

if (strlen($_POST["country"]) > 4) {
    die("Not Found in Earth");
}

if (  empty($_POST["subject"])) {
    die("Subject Please");
}
//echo "Current timestamp: " . $currentTimestamp;
//print_r($_POST);
//var_dump($password_hash);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO feedbacks (fname,lname,country,subject)
        VALUES (?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
				  $_POST["fname"],
                  $_POST["lname"],
				  $_POST["country"],
				  $_POST["subject"],);
                  

if ($stmt->execute()) {

    header("Location: index.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("Non disponible already taken Change Up Form Value");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}








