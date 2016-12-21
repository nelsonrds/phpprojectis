<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
    header("location:index.php");
}


session_write_close();
?>

<html>
    <head>
    </head>
    
    <?php include 'header.php'; ?>
        
    <body>
        <div class="container">
            <div class="page-header">
              <h1>Empresa XPTO - IS Trab1</h1>
            </div>
            <h3>Registar Utilizador</h3>
            <br>
                <form action="registar.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nam">Nome:</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" id="nam" placeholder="name">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="us">Username:</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="user" id="us" placeholder="username">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pw1">Password:</label>
                          <div class="col-sm-5">
                            <input type="password" class="form-control" name="pass1" id="pw1" placeholder="*******">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pw2">Re-Password:</label>
                          <div class="col-sm-5">
                            <input type="password" class="form-control" name="pass2" id="pw2" placeholder="*******">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="mail">Email:</label>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" name="email" id="mail" placeholder="something@ipvc.pt">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ad">Admin:</label>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" id="ad" name="admin[]"></label>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="go" value="registar" class="btn btn-primary">    
                    <input type="reset" value="limpar" class="btn btn-danger">    
                    <button type="cancel" class="btn btn-default" onclick="javascript:window.location='ahome.php';">Cancel</button>
                    </div>
                </form>
            
            <br>
            <br>
            <br>
            
            <?php
                if(isset($_POST['go'])){
                    if(isset($_POST['name']) && isset($_POST['user']) && isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['email']) && isset($_POST['name'])){
                        $pass1 = $_POST['pass1'];
                        $pass2 = $_POST['pass2'];
                        if($pass1 == $pass2){
                            //entrou!

                            include_once 'connection.php';

                            $name = $_POST['name'];
                            $username = $_POST['user'];
                            $password = $_POST['pass1'];
                            $repassword = $_POST['pass2'];
                            $email = $_POST['email'];
                            $isadmin = $_POST['admin'];

                            $sql = "INSERT INTO Users (name, username, password, repassword, email, isadmin)
                            VALUES ('$name', '$username', '$password', '$repassword', '$email', '$isadmin')";

                            if ($conn->query($sql) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                        }else{
                            echo '<div class="alert alert-success"><strong>Success!</strong> Utilizador Criado com Sucesso!</div>';
                        }
                    }else{
                        echo '<div class="alert alert-danger"><strong>Fail!</strong> Algum campo está vazio!</div>';
                    }
                }
            ?>
        </div>
        
    </body>
    
</html>