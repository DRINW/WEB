<?php include ('Dbcon.php');?>


<?php

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    
    $query = "delete from mahasiswa where id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query Failed");
        }
        else {
            header('location:Tabel1.php?delete_msg=You Have deleted the record.');
        }
    }
?>