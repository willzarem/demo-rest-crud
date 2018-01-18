<!--<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
</head>
 
<body>-->
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Registro</div>

        <div class="panel-body">
          
 

<!--        <ul class="list-group">
          @forelse($Listadoderegistros as $List)
          	<li>
          		{{$List -> nombre}} {{$List -> nombre2}} {{$List -> apellido}} {{$List -> apellido2}}
          	</li>

          @empty
          	<li>No hay usuarios registrados</li>	
          @endforelse

        </ul>-->


<table class="table table-responsive">
    <thead>
        <tr>
            <th>Nombre completo</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    	  @foreach($Listadoderegistros as $List)
        <tr>
            <td>{{$List -> nombre}} {{$List -> nombre2}} {{$List -> apellido}} {{$List -> apellido2}}</td>
            <!--<td><a href="/registros//edit" class="btn btn-info">Editar</a></td>-->
            <td><a href="/registros/{{ $registro->id }}/edit" class="btn btn-danger">Vista</a></td>
        </tr>
          @endforeach
    </tbody>
</table>

      <a href="{{ route('home') }}" class="btn btn-primary">Regresar</a>
      <a href="{{ route('registros.create') }}" class="btn btn-warning">Nuevo</a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<!--</body>
</html>-->
