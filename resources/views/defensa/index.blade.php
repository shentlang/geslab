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
              <h3 class="card-title">listado de proyecto asignacion de fechas de defensa</h3>
              <p class="float-right"><a href="{{ route('proyecto.create') }}" class="btn btn-outline-primary">Registrar
                  Proyecto</a></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th>id</th>

                    <th width="220" class="text-center">nombre del proyecto</th>
                    <th width="200">lugar de defensa</th>
                    <th class="text-center">fecha y hora de defensa</th>
                    <th>estado</th>
                    <th>sigla</th>
                    <th  class="text-center">autores</th>
                    <th  class="text-center">defensa</th>

                  </tr>
                </thead>
               
                  @foreach($proyectos as $proyecto)
                  <tr>
                    <th scope="row" class="text-center">{{ $proyecto->id }}</th>

                    <td >
                        <a>
                            {{ $proyecto->nombreproyecto }}
                        </a>
                        <br/>
                        <small>
                            {{ $proyecto->created_at->format('d/m/Y')}} 
                        </small>
                    </td>
                   
                    <td>{{ $proyecto->lugar }}</td>
                    
                    <td width="155" class="text-center">
                        <small class="badge badge-secondary"><i class="far fa-calendar"></i> {{ date('d-m-Y', strtotime($proyecto->fechadefensa)) }}  </small>
                   <br>
                   <small class="badge badge-success"><i class="far fa-clock"></i> {{$proyecto->hora}}  </small>
                    </td>
                  <td>{{$proyecto->estado}}</td>
                  <td><span class="badge badge-primary">{{$proyecto->materia->sigla}}</span> </td>
                    <td class="text-center">
                      <ul class="list-unstyled">
                        @foreach($proyecto->estudiantes as $estudiante)
                        <small class="badge badge-info">{{ $estudiante->persona->nombre }} {{ $estudiante->persona->apellidop }} {{ $estudiante->persona->apellidom }}</small>
                        @endforeach
                      </ul>

                    </td>
                    <td>
                     
                      <a class="btn btn-info btn-sm" href="{{ route ('defensa.asignar', $proyecto->id)}}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          asignar defensa
                      </a>
                     
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