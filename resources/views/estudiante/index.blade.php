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
                                <h3 class="card-title">listado estudiantil</h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead class="thead-dark">
                                  <tr>
                                    <th>Nombre (es) del estudiante</th>
                                    <th>Apellido Paterno</th>
                                    <th>apellido Materno</th>
                                    <th>C.I</th>
                                    <th>R.U</th>
                                    <th>Genero</th>
                                    <th>Carrera</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($estudiantes as $item)
                                      <tr>
                                      <td>{{$item->persona->nombre}}</td>
                                      <td>{{$item->persona->apellidop}}</td>
                                      <td>{{$item->persona->apellidom}}</td>
                                      <td>{{$item->persona->cedula}}</td>
                                      <td>{{$item->ru}}</td>
                                      <td>{{$item->persona->genero}}</td>
                                      <td>{{$item->carrera}}</td>
                                       
                                          </tr>  
                                      @endforeach
                                 
                                  
                                  <tfoot>
                                        <tr>
                                                <th>Nombre (es) del estudiante</th>
                                                <th>Apellido Paterno</th>
                                                <th>apellido Materno</th>
                                                <th>C.I</th>
                                                <th>R.U</th>
                                                <th>Genero</th>
                                                <th>Carrera</th>
                                              </tr>
                                  </tfoot>
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

  