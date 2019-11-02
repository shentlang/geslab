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
              <h3 class="card-title">listado estudiantil</h3>
              <p class="float-right"><a href="{{ route('proyecto.create') }}" class="btn btn-outline-primary">Registrar
                  Proyecto</a></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th>id</th>

                    <th>nombre del proyecto</th>
                    <th>lugar de defensa</th>
                    <th>fecha de defensa</th>
                    <th>estado</th>
                    <th>sigla</th>
                    <th width="220" class="text-center">autores</th>


                  </tr>
                </thead>
               
                  @foreach($proyectos as $proyecto)
                  <tr>
                    <th scope="row" class="text-center">{{ $proyecto->id }}</th>

                    <td class="lead">{{ $proyecto->nombreproyecto }}</td>
                   
                    <td>{{ $proyecto->lugar }}</td>
                    
                    <td width="155" class="text-center">
                        <small class="badge badge-success"><i class="far fa-clock"></i>    {{$proyecto->fechadefensa}}</small>
                   
                    </td>
                  <td>{{$proyecto->estado}}</td>
                  <td><span class="badge badge-primary">{{$proyecto->materia->nombremateria}}</span> </td>
                    <td>
                      <ul class="list-unstyled">
                        @foreach($proyecto->estudiantes as $estudiante)
                        <button type="button" class="btn-danger">{{ $estudiante->persona->nombre }} {{ $estudiante->persona->apellidop }} {{ $estudiante->persona->apellidom }}
                        </button>  

                       
                         
                        </button>
                        @endforeach
                      </ul>

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