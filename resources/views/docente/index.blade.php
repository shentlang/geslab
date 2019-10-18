@extends("theme.$theme.layout")
@section('content')

<div class="content-wrapper">
        <section class="content">
                <section class="content">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card">
                             
                             
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            
                  
                            <div class="card">
                               
                              <div class="card-header">
                                <h3 class="card-title">listado de docentes</h3>
                                <p class="float-right"><a href="{{ route('docente.create') }}"  class="btn btn-outline-primary">Registrar Docentes</a></p>
                                
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                  
                                  
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead class="thead-dark">
                                  <tr>
                                    <th>Nombre (es) del docente</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>C.I</th>
                                    <th>Genero</th>
                                    <th>titulado</th>
                                    <th>Editar</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($docentes as $item)
                                      <tr>
                                      <td><a href="{{ route ('estudiante.show', $item->id)}}">
                                                 {{$item->persona->id}}
                                              --{{$item->persona->nombre}} 
                                          </a>
                                      </td>
                                      <td>{{$item->persona->apellidop}}</td>
                                      <td>{{$item->persona->apellidom}}</td>
                                      <td>{{$item->persona->cedula}}</td>
                                      <td>{{$item->persona->genero}}</td>
                                      <td>{{$item->id}}--{{$item->titulado}}</td>
                                    <td><a class="btn btn-app" href="#">
                                      <i class="fas fa-edit"></i> editar</a> </td>
                                   
                                          </tr>  
                                      @endforeach
                                 
                                  
                                  <tfoot>
                                        <tr>
                                                <th>Nombre (es) del estudiante</th>
                                                <th>Apellido Paterno</th>
                                                <th>apellido Materno</th>
                                                <th>C.I</th>
                                                <th>Genero</th>
                                                <th>grado</th>
                                                <th>Editar</th>
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

  