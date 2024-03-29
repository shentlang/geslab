@extends("theme.$theme.layout")
@section('content')

<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Registro de proyectos</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">inicio</a></li>
					<li class="breadcrumb-item active">formulario de registros</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<form action="{{route('proyecto.store')}}" method="POST">
	@csrf
	<section class="content">
		<div class="container-fluid">
			<!-- SELECT2 EXAMPLE -->
			<div class="card card-warning">

				<div class="card-header">
					<h3 class="card-title">datos básicos del proyecto</h3>

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
								<label for="nombre">Nombre del proyecto:</label>
								<input type="text" class="form-control tuInput" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" autocomplete="off">
							

							</div>
							<div class="form-group">
								<label for="nombre"> director dpto:</label>
								<select class="form-control" name="dir" data-placeholder="Seleccione materias"
									style="width: 100%;">

									@foreach($dir as $direc)
									<option value="{{ $direc->id }}">{{ $direc->persona->nombre }} {{ $direc->persona->apellidop }} {{ $direc->persona->apellidom }}</option>
									@endforeach()
								</select>
							

							</div>
							<div class="form-group">
								<label for="nombre">  decano:</label>
								<select class="form-control" name="dec" data-placeholder="Seleccione materias"
								style="width: 100%;">

								@foreach($dec as $deca)
								<option value="{{ $deca->id }}">{{ $deca->persona->nombre}} {{ $deca->persona->apellidop }} {{ $deca->persona->apellidom }}</option>
								@endforeach()
							</select>
							

							</div>

						
						</div>
						<!-- /.col -->

						<div class="col-md-6">

							<div class="form-group">
								<label>sigla</label>
								<select class="form-control" name="sigla" data-placeholder="Seleccione materias"
									style="width: 100%;">

									@foreach($materia as $materias)
									<option value="{{ $materias->id }}">{{ $materias->sigla }}</option>
									@endforeach()
								</select>
							</div>
						


							<div class="form-group">
								<label>seleccionar autores</label>
								<select class="select2" multiple="multiple" name="estudiantes[]" 
									data-placeholder="Seleccione Estudiantes" style="width: 100%;">

									@foreach($estudiantes as $author)
									<option value="{{ $author->id }}">{{ $author->persona->nombre }}</option>
									@endforeach()
								</select>
							</div>


							<br>
							<a href="{{ route('proyecto.index') }}" class="btn btn-danger"><i
									class="fas fa-arrow-left"></i> Cancelar</a>

							<button type="button" class="btn btn-success" data-toggle="modal"
								data-target="#modal-success">
								<i class="fas fa-save"></i> guardar
							</button>

							<div class="modal fade" id="modal-success">
								<div class="modal-dialog">
									<div class="modal-content bg-success">
										<div class="modal-header">
											<h4 class="modal-title">desea guardar proyecto?</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<p>el proyecto se guardara en el Sis. Doc.&hellip;</p>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-outline-light"
												data-dismiss="modal">Cerrar</button>
											<button type="submit" class="btn btn-outline-light">guardar datos</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->

							</a>
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