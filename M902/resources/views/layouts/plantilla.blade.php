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
        <li><a href="/M902/public/index.php">001 get: ir a home</a></li>
        <li><a href="/M902/public/index.php/paises">002 get: paises -> index</a></li>
        <li><a href="/M902/public/index.php/paises/alemania">004 get: paises - alemania -> show</a></li>
        <li><a href="/M902/public/index.php/paises/alemania/departamentos">007 get: paises - departamento -> index </a></li>
        <li><a href="/M902/public/index.php/paises/alemania/departamentos/central">009 get: paises - departamento - central -> show</a></li>
    </ul>

    @yield('content')

</body>
</html>