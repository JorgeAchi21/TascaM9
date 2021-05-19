<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/M901/public/index.php">ir a home</a></li>
        <li><a href="/M901/public/index.php/cursos">ir a cursos</a></li>
        <li><a href="/M901/public/index.php/cursos/create">ir a create</a></li>
        <li><a href="/M901/public/index.php/cursos/javascript">ir a curso javascript</a></li>
        <li><a href="/M901/public/index.php/cursos/php">ir a curso php</a></li>
    </ul>

    @yield('content')
</body>
</html>