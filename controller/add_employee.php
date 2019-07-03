<?php

include_once '../database/dbconnection.php';


$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_no = $_POST['phone_no'];
$skills = $_POST['skills'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employee (name,email,address,phone_no,skills,salary)
VALUES ('$name', '$email', '$address','$phone_no','$skills','$salary')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:/public/employee.php", 301);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
