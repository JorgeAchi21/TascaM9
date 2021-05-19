@extends ('layouts.plantilla')

@section ('title', 'Show curso:')

@section ('content')
    <h1>003 show.php variable: nombre: {{$curso}}</h1>
    <h2>Hello: {{$curso}}</h2>
    <p>desde la plantilla</p>  
    <p>desde blade</p>
    <p>Ejercicio: M9 03</p>
@endsection