@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Formulario de edicion de persona</div>

        <div class="panel-body">
      
			<form method="POST" action="/registros/{{ $registro->id }}">
				
				{{ method_field('PATCH') }}
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
				<button type="submit" class="btn btn-warning">Actualizar</button>
			</form>
			
        </div>

      </div>
    </div>
  </div>

@endsection