<?php
    Session_start();
    include "konekLogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Regist Page</title>
</head>

<body class="bg-primary">
    <?php
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            if(empty($username) || empty($password)) {
                echo '<script>alert("Username atau Password tidak boleh kosong!");</script>';
            } else {
                
            $query = mysqli_query($koneksi, "INSERT INTO login(username,password) values('$username','$password')");

            if($query) {
                echo '<script>alert("Selamat, Pendaftaran berhasil,Silahkan Login")</script>';
            } else {
                echo '<script>alert("Selamat, Pendaftaran gagal")</script>';
            }
        }
     }
    ?>
    <section>
        
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                        <h2 class="text-center mt-2" >Register</h2>
                            <form action="" method="POST">
                                <input type="text" class="form-control my-4 py-2" placeholder="Username" name="username" />
                                <input type="password" class="form-control my-4 py-2" placeholder="Password" name="password" />
                                <div class="text-center mt-3">
                                    <button class="btn btn-primary">Register</button>
                                    <a href="Login.php" class="nav-link link-primary">Already have Account ?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>