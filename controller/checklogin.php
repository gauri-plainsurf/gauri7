<?php

session_start();

if(!isset($_COOKIE[$user])) {
    echo "Cookie named '" . $user . "' is not set!";
} else {
    echo "Cookie '" . $user . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$user];
}


$conn = new mysqli('localhost', 'root', '', 'project');

if ($conn) {
    echo"connection successful";
} else {
    echo"connection failed";
}


if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select *from login where user = '$user' and pass = '$pass'";

    $query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($query);
    if ($row == 1) {
        $cookie_name = "user";
        $cookie_value = "$user";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        echo"login successful";
        $_SESSION['user'] = $user;
        header('location:/public/employee.php');
    } else {
        echo"login failed";
        header('location:/index.php');
    }
}