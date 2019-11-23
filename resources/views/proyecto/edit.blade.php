@extends("theme.$theme.layout")
@section('content')

<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>edicion de proyectos</h1>
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

<form action="{{route('proyecto.update', $proyecto->id)}}" method="POST">
        @csrf
        {!! method_field('PUT') !!}
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
                            <input type="text" class="form-control tuInput" value="{{$proyecto->nombreproyecto}}" name="nombre" autocomplete="off">
								<label for="nombre">lugar de defensa:</label>
                            <input type="text" class="form-control tuInput" value="{{$proyecto->lugar}}" name="lugar" autocomplete="off">

							</div>
							<!-- /.form-group estudiante -->
							<div class="form-group">
								<label for="estado">Estado proyecto</label>
								<select name="estado" class="form-control">
                                <option value="{{$proyecto->estado}}">
                                    @if ($proyecto->estado == "P")
                                        PENDIENTE
                                    @else
                                        @if ($proyecto->estado == "R")
                                            REPROBADO
                                        @else
                                            APROBADO
                                        @endif
                                    @endif
                                    V. anterior</option> 
									<option value="A">APROBADO</option>
									<option value="R">REPROBADO</option>
									<option value="P">PENDIENTE</option>
								</select>

							</div>
							<!-- /.form-group -->
						</div>
						<!-- /.col -->

						<div class="col-md-6">

							<div class="form-group">
								<label>sigla</label>
								<select class="form-control" name="sigla" data-placeholder="Seleccione materias"
									style="width: 100%;">
                            <option value="{{$proyecto->materia->id}}">{{$proyecto->materia->sigla}}</option>
								
								</select>
							</div>
							<div class="form-group">
								<label for="curso">fecha de defensa</label>
                            <input type="date" class="form-control" value="{{$proyecto->fechadefensa}}" name="fechadefensa" required>
							</div>


							<div class="form-group">
								<label>seleccionar autores</label>
								<select class="select2" multiple="multiple" name="estudiantes[]" id="estudiantes"
									data-placeholder="Seleccione Estudiantes" style="width: 100%;">

                                    @foreach($estudiante as $estudiantes)
                                    <option value="{{ $estudiantes->id }}" {{ in_array($estudiantes->id, $selected_authors) ? 'selected' : '' }}>{{ $estudiantes->persona->nombre }} {{ $estudiantes->persona->apellidop }}</option>
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
											<h4 class="modal-title">desea actualizar datos del proyecto?</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<p>el proyecto se actualizará en el Sis. Doc.&hellip;</p>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-outline-light"
												data-dismiss="modal">Cerrar</button>
											<button type="submit" class="btn btn-outline-light">actualizar datos</button>
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