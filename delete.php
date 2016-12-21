<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

include_once 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id_user='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header("location:ahome.php");
session_write_close();
?>