<?php
//if (isset($_POST['id'])) {
    $uId = $_POST['id'];
    $uName = $_POST['name'];
    $uUserName = $_POST['username'];
    $uPw = $_POST['password'];
    $uEmail = $_POST['email'];
    $uIsAdmin = $_POST['isadmin'];

    include_once 'connection.php';

    $sear = "UPDATE users SET name='$uName', username='$uUserName', password='$uPw', email='$uEmail', isadmin='$uIsAdmin' WHERE id_user='$uId'";
    $res = $conn->query($sear);

    var_dump($res);
    json_encode($res);

//}