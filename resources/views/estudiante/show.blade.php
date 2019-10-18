@extends("theme.$theme.layout")
@section('content')

        <section class="content">
                <section class="content">
                        <div class="row">
                           <div class="col-12">
                 <h1>datos basicos de la persona</h1>
                           <p> 
                              <b>Estudiante:</b>  
                              {{$estudiantes->persona->nombre}} 
                              {{$estudiantes->persona->apellidop}} 
                              {{$estudiantes->persona->apellidom}}

                        </p>
                 <p><b>C.I:</b> {{$estudiantes->persona->cedula}}</p>
                 <p><b>Genero:</b>{{$estudiantes->persona->genero}}</p>
                 <p><b>R.U:</b> {{$estudiantes->ru}} </p>
                 <p><b>Carrera:</b> {{$estudiantes->carrera}} </p>         
                            
                            </div>
                          <!-- /.col -->
                         </div>
                        <!-- /.row -->
                 </section>
                      <!-- /.content -->
                    
         </section>
        
    @endsection