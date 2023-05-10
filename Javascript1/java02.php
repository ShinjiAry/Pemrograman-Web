<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Perulangan For<p>(nAwal;range;counter){<br>area perulangan <br>}</p></div>
    <script>
        for(let i=0; i<10; i++){
            document.write("<br>Perulangan ke minus"+i);
        }
    </script>

    <div>
        Perulangan while <p>while(logika){<br>area perulangan <br>}</p>
    </div>
    <script>
        let nAwal = 0+1;
        var nAkhir =10+1;
        while(nAwal < nAkhir){
            document.write("<br>Perulangan ke minus"+nAwal);
            nAwal++;
        }
    </script>
</body>
</html>