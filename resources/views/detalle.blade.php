<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml%22%3E
<head>
    <meta charset="utf-8" />
    <title>Titulo</title>
</head>
<body>
    <h1>Pantalla de Contacto</h1>

    <a href=" {{ route ('index') }}"> Regresar a inicio </a>

    <p>Nombre: {{ $nombre }} </p>
    <p>Apellido: {{ $apellido }} </p>
    <p>Tel: {{ $tel }} </p>
    <p> Correo: {{ $email }} </p>

</body>
</html>
