<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <h1>Luas segitiga</h1>
        </div>
        <div>
            Alas segitiga
            <input type="text" id="as">
        </div>
        <div>
            Tinggi segitiga
            <input type="text" id="ts">
        </div>
        <button type="button" onclick="hasil()" >Hasil</button>
    </form>

        <script>
            function hasil(){
                let alas =document.getElementById("as").value;
                let tinggi =document.getElementById("ts").value;
                luas = alas*tinggi/2
                alert ("Hailnya : "+luas);
            }

        </script>
   
</body>
</html>