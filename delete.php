<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

include_once 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE users set status='0' WHERE id_user='$id'";

if ($conn->query($sql) === TRUE) {
    
    //adicionar aos logs
    $comment = "O Client #".$id ." foi movido para Inativo.";
    $sql2 = "INSERT INTO activiry (comment, id_client) VALUES ('$comment', '$id')";
    $conn->query($sql2);
    
} else {
    
}
$conn->close();
header("location:ahome.php");
session_write_close();
?>