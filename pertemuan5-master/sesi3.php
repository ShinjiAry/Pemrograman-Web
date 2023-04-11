<?php
    $filez ="";
    $path="upGambar/";
    if(isset($_POST["upfile"])){
        $filez= $path .basename ($_FILES["upGambar"]["name"]);
        move_uploaded_file($_FILES["upGambar"]["tmp_name"], $filez);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form method ="POST" action= "sesi3.php"enctype="multipart/form-data">
        <div>
            Upload gambar:
            <input type="file" name= "upGambar">
        </div>
        <div>
            <button type="sumbit">Upload Filed</button>
        </div>
        <input type="hidden" name="upfile" value="Y">
    </form>
    <div>
        <?="<img src='$filez'width='400'>";?>
    </div>
</body>
</html>