@extends("theme.$theme.layout")
@section('content')

<div class="content-wrapper">
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
	<form action="{{route('estudiante.store')}}" method="POST">
			@csrf
    <section class="content">
			<div class="container-fluid">
			  <!-- SELECT2 EXAMPLE -->
			  <div class="card card-primary">
					
				<div class="card-header">
				  <h3 class="card-title">datos básicos estudiantiles</h3>
				  
				  <div class="card-tools">
					<button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
				  </div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
				  <div class="row">
					<div class="col-md-6">
					  <div class="form-group">
							<label for="nombre">Nombres:</label>
					<input type="text" class="form-control tuInput" name="nombre" autocomplete="off">
					<label for="ape-p">Apellido Paterno:</label>
					<input type="text" class="form-control tuInput" name="apellidop" autocomplete="off">
					<label for="ape-m">Apellido Materno</label>
					<input type="text" class="form-control" name="apellidom" autocomplete="off">
					<label for="genero">Genero</label>
					<select name="genero" class="form-control">
						<option value="Femenino" selected>Femenino</option>
						<option value="Masculino">Masculino</option>
					</select>
					  </div>
					  <!-- /.form-group estudiante -->
					  <div class="form-group">
							<label for="password">ru:</label>
					<input type="text" class="form-control" name="ru" autocomplete="off">
					<label for="carrera">carrera</label>
					<select name="carrera" class="form-control">
						<option value="ING.INFORMATICA" selected>ING.INFORMATICA</option>
						<option value="ING.COMERCIAL">ING.COMERCIAL</option>
						<option value="ING.AMBIENTAL" selected>ING.AMBIENTAL</option>
						<option value="ING.RECURSOS HIDRICOS">ING.RECURSOS HIDRICOS</option>
						<option value="CONTADURIA" selected>CONTADURIA</option>
						
					</select>
					
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-6">
					  <div class="form-group">
							<label for="usuario">Cedula:</label>
							<input type="text" class="form-control" name="cedula" autocomplete="off">
							<label for="password">telefono:</label>
							<input type="text" class="form-control" name="telefono" autocomplete="off">
							<label for="password">direccion:</label>
							<input type="text" class="form-control" name="direccion" autocomplete="off">
							<label for="password">email:</label>
							<input type="text" class="form-control" name="email" autocomplete="off">
					  </div>
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