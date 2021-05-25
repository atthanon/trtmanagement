<?php
date_default_timezone_set("Asia/Bangkok");

$servername = "student.crru.ac.th";
$username = "601413040";
$password = "atthanon@3040";
$dbname = "601413040";

// creater connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check
if (!$conn) {
    die("Connecttion failed" . mysqli_connect_error());
} else {
}

$db_host = "student.crru.ac.th";
$db_user = "601413040";
$db_password = "atthanon@3040";
$db_name = "601413040";
try {
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}


?>