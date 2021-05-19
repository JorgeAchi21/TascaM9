<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Enlaces get (que pueden ser llamados desde url):</h1>
    <ul>

        <li><a href="/M903/public/index.php">001 ir a home</a></li>
        <li><a href="/M903/public/index.php/cursos">002 ir a cursos</a></li>
        <li><a href="/M903/public/index.php/cursos/create">003 ir a create</a></li>
        <li><a href="/M903/public/index.php/cursos/javascript">004 ir a curso javascript</a></li>

    </ul>

    @yield('content')

</body>
</html>