@extends ('layouts.plantilla')

@section ('title', 'Show curso:')

@section ('content')
    <h1>show.php nombre: {{$curso}}</h1>
    <h2>Hello: {{$curso}}</h2>
    <p>desde la plantilla</p>  
    <p>desde blade</p> 
@endsection