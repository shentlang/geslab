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
                                <h1 class="card-title">editar notas</h1>
                                <br>
                                
                      <p><b>Estudiante:</b> {{$notas->estudiante->persona->nombre}} 
                        {{$notas->estudiante->persona->apellidop}} 
                        {{$notas->estudiante->persona->apellidom}}
                    </p>
                      <p><b>Carrera:</b> {{$notas->estudiante->carrera}}  </p>  
                      <p><b>titulo del proyecto:</b> {{$notas->proyecto->nombreproyecto}}</p>
                      <form action="{{route('prueba.update', $notas->id)}}" method="POST">
                       @csrf
                       {!! method_field('PUT') !!}
                       <input type="text" class="form-control"  value="{{$notas->puntos}}" name="punto" autocomplete="off" >
                       <br>
                       <a href="{{ route('prueba.index') }}" class="btn btn-danger">Cancelar</a>
                       <button type="submit" class="btn btn-primary">editar nota</button>
                      </form>
                        
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                              
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
