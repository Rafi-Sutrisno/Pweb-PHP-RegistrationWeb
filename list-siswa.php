<?php 
include("config.php"); 
$sql = "SELECT * FROM calon_siswa";
$query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="./src/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/style.css">
</head>
<body>
    <div class="d-flex align-items-center justify-content-center h-100" style = "color : #E3E7AF;; background-color: #4D5061;">
        <div class=" d-flex flex-column rounded-3 justify-content-start px-2 py-4 h-100" style="gap: 35px; background-color: #5C80BC; border-radius : 25px;">
            <div class="text-center">
                <h3 style="color : #3D3B30;">Siswa Yang Sudah Mendaftar</h3>
                <h5 style="color : #3D3B30;">SMK Coding</h5>
            </div>

            <a href="form-daftar.php" style = "border: none;">
                <button class="btn " style = "border-radius : 25px; background-color: #E7E247">
                    <h6 style="color : #3D3B30; border: none;">Tambah Siswa Baru</h6>
                </button>
            </a>
            <p> Total: <?php echo mysqli_num_rows($query) ?> </p>

            <table class="table" style = "background-color: #E7E247; border-radius : 20px;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Sekolah Asal</th>
                    <th scope="col">Tindakan</th>
                <tr>
            </thead>
            <tbody>
                <?php
                    
                    while ($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<th scope='row'>".$siswa['id']."</th>";
                        echo "<td>".$siswa['nama']."</td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";

                        echo "<td>";
                        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                        echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                ?>
            </tbody>

            </table>


        </div>
    </div>
    
    

</body>
</html>