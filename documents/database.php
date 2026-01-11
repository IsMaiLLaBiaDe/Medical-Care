<?php
$host = 'localhost'; // Database host
$user = 'root'; // Database usernameDatabase
$pass = ''; //  password
$db   = 'resident-evil'; // Database name

// Create a new MySQLi instance (connection)
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_errno) {
    // Handle connection error
    die("❌ Connection failed: " . $mysqli->connect_error);
}

// Set character set for proper data handling
$mysqli->set_charset("utf8mb4");

echo "✅ Connected to the database successfully using MySQLi!";

// $mysqli can now be used for database operations
// Remember to close the connection when done
// $mysqli->close(); 
return $mysqli;
?>


<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "resident-evil";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
// }


// return $mysqli;


// $host = "localhost";
// $dbname = "resident-evil";
// $username = "root";
// $password = "";

// $mysqli = new mysqli(hostname: $host,
                     // username: $username,
                     // password: $password,
                     // database: $dbname);
                     
// if ($mysqli->connect_errno) {
    // die("Connection error: " . $mysqli->connect_error);
// }

// return $mysqli;

// $connq = mysqli_connect('localhost', 'username', 'password', 'dbname');

