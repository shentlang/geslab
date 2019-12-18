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
            <h3 class="card-title">listado proyectos</h3>
            <p class="float-right animated rotateInDownRight slow"><a href="{{ route('sms.send') }}" class="btn btn-outline-primary"> enviar recordatorios
                </a></p>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0 animated zoomInUp slow">


            <table id="example1" class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>nombre proyecto </th>
                  <th>fecha de defensa</th>
                  <th>hora</th>
                  <th>autores</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($proyectos as $item)
                <tr>
                  <td>
                      
                    {{$item->nombreproyecto}}
                      
                  </td>
                  <td>
                    <small class="badge badge-success"><i class="far fa-calendar"></i> {{ date('d-m-Y', strtotime($item->fechadefensa)) }}  </small>
  
                   
                      
                  </td>
                  <td><small class="badge badge-warning"><i class="far fa-clock"></i> {{ date('H-i', strtotime($item->hora)) }}  </small>
                  </td>
                  <td>
                    @foreach ($item->docente_proyectos as $docen)

                    <small class="badge badge-info">{{$docen->docente->persona->nombre}} {{$docen->docente->persona->apellidop}} {{$docen->docente->persona->apellidom}}
                    </small> <br>


                    @endforeach
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