<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
?>
<?php
include_once '../database/dbconnection.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $skills = $_POST['skills'];
    $salary = $_POST['salary'];

    $sql = "select *from employee";
    $result = mysqli_query($conn, $sql);
}
?>
