<?php
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "exhibition_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>