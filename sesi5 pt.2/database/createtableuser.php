<?php
    include("koneksi.php");
    

    $table = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (35),
        email VARCHAR (255),
        username VARCHAR (10),
        passkey VARCHAR (255),
        iduser VARCHAR (255)
    );";

    $tbMHS = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (35),
        nim VARCHAR (255),
        prodi VARCHAR (10),
        jeniskelamin VARCHAR (1),
        tglahir DATE,
        idmhs VARCHAR (255)
    );";

        $hsl1= mysqli_query ($cnn, $table);
        if($hsl1){
            echo "Table $table ==> SUKSES!";
        }
        $hsl2= mysqli_query ($cnn, $tbMHS);
        if($hsl2){
            echo "Table $tbMHS ==> SUKSES!";
        }

    