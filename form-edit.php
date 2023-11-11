<?php
    include("config.php");

    if( !isset($_GET['id']) ){
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
    }

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
    <div class="d-flex align-items-center justify-content-center" style = "color : #E3E7AF;; background-color: #4D5061;">
        <div class="d-flex flex-column rounded-3 justify-content-start px-5 py-2" style="gap: 35px; background-color: #5C80BC; border-radius : 25px;">
            <div class="text-center">
                <h3 style="color : #3D3B30;">Formulir Pendaftaran Siswa Baru</h3>
                <h5 style="color : #3D3B30;">SMK Coding</h5>
            </div>

            <form action="proses-edit.php" method="POST">
            
                <fieldset class="d-flex flex-column gap-3">
                
                    <div>
                        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    </div>

                    <div>
                        <label for="nama">Nama:</label>
                        <input class = "p-2" type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" style = "border-radius : 5px; background-color: #E7E247"/>
                    </div>
                    
                    <div>
                        <label for="alamat">Alamat</label>
                        <textarea class = "p-2" name="alamat" style = "border-radius : 5px; background-color: #E7E247; border-top : 2px solid black; border-left : 2px solid black" ><?php echo $siswa['alamat']?></textarea>
                    </div>

                    <div>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> >Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> >Perempuan</label>
                    </div>

                    <div>
                        <label for="agama">Agama: </label>
                        <?php $agama = $siswa['agama']; ?>
                        <select class = "p-2" name="agama" style = "border-radius : 5px; background-color: #E7E247; border-top : 2px solid black; border-left : 2px solid black" >
                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                        </select>
                    </div>

                    <div>
                        <label for="sekolah_asal">Sekolah Asal: </label>
			            <input class = "p-2" type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" style = "border-radius : 5px; background-color: #E7E247; border-top : 2px solid black; border-left : 2px solid black" />
                    </div>

                    
                    <input class="btn b3 mt-5" type="submit" name="simpan" value="Simpan" style = "border-radius : 25px; background-color: #E7E247">
                    
                </fieldset>
        
            </form>
        </div>
    </div>
</body>

