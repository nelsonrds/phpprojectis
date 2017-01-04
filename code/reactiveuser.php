<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

include_once 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE users set status='1' WHERE id_user='$id'";

if ($conn->query($sql) === TRUE) {
    
    //adicionar aos logs
    $comment = "O Client #".$id ." foi ativado.";
    $sql2 = "INSERT INTO activiry (comment, id_client) VALUES ('$comment', '$id')";
    $conn->query($sql2);
    
} else {
    
}
$conn->close();
header("location:inactiveusers.php");
session_write_close();
?>