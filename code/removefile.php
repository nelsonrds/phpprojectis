<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

$id = $_GET['id'];
$filepath = $_GET['fileRemove'];

if(file_exists($filepath)){
    unlink($filepath);
    echo "existe";
}

include_once 'connection.php';
//adicionar aos logs
$comment = "O Ficheiro ". $filepath. " foi removido!";
$sql2 = "INSERT INTO activiry (comment, id_client) VALUES ('$comment', '$id')";
$conn->query($sql2);
    
header("location:repository.php?id=".$id);

session_write_close();
?>