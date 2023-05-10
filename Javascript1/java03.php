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
            Nama Lengkap
            <input type="text" id="txNama">
        </div>
        <div>
            <button type="button" onclick="checknama()" >Cari</button>
        </div>
    </form>

    <script>
        function checknama(){
            let nm =document.getElementById("txNama").value;
            alert("Oke,  "+nm );
        }
    </script>
</body>
</html>