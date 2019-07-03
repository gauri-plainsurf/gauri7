<?php
include_once '../database/dbconnection.php';

$sql = "delete FROM employee WHERE id = '$_GET[id]'";

if(mysqli_query($conn, $sql)){
    header("refresh:1;url=/display_employee.php");
}
else{
    echo"not deleted";
}
