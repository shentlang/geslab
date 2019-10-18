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
                                <h3 class="card-title">listado de proyectos y notas</h3>
                                
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                  <table id="example1" class="table table-bordered table-striped">
                                      <thead class="thead-dark">
                                            <tr>
                                                  
                                                    
                                                    <th class="col-3 text-center">proyecto</th>
                                                    
                                                    <th class="col-3 text-center">notas de estudiantes</th>
                                                     
                                                    
                                                    
                                                </tr>
                                      </thead>
                                      <tbody>
                                        
                                        @foreach ($proyectos as $item)
                                        <tr>
                                          
                                           
                                          
                                            <td  class="text-center">{{ $item->nombreproyecto }}</td>
                                            
                                            <td class="text-center"><ul class="list-unstyled">
                                                @foreach($item->estudiante_proyectos as $estudiante)
                                                <hr>
                                                <button type="button" class="btn btn-success">
                                                 <small> {{$estudiante->id}}:
                                                    {{$estudiante->funcion}} 
                                                    {{$estudiante->estudiante->persona->nombre}}
                                                    {{$estudiante->estudiante->persona->apellidop}}
                                                    {{$estudiante->estudiante->persona->apellidom}} </small>
                                                    
                                                  </button>
                                                 @if ($estudiante->puntos>=51)
                                                 <button class="btn note-btn-block btn-primary">{{$estudiante->puntos}}</button> 
                                                 @else
                                                 <button class="btn note-btn-block btn-danger">{{$estudiante->puntos}}</button>  
                                                 @endif
                                                 
                                                 <a class="btn btn-warning btn-sm" href="{{route('prueba.edit',$estudiante->id)}}">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Editar
                                              </a>
                                               <br><hr>
                                              
                                                @endforeach
                                              </ul>
                                            
                                              </td>
                                            
                                        </tr>
                                        @endforeach     
                                            
                                      </tbody>    
    
                                      
                                    </table>
                              </div>
                               
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
