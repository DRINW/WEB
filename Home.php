<?php
    Session_start();

    if(!isset($_SESSION['user'])) {
        header('location:Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">
    <title>Home</title>
</head>

<body class="d-flex flex-column min-vh-100">
    
    <!--Nav-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Perpustakaan Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header id="page-top" class="mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="lbr.jpeg">
            </div>
        </div>
    </div>
</header>


    <!--Nav-->
    
    <!-- Cotent Buku 1 -->
    
    <div class="d-flex justify-content-center align-items-center flex-grow-1 mt-5" id="content">
        <div class="text-center">
            <div id="kotak" class="mt-4">
                <img src="buku.png" id="buku"></a>
                <h4 id="judul">Pemograman Objek Java</h4>
                <a href="Tabel2.php" id="Reservasi" class="btn">Balikin</a>

                 <!-- Button trigger modal -->
         <div class="container ps-0">
          <button type="button" class="btn btn-white float-Start" data-bs-toggle="modal" data-bs-target="#PPmodal" id="Reservasi1">
            Peminjaman
          </button>
        </div>

    <!-- Modal -->
     <form action="insert_data.php" method="POST">
    <div class="modal fade shadow" id="PPmodal" tabindex="-1" aria-labelledby="PPmodalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="PPmodalLabel">Masukan Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="form-group shadow">  
            <label id="lnama">Nama Peminjam</label>
            <input type="text" class="form form-control" name="Inama">
          </div>

          <div class="form-group shadow">
            <label id="lnb">Nama Buku</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>

          <div class="form-group shadow">
            <label id="la">Alamat</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>
          
          <div class="form-group shadow">
            <label id="lnh">No Hp</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>

          <div class="form-group shadow">
            <label id="lbp">Batas Pengembalian</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>
          
          </div>
          <div class="modal-footer shadow">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" name="add_siswa" value="ADD"></input>
          </div>
        </div>
      </div>
    </div>
</form>
    <!-- Modal -->

            </div>
        </div>
    </div>
    
    <div class="text-center mb-5" id="df">
      <h1>Daftar Buku</h1>
    </div>
     <!-- /Content Buku 1 -->


      <!-- Cotent Buku 2 -->
    
    <div class="d-flex justify-content-center align-items-center flex-grow-1" id="content">
        <div class="text-center">
            <div id="kotak" class="mt-4">
                <img src="buku.png" id="buku"></a>
                <h4 id="judul">Pemograman Objek Java</h4>
                <a href="Tabel2.php" id="Reservasi" class="btn">Balikin</a>

                           <!-- Button trigger modal -->
         <div class="container ps-0">
          <button type="button" class="btn btn-white float-Start" data-bs-toggle="modal" data-bs-target="#PPmodal" id="Reservasi1">
            Peminjaman
          </button>
        </div>

    <!-- Modal -->
     <form action="insert_data.php" method="POST">
    <div class="modal fade" id="PPmodal" tabindex="-1" aria-labelledby="PPmodalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="PPmodalLabel">Masukan Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="form-group">  
            <label id="lnama">Nama Peminjam</label>
            <input type="text" class="form form-control" name="Inama">
          </div>

          <div class="form-group">
            <label id="lnb">Nama Buku</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>

          <div class="form-group">
            <label id="la">Alamat</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>
          
          <div class="form-group">
            <label id="lnh">No Hp</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>

          <div class="form-group">
            <label id="lbp">Batas Pengembalian</label>
            <input type="text" class="form form-control" name="Ijurusan">
          </div>
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" name="add_siswa" value="ADD"></input>
          </div>
        </div>
      </div>
    </div>
</form>
            </div>
        </div>
    </div>
    
     <!-- /Content Buku 2 -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>