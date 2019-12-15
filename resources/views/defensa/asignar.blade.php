@extends("theme.$theme.layout")
@section('content')
@if(!session('mensaje')==null)
  <div class="alert alert-success col-12 col-sm-4 ">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('mensaje')}}

  </div>

@endif
  

<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Programacion de fechas de defensa</h1>
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

<form action="{{route('defensa.update', $proyecto->id)}}" method="POST">
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
                           <div class=" col-12">
								<div class="form-group">
										<h1>{{$proyecto->nombreproyecto}}</h1>
										<div class="form-group">
												autores:
												@foreach($proyecto->estudiantes as $estudiante)
												<small class="badge badge-info">{{ $estudiante->persona->nombre }} {{ $estudiante->persona->apellidop }} {{ $estudiante->persona->apellidom }}</small>
												@endforeach
												 </div>
										</div>
						   </div>
                            
						<div class="col-md-6">
							<div class="form-group">
								
                                <label for="nombre">lugar de defensa:</label>
                                <input type="text" class="form-control tuInput" value="{{$proyecto->lugar}}" name="lugar" autocomplete="off">
							</div>
						
						</div>
                        <!-- /.col -->
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
									<option value="APROBADO">APROBADO</option>
									<option value="REPROBADO">REPROBADO</option>
									<option value="PENDIENTE">PENDIENTE</option>
								</select>

                            </div>
                            
							<!-- /.form-group -->

						<div class="col-md-6">

                            <div class="form-group">
								<label for="curso">fecha de defensa</label>
                            <input type="date" class="form-control" value="{{$proyecto->fechadefensa}}" name="fechadefensa" required>
							</div>
                            <div class="form-group">
                            <label for="curso">Hora</label>
                            <input type="time" class="form-control" value="{{$proyecto->hora}}" min="07:00" max="18:00" step="5400" name="hora" required>
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