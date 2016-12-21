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
            <div class="row">
                <div class="col-md-11">
                    <h3>Bem vindo! <?php echo $_SESSION['name'];?></h3>
                </div>
                <div class="col-md-1">
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
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
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row["id_user"]."</td>";
                                    echo "<td>".$row["username"]."</td>";
                                    echo "<td>".$row["name"]."</td>";
                                    echo "<td>".$row["email"]."</td>";
                                    echo "<td>".$row["status"]."</td>";
                                    echo "<td>".$row["isadmin"]."</td>";
                                    echo '<td><a href="repository.php?id='.$row["id_user"].'">./'.$row["username"].'</a></td>';
                                    echo '<td><a href="delete.php?id='.$row["id_user"].'"><img src="images/delete.png" style="width:80px;height:40px;"></a><a href="activity.php?id='.$row["id_user"].'"><img src="images/activity.png" style="width:40px;height:40px;"></a></td>';
                                    echo "</tr>";
                                }
                            } else {
                                echo "0 results";
                            }

                        ?>                
                    </tbody>
                </table>
            </div>
            <br>
                <div class="col-md-2">
                    <form action="registar.php">
                        <input type="submit" value="Novo utilizador" class="form-control"/>
                    </form>
                </div>            
        </div>
    </body>
</html>

