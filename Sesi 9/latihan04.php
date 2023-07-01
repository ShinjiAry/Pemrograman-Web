<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 04</title>
</head>
<body>
    <form action="">
        <div>
            Alas Segitiga :
            <input type="text" id="txAlas" placeholder="Masukan Alas Segitiga">
        </div>
        <div>
            Tinggi Segitiga :
            <input type="text" id="txTinggi" placeholder="Masukan Tinggi Segitiga">
        </div>
        <div>
            <button type="button" onclick="hitung()">Hitung</button>
        </div>
    </form>
    <script>
        function hitung(){
            let alas = document.getElementById("txAlas").value;
            let tinggi = document.getElementById("txTinggi").value;
            let luas = 0.5*alas*tinggi;
            alert("Hasil Hitung Segitiga : " + luas);
        }
    </script>
</body>
</html>