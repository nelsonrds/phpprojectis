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
                            <label><input type="checkbox" value="is" id="ad" name="admin"></label>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="go" value="registar" class="btn btn-primary">
                    <input type="reset" value="limpar" class="btn btn-danger">
                        <a href="ahome.php"><button type="button" class="btn btn-default">Voltar</button></a>
                    </div>
                </form>

            <br>
            <br>
            <br>

            <?php
                if(isset($_POST['go'])){

                    $name = $_POST['name'];
                    $username = $_POST['user'];
                    $password = $_POST['pass1'];
                    $repassword = $_POST['pass2'];
                    $email = $_POST['email'];
                    if(isset($_POST['admin'])){
                        $isadmin = "1";
                    }else{
                        $isadmin = "0";
                    }

                    if(!empty($name) && !empty($username) && !empty($password) && !empty($repassword) && !empty($email)){
                        //verificar na base de dados
                        include_once 'connection.php';

                        $ver = "Select * from users where username='$username'";
                        $userrecived = $conn->query($ver);

                        if($userrecived->num_rows == 0){
                            if($password == $repassword){
                                $passmd5 = md5($password);

                                $sql = "INSERT INTO users (name, username, password, email, isadmin, status)
                                VALUES ('$name', '$username', '$passmd5', '$email', '$isadmin', '1')";

                                if ($conn->query($sql) === TRUE) {
                                    echo '<div class="alert alert-success"><strong>Success!</strong> Utilizador Criado com Sucesso!</div>';

                                    //criar repositorio
                                    if (!file_exists('../clients/'.$username)) {
                                        mkdir('../clients/'.$username, 0777, true);
                                    }

                                    //adicionar aos logs
                                    $comment = "O Client ". $name. " foi adicionado ao sistema!";
                                    $sql2 = "INSERT INTO activiry (comment) VALUES ('$comment')";
                                    $conn->query($sql2);
                                    header("location:ahome.php");
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }

                            }else{
                                 echo '<div class="alert alert-danger"><strong>Fail!</strong> Password inválida!</div>';
                            }
                        }else{
                            echo '<div class="alert alert-danger"><strong>Fail!</strong> Utilizador já existe!</div>';
                        }

                    }else{
                        echo '<div class="alert alert-danger"><strong>Fail!</strong> Algum campo está vazio!</div>';
                    }
                }
            ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>

</html>
