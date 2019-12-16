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
            <h3 class="card-title">director de departamento</h3>
            <p class="float-right animated rotateInDownRight slow"><a href="{{ route('director.create') }}" class="btn btn-outline-primary">Registrar nuevo director</a></p>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0 animated zoomInUp slow">


            <table id="example1" class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>apellido Materno</th>
                  <th>C.I</th>
                  <th>Genero</th>
                  <th>area</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pre as $item)
                <tr>
                  <td>
                      
                    {{$item->persona->nombre}}
                      
                  </td>
                  <td>{{$item->persona->apellidop}}</td>
                  <td>{{$item->persona->apellidom}}</td>
                  <td><small>{{$item->persona->cedula}}</small></td>
                  <td>{{$item->persona->genero}}</td>
                <td>{{$item->funciond}}</td>
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