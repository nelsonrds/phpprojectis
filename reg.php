<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

include_once 'connection.php';

$name = $_POST['name'];
$username = $_POST['user'];
$password = $_POST['pass1'];
$repassword = $_POST['pass2'];
$email = $_POST['email'];
$isadmin = $_POST['admin'];

$sql = "INSERT INTO Users (name, username, password, repassword, email, isadmin)
VALUES ('$name', '$username', '$password', '$repassword', '$email', '$isadmin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


session_write_close();
?>

