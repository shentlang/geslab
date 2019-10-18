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
                                <p class="float-right"><a href="{{ route('estudiante.create') }}"  class="btn btn-outline-primary">Registrar Estudiante</a></p>
                                
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                  
                                  
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead class="thead-dark">
                                  <tr>
                                    <th class="col-auto">Nombre (es) del estudiante</th>
                                    <th class="col-auto">Apellido Paterno</th>
                                    <th class="col-auto">apellido Materno</th>
                                    <th class="col-auto">C.I</th>
                                    <th class="col-auto">Genero</th>
                                    <th class="col-auto">R.U</th>
                                    <th class="col-auto">Carrera</th>
                                    <th class="col-1 text-center">Editar</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($estudiantes as $item)
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
                                      <td>{{$item->id}}--{{$item->ru}}</td>
                                      <td>{{$item->carrera}}</td>
                                    <td><a class="btn btn-outline-danger btn-sm" href="{{route('estudiante.edit',Crypt::encrypt($item->id))}}"><i class="fas fa-edit"></i> editar</a> </td>
                                   
                                          </tr>  
                                      @endforeach
                                 
                                  
                                  <tfoot>
                                        <tr>
                                                <th>Nombre (es) del estudiante</th>
                                                <th>Apellido Paterno</th>
                                                <th>apellido Materno</th>
                                                <th>C.I</th>
                                                <th>Genero</th>
                                                <th>R.U</th>
                                                <th>Carrera</th>
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

  