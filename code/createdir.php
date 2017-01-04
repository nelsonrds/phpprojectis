<?php
    if(!isset($_GET['name'])){
        header("location:index.php");
    }

    $name = $_GET['name'];
    $id = $_GET['id'];
    $direction = "?id=".$id;

    if (!file_exists('clients/'.$name)) {
        mkdir("../clients/".$name, 0777, true);
        header("location:repository.php".$direction);
    }

?>