<?php
session_start();

$user = $_POST['user'];
$password = $_POST['password'];

include_once 'verify.php';

if(isset($_SESSION['user']) && isset($_SESSION['password'])){
    if($_SESSION['isadmin']==1){
        header("location:ahome.php");
    }else{
        header("location:home.php");
    }
}else{
    header("location:index.php");
}
session_write_close();
?>