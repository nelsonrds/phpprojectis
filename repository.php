<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}

$id = $_GET['id'];

include_once 'connection.php';

$q = "SELECT * FROM users where id_user = '$id'";

$result = $conn->query($q);

$row = $result->fetch_assoc();

$name = $row['name'];
$username = $row['username'];

$_POST['id'] = $_GET['id'];
session_write_close();
?>

<html>
<?php include 'header.php'; ?>
    
    <body>
        
        <div class="container">
            <div class="page-header">
                <h1>Administration Page <small> - XPTO Company</small> </h1>
            </div>
            <h3>Repository ./<?php echo $username; ?></h3>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                        $dir = "clients/".$username;
                        $resources = opendir($dir);

                        while(($entry = readdir($resources)) !== FALSE){
                            if($entry !='.' && $entry != '..'){
                                echo '<p><a href="'.$dir."/".$entry.'">'."./".$entry .'</a> <a href="removefile.php?id='.$id.'&fileRemove=clients/'.$username.'/'.$entry.'"><img src="images/del.png" style="width:20px;height:20px;"></a><p>';
                            }
                        }
                        ?>
                </div>
            </div>
            
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label>
                <input type="file" name="fileToUpload" style="none" id="fileToUpload">
                </label>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="submit" value="Submeter" class="btn btn-danger" name="submit">
            </form>
            <a href="ahome.php"><button type="button" class="btn btn-default">Voltar</button></a>
            
            <br>
            <br>
            <br>
            <h2>Logs do: <?php echo $name;?></h2>
            <div class="panel-body">
                            <?php
                             include 'logs.php';
                            ?>
            </div>
        </div>
    </body>
</html>