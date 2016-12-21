<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

session_write_close();

?>

<html>
<?php include 'header.php'; ?>
    
    <body>
        <?php echo "olá! ". $_SESSION['name']; ?>
    </body>
</html>