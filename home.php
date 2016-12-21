<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}
$name = "OLA";

var_dump($_SESSION);


session_write_close();
?>

<html>
<p> <?php echo $name;?></p>
    <p><a href="logout.php">Logout</a></p>
</html>

