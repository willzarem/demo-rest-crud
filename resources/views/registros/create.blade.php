<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Crear nuevo registros</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
</head>
 
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Formulario de  registro de persona</div>

        <div class="panel-body">
      
			<form method="POST" action="{{ url('/registros') }}">
				{!! csrf_field() !!}

				<!-- Metodo de visualizacion de errores en la aplicacion -->
				@if(count($errors) > 0)
				<div class="alert alert-danger">
				<ul>
					@foreach($errors -> all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				</div>
				@endif

	         	@include('registros._form')

				<br>

				<a href="{{ url('/registros/') }}" class="btn btn-primary">Regresar</a>
				<button type="submit" class="btn btn-warning">Guardar</button>
			</form>
			
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
</body>
</html>