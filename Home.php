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
    <title>Home Page</title>
</head>

<body class="">
    
    <!--Nav-->
    <div class="nav bg-primary">
        <ul class="nav ms-4">
            <li class="nav-item">
              <a class="nav-link link-light" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-light" href="Logout.php">Log Out</a>
            </li>
          </ul>
    </div>
    <!--Nav-->
    
    <div class="nav p-5 gap-2">
        <a href="Tabel1.php" class="btn btn-secondary">Tabel 1</a>
        <a href="" class="btn btn-secondary">Tabel 2</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>