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
        
        <div class="container">
            <div class="page-header">
              <h1>Administration Page <small> - XPTO Company</small> </h1>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <h3>Bem vindo! <?php echo $_SESSION['name'];?></h3>
                </div>
                <div class="col-md-1">
                    <h3><a href="logout.php">Logout</a></h3>
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
                                        while($row = $result->fetch_assoc()) {
                                            if($row['status'] == 1){
                                                echo "<tr>";
                                                echo "<td>".$row["id_user"]."</td>";
                                                echo "<td>".$row["username"]."</td>";
                                                echo "<td>".$row["name"]."</td>";
                                                echo "<td>".$row["email"]."</td>";
                                                echo "<td>".$row["status"]."</td>";
                                                echo "<td>".$row["isadmin"]."</td>";
                                                echo '<td><a href="repository.php?id='.$row["id_user"].'">./'.$row["username"].'</a</td>';
                                                echo '<td><a href="delete.php?id='.$row["id_user"].'"><img src="images/delete.png"style="width:30px;height:30px;"></a><a href="activity.php?id='.$row["id_user"].'"><img src="images/activity.png" style="width:30px;height:30px;"></a></td>';
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
            <div class="col-md-2 col-sm-offset-10">
                <a href="registar.php"><button type="button" class="btn btn-warning">Novo utilizador</button></a>
            </div>    
            <br><br><br>
            
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Logs</h4>
                        </div>
                        <div class="panel-body">
                            <?php
                             include 'logs.php';
                            ?>
                        </div>
                    </div>
                </div>
                
            <br>
                        
        
    </body>
</html>

