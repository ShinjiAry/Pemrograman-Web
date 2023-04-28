<?php
    include("koneksi.php");

    $table = "CREATE TABLE tbUser(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    $table2 = "CREATE TABLE tbMahasiswa(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(255),
        prodi VARCHAR(10),
        jeniskelamin VARCHAR(255),
        tglahir DATE,
        idmahasiswa VARCHAR(255)
    );";

    $hsl = mysqli_query ($cnn, $table);
    if($hsl){
        echo "Table tbMahasiswa ==> Succes";
    }
?>