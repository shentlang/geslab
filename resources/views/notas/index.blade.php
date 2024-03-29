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
                              <div class="card-body table-responsive p-0">
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
                                          
                                           
                                          
                                            <td  class="text-center" style="display: table-cell;
                                            vertical-align: middle;"> <ul class="list-unstyled">{{ $item->nombreproyecto }}</ul></td>
                                            
                                            <td class="text-center"><ul class="list-unstyled">
                                                @foreach($item->estudiante_proyectos as $estudiante)
                                                <hr>
                                                <button type="button" class="btn btn-success col-5">
                                                 <small> {{$estudiante->id}}:
                                                    {{$estudiante->funcion}} 
                                                    {{$estudiante->estudiante->persona->nombre}}
                                                    {{$estudiante->estudiante->persona->apellidop}}
                                                    {{$estudiante->estudiante->persona->apellidom}} </small>
                                                    
                                                  </button>
                                                 @if ($estudiante->nota>=51)
                                                 <button type="button" class="btn-primary col-1"><small>{{$estudiante->nota}}</small></button> 
                                                 @else
                                                 <button type="button" class="btn-danger col-1">{{$estudiante->nota}}</button>  
                                                 @endif
                                                 
                                                 <a class="btn btn-warning" href="{{route('prueba.edit',$estudiante->id)}}">
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
