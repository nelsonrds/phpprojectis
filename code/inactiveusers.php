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
            <h3>Utilizadores Inativos</h3>
            <br>
             <div class="panel panel-default">
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Admin</th>
                        <th>Respository</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once 'connection.php';
                            $q = "select * from users";
                            $result = $conn->query($q);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    if($row['status'] == 0){
                                        echo "<tr>";
                                        echo "<td>".$row["id_user"]."</td>";
                                        echo "<td>".$row["username"]."</td>";
                                        echo "<td>".$row["name"]."</td>";
                                        echo "<td>".$row["email"]."</td>";
                                        echo "<td>".$row["status"]."</td>";
                                        echo "<td>".$row["isadmin"]."</td>";
                                        echo '<td><a href="repository.php?id='.$row["id_user"].'">./'.$row["username"].'</a</td>';
                                        echo '<td><a href="reactiveuser.php?id='.$row["id_user"].'"><img src="images/reactive.png"style="width:30px;height:30px;"></a></td>';
                                        echo "</tr>";
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </tbody>
                </table>                
            </div>
            <div class="row">
                <div class="col-md-11"></div>
                <div class="col-md-1">
                    <a href="ahome.php"><button type="button" class="btn btn-default">Voltar</button></a>
                </div>
            </div>
                             
             
        </div>
        
        <?php include 'footer.php'; ?>
    </body>

</html>