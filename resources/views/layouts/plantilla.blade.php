<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .logoCabecera{
            float:right;
            padding-right: 150px;
            width: 150px;
        }

        .cabecera{
            text-align:center;
            font-size:x-large;
            font-family:Tahoma;
            margin-bottom:100px;


        }

        .contenido form{
            width:300px;
            margin:0 auto;

        }
    </style>


</head>
<body>
<div class="cabecera">
    @yield("cabecera")
    <img src="/images/unnamed.png" alt="" class="logoCabecera" />
</div>

<div class="contenido">
    @yield("contenido")
</div>

<div class="pie">
    @yield("pie")
</div>

</body>
</html>