<?php
    $server = "localhost"; 
    $user = "pmauser";
    $password = "rafisutrisno";
    $nama_database = "pendaftaran_siswa";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if (!$db){
        die("Failed to connect to db: " . mysqli_connect_error());
    }
?>