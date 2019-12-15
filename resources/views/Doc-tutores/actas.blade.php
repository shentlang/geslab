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
              <h3 class="card-title">listado estudianteses</h3>
              <p class="float-right"><a href="" class="btn btn-outline-primary">Registrar
                  estudiantes</a></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr>
                    

                    <th width="220" class="text-center">nombre (s)</th>
                    <th>apellidos</th>
                    <th>plan E</th>
                    <th class="text-center">fecha de defensa </th>
                    <th>sigla</th>
                    <th>proyecto</th>
                    
                    <th  class="text-center">tribunales</th>
                    <th width="200" class="text-center">informes</th>

                  </tr>
                </thead>
               
                  @foreach($estudiante as $estudiantes)
                  <tr>
                   

                    <td >
                        <a>
                            {{ $estudiantes->estudiante->persona->nombre }}
                        </a>
                        <br/>
                       
                    </td>
                   
                    <td>{{ $estudiantes->estudiante->persona->apellidop }} {{ $estudiantes->estudiante->persona->apellidom }}</td>
                <td>{{$estudiantes->estudiante->plan->numplan}}</td>
                    <td width="155" class="text-center">
                    <small class="badge badge-success"><i class="far fa-clock"> </i> {{ date('d-m-Y', strtotime( $estudiantes->proyecto->fechadefensa)) }} </small>
                   
                    </td>
                  <td>{{$estudiantes->proyecto->materia->sigla}}</td>
                  <td><span class="badge badge-primary">{{$estudiantes->proyecto->nombreproyecto}}</span> </td>
                 
                    <td class="text-center">
                      <ul class="list-unstyled">
                        @foreach($estudiantes->proyecto->docente_proyectos as $tutor)
                        <small class="badge badge-info">{{ $tutor->docente->persona->nombre }} {{ $tutor->docente->persona->apellidop }} {{ $tutor->docente->persona->apellidom }}</small>
                        @endforeach
                      </ul>

                    </td>
                    <td class="project-actions text-right">
                     
                      @if ($estudiantes->proyecto->estado == "APROBADO")
                      <form action="{{route('designacion-pdf4.pdf',$estudiantes->id)}}" method="GET">
                          @csrf
                          <input name="numero" type="number">
      
                          <button type="submit" class="btn btn-primary"><i class="far fa-fw fa-file-pdf">
                            </i>
                            elaborar Acta de defensa</button>
                        </form>
                      @else
                      {{$estudiantes->proyecto->estado}}
                      @endif
                    
                  </td>

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