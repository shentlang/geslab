@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registrar proyecto</h1>
			<hr>
			<form action="{{route('proyecto.store')}}" method="POST">
				@csrf
				<label for="curso">nombre proyecto</label>
				<input type="text" class="form-control" name="nombreproyecto" required>
				<label for="curso">fecha de defensa </label>
				<input type="date" class="form-control" name="fechadefensa" required>
				<label for="sexo">selecciones autor(es)</label>
				<select name="estudiante1_id" class="form-control">
					@foreach($estudiante as $data)
					<option value="{{$data->id}}">{{$data->id}} {{$data->paterno}} {{$data->materno}}</option>
					@endforeach
					
				</select><label for="sexo">tutores</label>
				<select name="estudiante2_id" class="form-control">
					<option value="0" selected>ninguno</option>
					@foreach($estudiante as $data)
					<option value="{{$data->id}}">{{$data->id}} {{$data->paterno}} {{$data->materno}}</option>
					@endforeach
				</select>
				<button class="btn btn-primary btn-block" type="submit">Guardar</button>
			</form>
		</div>
	</div>
</div>

@endsection