<!-- Estructura de como llegara el correo enviado -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Correo Soporte Técnico</h1>
    <p><strong>Email: <br> </strong>{{ $contacto['email'] }}</p>
    <p><strong>Nombre: <br> </strong>{{ $contacto['nombre'] }}</p>
    <p><strong>Mensaje: <br> </strong>{{ $contacto['mensaje'] }}</p>
</body>
</html>