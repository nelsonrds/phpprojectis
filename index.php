<?php
    session_start();
    
    if(isset($_SESSION['user'])){
        header("location:home.php");
    }
    session_write_close();
?>

<html>
    <?php include 'header.php'; ?>
    <body>
        <div class="container">
            <div class="page-header">
              <h1>Empresa XPTO - IS Trab1</h1>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="login.php" method="post">
                        <input type="text" name="user" placeholder="username" class="form-control"><br>
                        <input type="password" name="password" placeholder="*******" class="form-control"><br>
                        <input type="submit" value="Enter" class="form-control">
                    </form>    
                </div>
            </div>
            
        </div>
        
        
    
    </body>
</html>

