<?php
    if (isset($_POST['id'])) {
        $idUser = $_POST['id'];

        include_once 'connection.php';

        $sear = "Select * from users where id_user = '$idUser'";

        $res = array();

        $res = $conn->query($sear);

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }
        echo json_encode($rows,JSON_UNESCAPED_UNICODE);
    }
?>

