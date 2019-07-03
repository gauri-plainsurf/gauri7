<?php
include_once '../database/dbconnection.php';

if (count($_POST) > 0) {
    
    mysqli_query($conn, "UPDATE employee set  name='" . $_POST['name'] . "', email='" . $_POST['email'] . "',address='" . $_POST['address'] . "' ,phone_no='" . $_POST['phone_no'] . "' ,skills='" . $_POST['skills'] . "' ,salary='" . $_POST['salary'] . "' WHERE id='" . $_GET['id'] . "'");
    $message = "";
    header('location:display_employee.php');
}
$result = mysqli_query($conn, "SELECT * FROM employee WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>employee</title>
       <?php
       include_once '../includes/links.php';
       ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>

       <?php
       include_once '../includes/update.php';
       ?>
    </body>

</html>