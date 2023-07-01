<?php
    $dta["NIM"] = "2201010345";
    $dta["Nama"] = "I Made Kevin Pratama";
    $dta["JenisKelamin"] = "L";
    $dta["Alamat"] = "Pedungan, Denpasar";
    $dta["Hobi"] = "Tidur";
    $dta["Status"] = "Jomblo";
    
    echo json_encode($dta);
    header("Content-type: application/json; charset: utf-8")
?>