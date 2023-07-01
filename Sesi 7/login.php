<?php
    session_start();
    include("CMD/user.php");

    if(isset($_POST["txUser"])){
        $user = $_POST["txUser"];
        $pwd = $_POST["txPassword"];

        $islogin = ceklogin($user, $pwd);
        if($islogin["STATUS"]){
            $_SESSION["login"] = md5($user);
            $_SESSION["NAMA"] = $islogin["NAMA"];

            header("location: dashboard.php");
        }else{
            $_SESSION["login"] = "";
            $_SESSION["NAMA"] = "";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h3>Form Login</h3>
        <div>
            Username :
            <input type="text" name="txUser">
        </div>
        <div style="margin-top: 10px;">
            Password :
            <input type="password" name="txPassword">
        </div>
        <div style="margin-top: 10px;">
            <button type="Submit">Login</button>
        </div>
    </form>
</body>
</html>