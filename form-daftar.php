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
                <h5 style="color : #3D3B30;">SMA SMA SMA</h5>
            </div>

            <form action="proses-pendaftaran.php" method="POST">
            
                <fieldset class="d-flex flex-column gap-3">
                
                    <div>
                        <label for="nama" style="color : #E3E7AF;">Nama:</label>
                        <input class = "p-2" type="text" name="nama" id="nama" placeholder="Nama Lengkap" style = "border-radius : 5px; background-color: #E7E247">
                    </div>
                    
                    <div>
                        <label for="alamat">Alamat</label>
                        <textarea class = "p-2" name="alamat" style = "border-radius : 5px; background-color: #E7E247; border-top : 2px solid black; border-left : 2px solid black" ></textarea>
                    </div>

                    <div>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <label style = "color: black"><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label style = "color: black"><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </div>

                    <div>
                        <label for="agama">Agama: </label>
                        <select class = "p-2" name="agama" style = "border-radius : 5px; background-color: #E7E247">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </div>

                    <div>
                        <label for="sekolah_asal">Sekolah Asal: </label>
			            <input class = "p-2" type="text" name="sekolah_asal" placeholder="nama sekolah" style = "border-radius : 5px; background-color: #E7E247"/>
                    </div>

                    
                    <input class="btn b3 mt-5" type="submit" name="daftar" value="Daftar" style = "border-radius : 25px; background-color: #E7E247">
                    
                </fieldset>
        
            </form>
        </div>
    </div>
</body>