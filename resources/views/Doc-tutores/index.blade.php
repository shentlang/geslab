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
              <h3 class="card-title">listado tutores</h3>
              <p class="float-right"><a href="" class="btn btn-outline-primary">Registrar
                  tutor</a></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th>id</th>

                    <th width="220" class="text-center">nombre (s)</th>
                    <th>apellidos</th>
                    <th class="text-center">fecha de C. curricular</th>
                    <th>designado</th>
                    <th>proyecto</th>
                    <th  class="text-center">autores</th>
                    <th width="200" class="text-center">informes</th>

                  </tr>
                </thead>
               
                  @foreach($docente as $tutor)
                  <tr>
                    <th scope="row" class="text-center">{{ $tutor->id }}</th>

                    <td >
                        <a>
                            {{ $tutor->docente->persona->nombre }}
                        </a>
                        <br/>
                       
                    </td>
                   
                    <td>{{ $tutor->docente->persona->apellidop }} {{ $tutor->docente->persona->apellidom }}</td>
                    
                    <td width="155" class="text-center">
                    <small class="badge badge-success"><i class="far fa-clock"> </i> {{ date('d-m-Y', strtotime( $tutor->consejo)) }} </small>
                   
                    </td>
                  <td>{{$tutor->funcion}} {{$tutor->proyecto->materia->sigla}} </td>
                  <td><span class="badge badge-primary">{{$tutor->proyecto->nombreproyecto}}</span> </td>
                    <td class="text-center">
                      <ul class="list-unstyled">
                        @foreach($tutor->proyecto->estudiantes as $estudiante)
                        <small class="badge badge-info">{{ $estudiante->persona->nombre }} {{ $estudiante->persona->apellidop }} {{ $estudiante->persona->apellidom }}</small>
                        @endforeach
                      </ul>

                    </td>
                    <td class="project-actions text-right">
                    @if ($tutor->funcion == "tribunal")
                    <a class="btn btn-primary btn-sm" href="">
                        <i class="fas fa-eye">
                        </i>
                        pendiente
                    </a><br> 
                    @else
                    <a class="btn btn-primary btn-sm" href="{{route('designacion-pdf.pdf',$tutor->id)}}">
                        <i class="fas fa-eye">
                        </i>
                        crear documento
                    </a><br>   
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