<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">
    <title>Biowell Bolivia</title>
    <style>
        span{
            color: rgb(255, 102, 0);
        }
        h1{
            text-align: center;
        }
        .container{
            background-color: rgb(0, 0, 0);
            padding: 20px !important;
            color: white;
        }
        .c2{
            background-color: #cccccc;
            text-align: center;
            color: black !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bio-<span>Well</span> Bolivia</h1>
    </div>
    <div class="container c2">
        <h2>¡Gracias por suscribirte a Bio-Well Bolivia! </h2>
        <p>Apartir de la fecha recibiras semanalmente todas las novedades ofrecidas por <strong>Bio-Well Bolivia</strong></p>
        <hr>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><a href="{{route('productos')}}" class="btn btn-primary">Ver todos los productos</a></div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="container">
        <p>¿Consultas? LLamanos al (+591) 72031454</p>
        <p>Para cancelar la suscripcion envianos un correo electronico solicitandolo a: <strong>info@biowellbolivia.com</strong></p>
    </div>
</body>
</html>