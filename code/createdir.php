<?php
    if(!isset($_GET['name'])){
        header("location:index.php");
    }

    $name = $_GET['name'];
    $id = $_GET['id'];
    $direction = "?id=".$id;
    include_once 'connection.php';
    

    if (!file_exists('clients/'.$name)) {
        mkdir("../clients/".$name, 0777, true);      
        //adicionar aos logs
        $comment = "Foi criada uma diretoria ao Client #".$id .".";
        $sql2 = "INSERT INTO activiry (comment, id_client) VALUES ('$comment', '$id')";
        $conn->query($sql2);
        $conn->close();     
        
        header("location:repository.php".$direction);
    }

?>