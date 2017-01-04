<?php

if(isset($_POST['user']) && isset($_POST['password'])){
    include_once 'connection.php';

    $user = $_POST['user'];
    $password = $_POST['password'];
    $passmd5 = md5($password);

    $ch = curl_init();
    $fields = array( 'user'=>$user, 'pass'=>$passmd5);
    $postvars = '';
    foreach($fields as $key=>$value) {
      $postvars .= $key . "=" . $value . "&";
    }
    include_once '../config.php';
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
    curl_setopt($ch,CURLOPT_POSTFIELDS,$postvars);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
    curl_setopt($ch,CURLOPT_TIMEOUT, 20);
    $response = curl_exec($ch);
    curl_close ($ch);


    $json = json_decode($response, true);
    var_dump($json);

    if ($json['posts']['0'] == null) {
      echo "0 results";
    } else {
      $user1 = $json['posts']['0']['post']['username'];
      $name = $json['posts']['0']['post']['name'];
      $isAdmin = $json['posts']['0']['post']['isadmin'];
      print("Entrei aqui");

      $_SESSION['user'] = $user1;
      $_SESSION['name'] = $name;
      $_SESSION['isadmin'] = $isAdmin;

    }
  } else {
    header("location:index.php");
  }

?>
