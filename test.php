<?php
$servername = "student.crru.ac.th";
$username = "601413040";
$password = "atthanon@3040";
$dbname = "601413040";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>