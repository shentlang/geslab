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
                                <h3 class="card-title">asignacion de tutores</h3>
                              
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                               <form action="{{route('funcion.store')}}" method="POST">
                               @csrf
                               <label for="proyecto">nombre proyecto:</label>
                               <select name="proyecto" class="form-control">
                                  <option value="{{$proyectos->id}}"select>{{$proyectos->nombreproyecto}}</option>                
                    </select>
                    <label for="docente">docente:</label>
                    <select name="docente" class="form-control">
                      @foreach ($docentes as $docente)
                      <option value="{{$docente->id}}"select>{{$docente->titulado}} {{$docente->persona->nombre}}</option>       
                      @endforeach
                               
          </select>

          <label for="funcion">asignar como</label>
					<select name="funcion" class="form-control">
                       
						<option value="tutor" >tutor</option>
						<option value="tribunal">tribunal</option>
					
						
					</select> <br>
          <button type="submit" class="btn btn-primary">asignar</button>

                               </form>
                                
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
