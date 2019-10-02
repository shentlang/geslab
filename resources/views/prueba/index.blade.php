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
                                <h3 class="card-title">listado de usuarios</h3>
                                <p class="float-right"><a href="#"  class="btn btn-outline-primary">nada</a></p>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead class="thead-dark">
                                        <tr>
                                                <th>Cod</th>
                                                
                                                <th>id_proyecto</th>
                                                
                                                <th>id_estudiante</th>
                                                 <th>nota</th>
                                                 <th>editar nota</th>
                                            </tr>
                                  </thead>
                                  <tbody>
                                        @foreach ($notas as $item)
            
        
                                        <tr> 
                                        <th>{{$item->id}}</th>
                                        <td>{{$item->proyecto->nombreproyecto}}</td>
                                        <td>{{$item->estudiante->persona->nombre}}</td>
                                        <td>{{$item->puntos}}</td>
                                        <td><a class="btn btn-app" href="{{route('prueba.edit',$item->id)}}">
                                                <i class="fas fa-edit"></i> editar</a> </td>
                                        </tr>
                                
                                        @endforeach         


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
