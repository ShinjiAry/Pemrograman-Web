<?php
    // memanggil file
    include("../konfigurasi.php");
        //unuk mengkonekan ke DB
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,);
        if($cnn){
            $sql ="CREATE DATABASE " . DBNAME;
            $hsl = mysqli_query($cnn,$sql);
            if($hsl){
                echo "Database" , DBNAME ." berhasil d buat";
            }else {
                echo "Database" , DBNAME ." gagal d buat";
            };
                
        }else{
            echo "Koneksi gagal";
        }
        mysqli_close($cnn);
    
