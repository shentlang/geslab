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
              <h3 class="card-title">listado estudiantil</h3>
              <p class="float-right"><a href="{{ route('proyecto.create') }}" class="btn btn-outline-primary">Registrar
                  Proyecto</a></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th>identificador del proyecto</th>

                    <th>nombre del proyecto</th>
                    <th>tipo</th>
                    <th>defensa inicial</th>
                    <th>defensa final</th>
                    <th>autores</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach($proyectos as $proyecto)
                  <tr>
                    <th scope="row" class="text-center">{{ $proyecto->id }}</th>

                    <td>{{ $proyecto->nombreproyecto }}</td>
                    <td>
                      {{ $proyecto->tipo }}
                    </td>
                    <td>{{ $proyecto->defensaini }}</td>
                    <td width="155" class="text-center">
                      {{$proyecto->defensafinal}}
                    </td>
                    <td>
                      <ul class="list-unstyled">
                        @foreach($proyecto->estudiantes as $estudiante)
                        <button disabled="disabled">
                          <li>{{ $estudiante->persona->nombre }} {{ $estudiante->persona->apellidop }} </li>
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

</div>
@endsection