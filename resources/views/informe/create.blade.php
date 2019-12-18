@extends("theme.$theme.layout")
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Projecto {{$proyecto->nombreproyecto}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <form action="{{route('informe.store')}}" method="POST">
        @csrf
 <div class="card-body">
      <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">fecha publicacion</label>
            <input type="date" readonly="readonly" name="fpublicacion" value="<?php echo date("Y-m-d");?>" class="form-control">
             
            </div>
            <div class="form-group">
                <label for="inputDescription">descripcion</label>
              <input type="text" name="descripcion" class="form-control">
              </div>
            <div class="form-group">
              <label for="inputDescription">comentario del proyecto</label>
              <textarea name="comentario" id="editor1">
                 
              </textarea>
            </div>

            <div class="container-fluid">
                    <div class="row">
                            <div class="col-12">
                              <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Avance del proyecto</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  
                                  <div class="row content">
                                    <div class="col-sm-12">
                                      <label for="">Porcentage de avance</label>
                                      <input type="number" class="form-control" min="0" max="100" required name="avance" value="">
                                    </div>
                                    <div class="col-sm-12">
                                      <label for="">Nota de avance</label>
                                      <input type="number" class="form-control" min="0" max="100" required name="nota" value="">
                                    </div>
                                  
                                  </div>
                                  <input type="hidden" name="proyectoid" value="{{$proyecto->id}}" />
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /.col -->
                          </div>

            </div>
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
     
    </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create new Porject" class="btn btn-success float-right">
      </div>
    </div>
  </section>
</div>
</form>
  @endsection 