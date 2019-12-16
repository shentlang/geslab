@extends("theme.$theme.layout")
@section('content')

<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Registro de decano</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a type="button" class="btn btn-primary" style="color: aliceblue" href="{{route('docente.create')}}">R. docente</a></li>
					<li class="breadcrumb-item active">formulario de registros</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<!-- /.modificar aqui -->
<form action="{{route('decano.store')}}" method="POST">
	@csrf
	<section class="content">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Crear nuevo decano</h3>
  
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
                    <label>docente</label>
                    
                    <select name="docente" class="form-control select2" data-placeholder="Selecione un docente" style="width: 100%;">
                     @foreach ($personas as $docente)
                    
                    <option value="{{$docente->persona_id}}">{{$docente->nombre}} {{$docente->apellidop}} {{$docente->apellidom}}</option>
                     @endforeach
                     
                      
                    </select>
                  </div>
                  <!-- /.form-group -->
                
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>titulado en</label>
                    <select name="titulo" class="form-control"
                            style="width: 100%;">
                            <option value="TECN." selected>Tecnico.</option>
                            <option value="LIC.">Licenciado</option>
                            <option value="ING." selected>Ingeniero</option>
                            <option value="MG.">Magister</option>
                            <option value="DR." selected>Doctor</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                 
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
                                  <h4 class="modal-title">Desea Registrar Decano?</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                  <p>el decano se guardara en el Sis. Doc.&hellip;</p>
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
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
             
            </div>
          </div>
                           
						
					
	</section>
</form>
@endsection