<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "login");

    $koneksi = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$koneksi) {
        die("Connection Gagal");
    }
    else {
 
    }
?>