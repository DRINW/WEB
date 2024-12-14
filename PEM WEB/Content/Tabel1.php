<?php
    include('Dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabel Kampus</title>
</head>

<body class="">
    
    <!--Nav-->
    <div class="nav bg-primary">
        <ul class="nav ms-4">
            <li class="nav-item">
              <a class="nav-link link-light" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-light" href="#">Log Out</a>
            </li>
          </ul>
    </div>
    <!--Nav-->
    <div class="mt-4">
        <h1 class="text-center">Tabel Kampus</h1>
    </div>

    <!--Tabel-->
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jurusan</th>
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
                            </tr>
                        <?php
                    }
                }
            ?>
        </tbody>
    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>