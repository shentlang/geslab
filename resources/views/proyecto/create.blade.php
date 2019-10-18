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
				<button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
			  </div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			  <div class="row">
				<div class="col-md-6">
				  <div class="form-group">
						<label for="nombre">Nombres del proyecto:</label>
				<input type="text" class="form-control tuInput" name="nombre" autocomplete="off">
				<label for="nombre">Tipo de proyecto:</label>
				<input type="text" class="form-control tuInput" name="tipo" autocomplete="off">
				
				  </div>
				  <!-- /.form-group estudiante -->
				  <div class="form-group">
			<label for="estado">Estado proyecto</label>
			<select name="estado" class="form-control">
				<option value="A">APROBADO</option>
				<option value="R" selected>REPROBADO</option>	
				<option value="P" selected>PENDIENTE</option>	
			</select>
			
			  </div>
				  <!-- /.form-group -->
				</div>
				<!-- /.col -->
				<div class="col-md-6">
				  <div class="form-group">
						<label for="curso">fecha inicial </label>
						<input type="date" class="form-control" name="fechadefensa" required>
				  </div>
				  <div class="form-group">
						<label for="curso">fecha defensa final</label>
						<input type="date" class="form-control" name="fechadefensa2" required>
				  </div>
				  

				  <div class="form-group">
						<label>seleccionar autores</label>
						<select class="select2" multiple="multiple" id="estudiantes"  name="estudiantes[]" data-placeholder="Seleccione Estudiantes"
								style="width: 100%;"  >
						  
						  @foreach($estudiantes as $author)
                                    <option value="{{ $author->id }}">{{ $author->persona->nombre }}</option>
                                    @endforeach()
						</select>
					  </div>
					

				  <br>
				<a href="{{ route('proyecto.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i>  Cancelar</a>
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> guardar</button>
				
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