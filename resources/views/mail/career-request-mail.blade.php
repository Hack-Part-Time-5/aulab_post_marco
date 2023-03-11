<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>Hemos recibido tu solicitud</h1>
    <h4>Solicitud para el rol de {{ $info['role'] }}</h4>
    <p>Recibido de {{ $info['email'] }}</p>

    <h4>Mensaje: </h4>
    <p>{{ $info['message'] }}</p>
    
</body>
</html>