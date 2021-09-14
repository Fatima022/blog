<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml%22%3E
<head>
    <meta charset="utf-8" />
    <title>Vista</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>Conoce a nuestros amigos:</p>

    <ul>
        <li>
            <a href=" {{ route ('detalle') }}"> {{ $nombre}} </a>
        </li>
    </ul>

</body>
</html>