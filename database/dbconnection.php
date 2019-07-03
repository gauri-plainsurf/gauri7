<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli('localhost', 'root', '', 'project');
//check connection

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
echo "";
?>
