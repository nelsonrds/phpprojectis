<?php
    if(!isset($_SESSION['user']) && !isset($_SESSION['password'])){
        header("location:index.php");
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $q = "SELECT * FROM activiry WHERE id_client=$id ORDER BY id_activity DESC";
    } else {
        $q = "SELECT * FROM activiry ORDER BY id_activity DESC";
    }


?>

<table class="table table-hover table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Data</th>
        <th>Client</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include_once 'connection.php';
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_activity"]."</td>";
            echo "<td>".$row["date"]."</td>";
            echo "<td>".$row["id_client"]."</td>";
            echo "<td>".$row["comment"]."</td>";
            echo "</tr>";

        }
    }
    ?>
    </tbody>
</table>

