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
            <h3 class="card-title">listado de docentes y funcion</h3>
            <p class="float-right"><a href="#" class="btn btn-outline-primary">asignar tutores</a></p>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>cod</th>

                  <th>proyecto</th>

                  <th>docentes guias</th>

                  <th class="col-3">asignacion guias</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($funciones as $item)
                <tr>

                  <th>{{$item->id}}</th>

                  <td>{{ $item->nombreproyecto }}</td>

                  <td class="text-center">
                    <ul class="list-unstyled">
                      @foreach($item->docente_proyectos as $docen)
                      @if ($docen->funcion == 'tutor')
                      <small class="badge badge-info">
                        {{$docen->id}} {{$docen->funcion}}
                        {{$docen->docente->persona->nombre}}
                        {{$docen->docente->persona->apellidop}}
                      </small><br>

                      @else
                      <small class="badge badge-success">
                        {{$docen->id}}
                        {{$docen->funcion}}
                        {{$docen->docente->persona->nombre}}
                        {{$docen->docente->persona->apellidop}}
                      </small><br>

                      @endif
                      @endforeach
                    </ul>

                  </td>
                  <td><a class="btn btn-app" href="{{route('funcion.show',$item->id)}}">
                      <i class="fas fa-edit"></i> editar</a> </td>
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