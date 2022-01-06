<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1951061139_university";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>