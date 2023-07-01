<?php
    $dta[0]["NIM"] = "2201010345";
    $dta[0]["Nama"] = "I Made Kevin Pratama";
    $dta[0]["JenisKelamin"] = "L";
    $dta[0]["Alamat"] = "Pedungan, Denpasar";
    $dta[0]["Hobi"] = "Tidur";
    $dta[0]["Status"] = "Jomblo";

    $dta[1]["NIM"] = "2201010667";
    $dta[1]["Nama"] = "Ni Putu Ayu Jegeg";
    $dta[1]["JenisKelamin"] = "P";
    $dta[1]["Alamat"] = "Kesiman, Denpasar";
    $dta[1]["Hobi"] = "Tidur";
    $dta[1]["Status"] = "Jomblo";

    $dta[2]["NIM"] = "2201010238";
    $dta[2]["Nama"] = "Ni Nyoman Nitasari Putri";
    $dta[2]["JenisKelamin"] = "P";
    $dta[2]["Alamat"] = "Sanur, Denpasar";
    $dta[2]["Hobi"] = "Tidur";
    $dta[2]["Status"] = "Jomblo";

    $dta[3]["NIM"] = "2201010682";
    $dta[3]["Nama"] = "Ni Kadek Mirah Senja";
    $dta[3]["JenisKelamin"] = "P";
    $dta[3]["Alamat"] = "Kuta, Denpasar";
    $dta[3]["Hobi"] = "Tidur";
    $dta[3]["Status"] = "Jomblo";

    $dta[4]["NIM"] = "2201010543";
    $dta[4]["Nama"] = "I Putu Dimas Sanjaya";
    $dta[4]["JenisKelamin"] = "L";
    $dta[4]["Alamat"] = "Pemogan, Denpasar";
    $dta[4]["Hobi"] = "Tidur";
    $dta[4]["Status"] = "Jomblo";
    
    echo json_encode($dta);
    header("Content-type: application/json; charset: utf-8")
?>