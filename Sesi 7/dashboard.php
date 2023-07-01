<?php
    session_start();
    if(isset($_SESSION["login"])){
        if(!$_SESSION["login"] == ""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="flex justify-center gap-4 p-4 font-semibold text-lg bg-slate-200 shadow-sm">
        <a href="#">DataMahasiswa</a>
        <span>|</span>
        <a href="#">DataMatakuliah</a>
        <span>|</span>
        <a href="#">DataDosen</a>
        <span>|</span>
        <a href="#">Data User</a>
    </div>
    <!-- <a href="?act=logout">Logout</a> -->
</body>
</html>
<?php
    }else{
        header("location: login.php");
    }
}else{
    header("location: login.php");
}
?>