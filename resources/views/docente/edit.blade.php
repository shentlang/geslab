@extends("theme.$theme.layout")
@section('content')


    <!-- Content (pagina titulo) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro de docentes</h1>
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
	<form action="{{route('docente.update', $docente->id)}}" method="POST">
            @csrf
            {!! method_field('PUT') !!}
    <section class="content">
			<div class="container-fluid">
			  <!-- SELECT2 EXAMPLE -->
			  <div class="card card-primary">
					
				<div class="card-header">
				  <h3 class="card-title">datos básicos docentes</h3>
				  
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
					<input type="text" class="form-control tuInput" value="{{$docente->persona->nombre}}"  name="nombre" autocomplete="off" >
                     
                     {!!$errors->first('nombre','<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <small><i class="icon fas fa-ban"></i> Alerta!:message</small>
                          </div>')!!} <br>
					<label for="ape-p">Apellido Paterno:</label>
                    <input type="text" class="form-control tuInput" name="apellidop" value="{{$docente->persona->apellidop}}"  autocomplete="off">
                    {!!$errors->first('apellidop','<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <small><i class="icon fas fa-ban"></i> Alerta!:message</small>
                          </div>')!!} <br>
					<label for="ape-m">Apellido Materno</label>
					<input type="text" class="form-control" name="apellidom" value="{{$docente->persona->apellidom}}"  autocomplete="off">
					<label for="genero">Genero</label>
                    <select name="genero" class="form-control">
                            <option value="{{$docente->persona->genero}}" selected>
                                {{$docente->persona->genero}} V.anterior</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
					  </div>
					  <!-- /.form-group estudiante -->
					  <div class="form-group">
							
                    <label for="titulado">grado academico</label>
                    
					<select name="titulado" class="form-control">
                            <option value="{{$docente->titulado}}" selected>
                                    {{$docente->titulado}} V.anterior</option>
						<option value="TECN.">Tecnico.</option>
						<option value="LIC.">Licenciado</option>
						<option value="ING." >Ingeniero</option>
						<option value="MG.">Magister</option>
						<option value="DR." >Doctor</option>
						
					</select>
					
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-6">
					  <div class="form-group">
							<label for="usuario">Cedula:</label>
					  <input type="text" class="form-control" name="cedula" value="{{$docente->persona->cedula}}" autocomplete="off" >
                            
                             {!!$errors->first('cedula','<div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <small><i class="icon fas fa-ban"></i> Alerta!:message</small>
                                  </div>')!!} <br>
							<label for="password">telefono:</label>
							<input type="text" class="form-control" name="telefono" value="{{$docente->persona->telefono}}" autocomplete="off">
                            {!!$errors->first('telefono','<div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <small><i class="icon fas fa-ban"></i> Alerta!:message</small>
                                  </div>')!!} <br>
                            <label for="password">direccion:</label>
							<input type="text" class="form-control" name="direccion" value="{{$docente->persona->direccion}}" autocomplete="off">
							
							<label for="email">email:</label>
							<input type="email" class="form-control" name="email" value="{{$docente->persona->email}}" autocomplete="off">
                            <br>
                            {!!$errors->first('email','<div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <small><i class="icon fas fa-ban"></i> Alerta!:message</small>
                                  </div>')!!} <br>
					  </div>
                      <br>
                      <input type="hidden" name="idpersona" value="{{$docente->persona_id}}" />
							<br>
					<a href="{{ route('docente.index') }}" class="btn btn-danger">Cancelar</a>
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