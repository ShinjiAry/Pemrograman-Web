<?php
    // memanggil file
    include("../konfigurasi.php");
        //unuk mengkonekan ke DB
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS");
        /*
        if($cnn){
            echo "Koneksi ke DBMS MySQL sukses" ;
        }else{
            echo "Koneksi gagal";
        }
        mysqli_close($cnn);
        */
