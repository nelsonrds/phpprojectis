<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}
$name = $_SESSION['name'];


session_write_close();
?>

<html>
    <?php include 'header.php'; ?>
    
    <body>
        <div class="container">
         <div class="page-header">
              <h1>Client Page <small> - XPTO Company</small> </h1>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <h3>Bem vindo! <small><?php echo $_SESSION['name'];?></small></h3>
                </div>
                <div class="col-md-1">
                    <h3><a href="logout.php">Logout</a></h3>
                </div>
            </div>
            <br>
            <h3>./<?php echo $_SESSION['user'] ?></h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                        $dir = "clients/".$_SESSION['user'];
                        $resources = opendir($dir);

                        while(($entry = readdir($resources)) !== FALSE){
                            if($entry !='.' && $entry != '..'){
                                echo '<p><a href="'.$dir."/".$entry.'">'."./".$entry .'</a><p>';
                            }
                        }
                        ?>
                    </div>
            </div>
            
        </div>
    </body>
</html>

