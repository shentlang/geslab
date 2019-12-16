@extends("theme.$theme.layout")
@section('content')


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
            <p class="float-right"><a href="#" class="btn btn-outline-primary">asignar tutores</a></p>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>cod</th>

                  <th>proyecto</th>
                  <th class="text-center col-2">autores</th>
                  <th>sigla</th>

                  <th class="col-7">docentes guias</th>

                  <th class="col-2">guias</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($funciones as $item)
                <tr>

                  <th>{{$item->id}}</th>

                  <td style="width: 25%">{{ $item->nombreproyecto }}</td>
                  <td class="text-center">
                      <ul class="list-unstyled">
                        @foreach($item->estudiantes as $estudiante)
                       
                        <small class="badge badge-primary">{{ $estudiante->persona->nombre }} {{ $estudiante->persona->apellidop }} {{ $estudiante->persona->apellidom }}</small>
                      
                        @endforeach
                      </ul>
  
                    </td>
                <td style="width:5%">{{$item->materia->sigla}}</td>
                  <td style="width: 20%" >
                   
                      @foreach($item->docente_proyectos as $docen)
                      @if ($docen->funcion == 'tutor')
                    <ul style="list-style-type: none">
                      <li style="float: left">
                          <small class="badge badge-info">
                              {{$docen->id}} 
                              {{$docen->funcion}}
                              {{$docen->docente->persona->nombre}}
                              {{$docen->docente->persona->apellidop}}
                              
                            </small>
                      </li>
                      <li style="float: left">
                          <form action="{{route('delete.clear',[$item->id,$docen->docente_id])}}" method="GET">
                              @csrf
    
                              <button type="button" class="btn-danger" style="border-radius: 20px"  data-toggle="modal"
                              data-target="#modal-primar{{$docen->id}}">
                              <i class="fas fa-trash"></i> 
                            </button>
                            <div class="modal fade" id="modal-primar{{$docen->id}}">
                                <div class="modal-dialog">
                                  <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Desea eliminar asignacion??</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p> se eliminara la asignacion del docente al proyecto&hellip;</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-outline-light"
                                        data-dismiss="modal">Cancelar</button>
                                      <button type="submit" class="btn btn-outline-light">Continuar</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                          </form>
                      </li><br>
                    </ul>
              
                      @else
                     <ul style="list-style-type: none">
                       <li style="float: left">
                          <small class="badge badge-success">
                              {{$docen->id}}
                              {{$docen->funcion}}
                              {{$docen->docente->persona->nombre}}
                              {{$docen->docente->persona->apellidop}}
                            </small>
                          
                       </li>
                       <li style="float: left">
                          <form action="{{route('delete.clear',[$item->id,$docen->docente_id])}}" method="GET">
                              @csrf
    
                              <button type="button" class="btn-danger" style="border-radius: 20px"  data-toggle="modal"
                              data-target="#modal-primar{{$docen->id}}">
                              <i class="fas fa-trash"></i> 
                            </button>
                            <div class="modal fade" id="modal-primar{{$docen->id}}">
                                <div class="modal-dialog">
                                  <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Desea eliminar asignacion??</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p> se eliminara la asignacion del docente al proyecto&hellip;</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-outline-light"
                                        data-dismiss="modal">Cancelar</button>
                                      <button type="submit" class="btn btn-outline-light">Continuar</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                          </form>
                       </li>
                     </ul>
                      
                      @endif
                      @endforeach
                    

                  </td>
                  <td><a style="color: firebrick" href="{{route('funcion.show',$item->id)}}">
                      <i class="fas fa-edit"></i> asignar</a> </td>
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


@endsection