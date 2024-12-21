<?php
include "Dbcon.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update Mahasiswa</title>
</head>
<body>
    <div class="bg-primary container-fluid" style="height:100px;">
        <h1 class="text-center pt-3 text-white">Update Data Mahasiswa</h1>
    </div>

    <?php
    // Mengecek apakah id ada di URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Query untuk mendapatkan data mahasiswa berdasarkan id
        $query = "SELECT * FROM mahasiswa WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        } else {
            $row = mysqli_fetch_assoc($result);
        }
    } else {
        die("ID tidak ditemukan.");
    }
    ?>

    <?php
    // Mengecek apakah tombol update ditekan
    if (isset($_POST['update'])) {
        // Mengambil data dari form
        $name = $_POST['Inama'];
        $jurusan = $_POST['Ijurusan'];

        // Memastikan data tidak kosong
        if (!empty($name) && !empty($jurusan)) {
            // Query untuk update data mahasiswa
            $query = "UPDATE mahasiswa SET Nama = '$name', Jurusan = '$jurusan' WHERE id = $id";

            // Menjalankan query
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("Query failed: " . mysqli_error($connection));
            } else {
                // Redirect setelah berhasil update
                header('Location: Tabel1.php?update_msg=You have successfully updated the data.');
                exit;
            }
        } else {
            echo "Nama dan Jurusan tidak boleh kosong.";
        }
    }
    ?>

    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="text-center mt-2">Update</h2>
                            <!-- Form untuk update data mahasiswa -->
                            <form action="update_page_1.php?id=<?php echo $id; ?>" method="POST">
                                <input type="text" class="form-control my-4 py-2" placeholder="Nama" name="Inama" value="<?php echo isset($row['Nama']) ? $row['Nama'] : ''; ?>" required/>
                                <input type="text" class="form-control my-4 py-2" placeholder="Jurusan" name="Ijurusan" value="<?php echo isset($row['Jurusan']) ? $row['Jurusan'] : ''; ?>" required/>
                                <div class="text-center mt-3">
                                    <input type="submit" class="btn btn-primary" name="update" value="Update">
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
