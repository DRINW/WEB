<?php
    include('Dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Tabel1.css">
    <title>Tabel Kampus</title>
</head>

<body class="">
    
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
              <a class="nav-link" href="Home.php">Home</a>
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
    <!--Nav-->


    <div class="mt-5" id="judul">
        <h1 class="text-center">Tabel Peminjaman</h1>
    </div>

        <!-- Button trigger modal -->
         <div class="container ps-0" id="btn">
          <button type="button" class="btn btn-primary float-Start" data-bs-toggle="modal" data-bs-target="#PPmodal">
            INSERT
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
            <label>Nama</label>
            <input type="text" class="form form-control" name="Inama">
          </div>

          <div class="form-group">
            <label>Jurusan</label>
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
    <!-- Modal -->

    <!--Tabel-->
<div style="overflow-y:auto;" class="table-responsive mt-5">
    <table class="table table-dark table-striped table-hover table-bordered container table-responsive">
        <thead>
            <tr>
                <th>Id Peminjam</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
                <th>Batas Pengembalian</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $query = "select * from mahasiswa";

                $result = mysqli_query($connection, $query);
                if(!$result) {
                    die("query failed.mysqli_error"());
                }
                else {
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['Id']?></td>
                                <td><?php echo $row['Nama']?></td>
                                <td><?php echo $row['Jurusan']?></td>
                                <td><?php echo $row['Jurusan']?></td>
                                <td><?php echo $row['Jurusan']?></td>
                                <td><?php echo $row['Jurusan']?></td>
                                <td><a href="update_page_1.php?id=<?php echo $row['Id']?>" class="btn btn-success">Update</a></td>
                                <td><a href="delete_page_1.php?id=<?php echo $row['Id']?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php
                    }
                }
            ?>
        </tbody>
    </table>
              </div>
    <?php
      if(isset($_GET['message'])) {
        echo "<div class='alert alert-danger text-center'>".$_GET['message']."</div>";
      }
    ?>

    <?php
      if(isset($_GET['insert_msg'])) {
        echo "<div class='alert alert-info text-center'>".$_GET['insert_msg']."</div>";
      }
    ?>

<?php
      if(isset($_GET['update_msg'])) {
        echo "<div class='alert alert-info text-center'>".$_GET['update_msg']."</div>";
      }
    ?>

<?php
      if(isset($_GET['delete_msg'])) {
        echo "<div class='alert alert-info text-center'>".$_GET['delete_msg']."</div>";
      }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>