<?php


if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

include_once 'connection.php';

$que = "select * from activiry";

$result = $conn->query($que);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            if($row['id_client']==$id){
                echo '<li>'.$row['comment'].' - '. $row['date'].'</li>';
            }
        }
    }
}else{
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            echo '<li>'.$row['comment'].' - '. $row['date'].'</li>';
        }
    }   
}
 
?>