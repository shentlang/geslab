@extends("theme.$theme.layout")
@section('content')


<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Editar datos de estudiantes</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">inicio</a></li>
					<li class="breadcrumb-item active">formulario de edicion</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<!-- /.modificar aqui -->
<form action="{{route('estudiante.update', $estudiantes->id)}}" method="POST">
	@csrf
	{!! method_field('PUT') !!}
	<section class="content">
		<div class="container-fluid">
			<!-- SELECT2 EXAMPLE -->
			<div class="card card-primary">

				<div class="card-header">
					<h3 class="card-title">datos básicos estudiantiles</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-widget="collapse"><i
								class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-widget="remove"><i
								class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nombre">Nombres:</label>
								<input type="text" class="form-control tuInput"
									value="{{$estudiantes->persona->nombre}}" name="nombre" autocomplete="off">
									{!!$errors->first('nombre','<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<small><i class="icon fas fa-ban"></i> Alerta!:message</small>
										  </div>')!!} <br>
								<label for="ape-p">Apellido Paterno:</label>
								<input type="text" class="form-control tuInput" name="apellidop"
									value="{{$estudiantes->persona->apellidop}}" autocomplete="off">
									{!!$errors->first('apellidop','<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<small><i class="icon fas fa-ban"></i> Alerta!:message</small>
										  </div>')!!} <br>
								<label for="ape-m">Apellido Materno</label>
								<input type="text" class="form-control" name="apellidom"
									value="{{$estudiantes->persona->apellidom}}" autocomplete="off">
								<label for="genero">Genero</label>
								<select name="genero" class="form-control">
									<option value="{{$estudiantes->persona->genero}}" selected>
										{{$estudiantes->persona->genero}} V.anterior</option>
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>

							</div>
							<!-- /.form-group estudiante -->
							<div class="form-group">
								<label for="password">ru:</label>
								<input type="text" class="form-control" value="{{$estudiantes->ru}}" name="ru"
									autocomplete="off">
									{!!$errors->first('ru','<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<small><i class="icon fas fa-ban"></i> Alerta!:message</small>
										  </div>')!!} <br>
								<label for="password">plan:</label>
								<select name="numplan" class="form-control">
									<option value="{{$estudiantes->plan_id}}" select>{{$estudiantes->plan->numplan}}
										V.anterior</option>
									@foreach ($planes as $item)
									<option value="{{$item->id}}" select>{{$item->numplan}}</option>

									@endforeach

								</select>
								<label for="carrera">carrera</label>
								@if (auth()->user()->role->nombrerol === 'admin')
								<select name="carrera" class="form-control">
									<option value="{{$estudiantes->carrera}}" select>{{$estudiantes->carrera}}
										V.anterior</option>
									<option value="INGENIERIA INFORMATICA">ING.INFORMATICA</option>
									<option value="INGENIERIA COMERCIAL">ING.COMERCIAL</option>
									<option value="INGENIERIA SANITARIA Y AMBIENTAL">ING.AMBIENTAL</option>
									<option value="INGENIERIA DE RECURSOS HIDRICOS">ING.RECURSOS HIDRICOS</option>
									<option value="INGENIERIA AGRONOMICA">ING. AGRONOMICA</option>
									<option value="CONTADURIA PUBLICA">CONTADURIA PUBLICA</option>
									<option value="ADMINISTRACION Y GESTION PUBLICA">ADM. GESTION PUBLICA</option>

								</select>
								@else
								<select name="carrera" class="form-control">
									<option value="{{$estudiantes->carrera}}" select>{{$estudiantes->carrera}}
										V.anterior</option>
								</select>
								@endif


							</div>
							<!-- /.form-group -->
						</div>
						<!-- /.col -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="usuario">Cedula:</label>
								<input type="text" class="form-control" name="cedula" autocomplete="off"
									value="{{$estudiantes->persona->cedula}}">
									{!!$errors->first('cedula','<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<small><i class="icon fas fa-ban"></i> Alerta!:message</small>
										  </div>')!!} <br>
								<label for="password">telefono:</label>
								<input type="text" class="form-control" name="telefono" autocomplete="off"
									value="{{$estudiantes->persona->telefono}}">
								<label for="password">direccion:</label>
								<input type="text" class="form-control" name="direccion" autocomplete="off"
									value="{{$estudiantes->persona->direccion}}">

								<label for="email">email:</label>
								<input type="text" class="form-control" name="email" autocomplete="off"
									value="{{$estudiantes->persona->email}}">
								{{$errors->first('email')}} <br>
							</div>
							<input type="hidden" name="idpersona" value="{{$estudiantes->persona_id}}" />
							<br>
							<a href="{{ route('estudiante.index') }}" class="btn btn-danger">Cancelar</a>
							<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.card-body -->

			</div>
		</div>
	</section>
</form>

@endsection