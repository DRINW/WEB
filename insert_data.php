<?php

    include('Dbcon.php');
    
    if(isset($_POST['add_siswa'])) {
        $nama = $_POST['Inama'];
        $jrsn = $_POST['Ijurusan'];

        if($nama == "" ||empty($nama)) {
            header('location:Tabel1.php?message=You need to fill name!');
        }else {
            $query = "insert into mahasiswa (Nama,Jurusan) value ('$nama','$jrsn')";

            $result = mysqli_query($connection,$query);

            if(!$result) {
                die("Query Failed".mysqli_error());
            }else {
                header('location:Tabel1.php?insert_msg=You data has been add');
            }
        }
    }
?>