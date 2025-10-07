<?php
$servername = "localhost";
$username = "myuser";     // use your MySQL username
$password = "mypassword"; // use your MySQL password
$dbname = "myapp";        // the database you created

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
