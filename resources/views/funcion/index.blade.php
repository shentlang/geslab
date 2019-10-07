@extends("theme.$theme.layout")
@section('content')

<div class="content-wrapper">
        <section class="content">
                <section class="content">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                             
                             
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            
                  
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">listado de docentes y funcion</h3>
                                <p class="float-right"><a href="#"  class="btn btn-outline-primary">asignar tutores</a></p>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead class="thead-dark">
                                        <tr>
                                                <th>Cod</th>
                                                
                                                <th>docente</th>
                                                
                                                <th>proyecto</th>
                                                 
                                                <th class="col-3">editar asignacion</th>
                                                
                                            </tr>
                                  </thead>
                                  <tbody>
                                          


                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </section>
                      <!-- /.content -->
                    
        </section>
        
    </div>
    @endsection
