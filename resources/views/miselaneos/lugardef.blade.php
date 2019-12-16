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
            <h3 class="card-title">listado lugares para defensa </h3>
            <p class="float-right animated rotateInDownRight slow"><a href="{{ route('lugar.create') }}" class="btn btn-outline-primary">Registrar nuevo lugar</a></p>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0 animated zoomInUp slow">


            <table id="example1" class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th style="text-align: center">aula</th>
                 <th>ubicacion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lug as $item)
                <tr>
                  <td>
                      
                    {{$item->aula}}
                      
                  </td>
                  <td>
                      
                        {{$item->lugar}}
                          
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