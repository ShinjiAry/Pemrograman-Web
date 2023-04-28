<?php
    include("CMD/user.php");
    $psn = "";
    // cek pengiriman form
    if(isset($_POST["txPassword1"])){
        if($_POST["txPassword1"] == $_POST["txPassword2"]){
            $nama = $_POST["txNama"];
            $email = $_POST["txEmail"];
            $user = $_POST["txUsername"];
            $pass = $_POST["txPassword1"];

            if(createuser($nama, $email, $user, $pass)){
                $psn = "Create Data User Sukses";
            }else{
                $psn = "Create Data User Gagal";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <form method="POST" action="registrasi.php">
        <?php
            echo"<div>$psn</div>";
        ?>
        <div style="margin-bottom: 10px;">
            Register
        </div>
        <div style="margin-bottom: 10px;">
            Nama Lengkap :
            <input type="text" name="txNama" placeholder="Nasukan Nama Lengkap">
        </div>
        <div style="margin-bottom: 10px;">
            Email :
            <input type="email" name="txEmail" placeholder="Masukan Email">
        </div>
        <div style="margin-bottom: 10px;">
            Username :
            <input type="text" name="txUsername" placeholder="Masukan Username">
        </div>
        <div style="margin-bottom: 10px;">
            Password :
            <input type="password" name="txPassword1" placeholder="Masukan Password">
        </div>
        <div style="margin-bottom: 10px;">
            Verifikasi Password :
            <input type="password" name="txPassword2" placeholder="Masukan Verifikasi Password">
        </div>
        <div style="margin-bottom: 10px;">
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>