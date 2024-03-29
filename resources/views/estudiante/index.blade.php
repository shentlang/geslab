@extends("theme.$theme.layout")
@section('content')

@if(!session('mensaje')==null)
  <div class="alert alert-success col-12 col-sm-2 ">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('mensaje')}}

  </div>

@endif

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
            <p class="float-right animated rotateInDownRight slow"><a href="{{ route('estudiante.create') }}" class="btn btn-outline-primary">Registrar
                Estudiante</a></p>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0 animated zoomInUp slow">


            <table id="example1" class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Nombre (es) del estudiante</th>
                  <th>Apellido Paterno</th>
                  <th>apellido Materno</th>
                  <th>C.I</th>
                  <th>Genero</th>
                  <th>R.U</th>
                  <th>Carrera</th>
                  <th>Editar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($estudiantes as $item)
                <tr>
                  <td>
                      
                    {{$item->persona->nombre}}
                      
                  </td>
                  <td>{{$item->persona->apellidop}}</td>
                  <td>{{$item->persona->apellidom}}</td>
                  <td><small>{{$item->persona->cedula}}</small></td>
                  <td>{{$item->persona->genero}}</td>
                  <td><small class="badge badge-warning" >{{$item->ru}}</small></td>
                  <td><small class="badge badge-info">{{$item->carrera}}</small></td>
                  <td><a class="btn btn-outline-danger btn-sm"
                      href="{{route('estudiante.edit',Crypt::encrypt($item->id))}}"><i class="fas fa-edit"></i>
                      editar</a> </td>

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