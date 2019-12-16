@extends("theme.$theme.layout")
@section('content')

<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Registro de estudiantes</h1>
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


<!-- /.modificar aqui -->
<form action="{{route('plan.store')}}" method="POST">
	@csrf
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
								<label for="nombre">Numero plan:</label>
								<input type="number" class="form-control tuInput" min="2000" value="{{old('numplan')}}" name="numplan"
									autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();" >
								{!!$errors->first('nombre','<div class="alert alert-danger alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<small><i class="icon fas fa-ban"></i> Alerta!:message</small>
									  </div>')!!} <br>
								
							</div>
							<a href="{{ route('plan.index') }}" class="btn btn-danger">Cancelar</a>
							<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#modal-primary">
								<i class="fas fa-save"></i> guardar
							</button>
							<!-- /.form-group -->
						</div>
						<!-- /.col -->
						
							<br>
							

							<div class="modal fade" id="modal-primary">
								<div class="modal-dialog">
									<div class="modal-content bg-primary">
										<div class="modal-header">
											<h4 class="modal-title">desea Registrar Estudiante?</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<p>el estudiante se guardara en el Sis. Doc.&hellip;</p>
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