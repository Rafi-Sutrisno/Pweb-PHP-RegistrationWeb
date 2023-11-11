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
    <div class="d-flex align-items-center justify-content-center h-100" style = "color : #EFF1C5; background-color: #4D5061;">
        <div class="d-flex flex-column justify-content-start h-100 p-5" style="gap: 15px; background-color: #5C80BC; border-radius : 15px;">
            <div class="text-center">
                <h3 style="color : #3D3B30;">Pendaftaran Siswa Baru</h3>
                <h5 style="color : #3D3B30;">SMA SMA SMA</h5>
            </div>
        
            <h5 style="color : #E3E7AF;">Menu</h5>

            <a href="form-daftar.php">
                <button class="btn py-auto" style = "border-radius : 25px; background-color: #E7E247">
                    <h6 style="color : #3D3B30;">Daftar Siswa Baru</h6>
                </button>
            </a>
            
            <a href="list-siswa.php">
                <button class="btn py-auto" style = "border-radius : 25px; background-color: #E7E247">
                    <h6 style="color : #3D3B30;">List Siswa</h6>
                </button>
            </a>

            <div>
                <img src="src/graduate.png" alt="" style = "height : 200px" class="mt-1">
            </div>

            <?php if (isset($_GET['status'])): ?>
    
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "Pendaftaran siswa baru berhasil";
                        } else {
                            echo "Pendaftaran gagal";
                        }
                    ?>
                </p>

            <?php endif; ?>

        </div>
    </div>
    
    

</body>
</html>