@extends("theme.$theme.layout")
@section('content')

<!-- Content (pagina titulo) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Registro de director</h1>
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>
	</div>
</section>


<!-- /.modificar aqui -->
<form action="{{route('lugar.store')}}" method="POST">
	@csrf
	<section class="content">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Crear director de depto.</h3>
  
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
                    <label>aula</label>
                    
                   <input name="aula" type="text" class="form-control">
                  </div>
                  <!-- /.form-group -->
                
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                 
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label> lugar</label>
                    <input name="lugar" type="text" class="form-control">
                  </div>
                  <a href="{{ route('lugar.index') }}" class="btn btn-danger">Cancelar</a>
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
                                  <h4 class="modal-title">Desea Registrar Nvo. lugar de defensa?</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                  <p>la aula-lugar se guardara en el Sis. Doc.&hellip;</p>
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