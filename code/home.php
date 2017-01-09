<?php

session_start();

if(!isset($_SESSION['user'])){
    header("location:index.php");
}

if(isset($_SESSION['isadmin'])) {
  if (($_SESSION['isadmin'])==1) {
    header("location:ahome.php");
  }
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
                        $dir = "../clients/".$_SESSION['user'];
                        $size = 0;
                        if(is_dir($dir)){
                            $resources = opendir($dir);
                            while(($entry = readdir($resources)) !== FALSE){
                                if($entry !='.' && $entry != '..'){
                                    $arg = pathinfo($entry);
                                    $extension = $arg['extension'];
                                    echo '<p><a href="file.php?dir='.$dir."/".$entry.'"><img src="images/'.$extension.'.png" style="width:25px;height:25px;">'."./".$entry .'</a></p>';
                                }
                                $size++;
                            }
                            if($size == 2){
                                echo "Nenhum ficheiro no sistema!";
                            }
                        }else{
                            echo "Nenhum ficheiro adicionado!";
                        }
                       
                        ?>
                    </div>
            </div>

        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
