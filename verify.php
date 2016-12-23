<?php

if(isset($_POST['user']) && isset($_POST['password'])){
    include_once 'connection.php';

    $user = $_POST['user'];
    $password = $_POST['password'];
    $passmd5 = md5($password);

    $query = "Select * from users where username = '$user' and password = '$passmd5'";

    $result = $conn->query($query);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['user'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['isadmin'] = $row['isadmin'];

    } else {
        echo "0 results";
    }
    $conn->close();
}else{
    header("location:index.php");
}

?>
