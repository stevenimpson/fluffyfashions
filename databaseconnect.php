<?php
$servername = "localhost";
$username = "X32199883";
$password = "X32199883";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
// {
// 	echo "Connected successfully";
// }

?>