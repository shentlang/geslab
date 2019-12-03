@extends("theme.$theme.layout")
@section('content')
<div class="content">
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detalles del Proyecto</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
              <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                  <small>  <span class="info-box-text text-center text-muted">{{$proyecto->nombreproyecto}}</span>
                    <span
                      class="info-box-number text-center text-muted mb-0">{{$proyecto->materia->sigla}}</span></small>   
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
              </div>

              <div class="col-12 col-sm-4">
                <p class="float-right"><a href="{{ route('informe.show',$proyecto->id) }}"
                    class="btn btn-outline-primary"> <i class="far fa-fw fa-file-word"></i>crear informe
                  </a></p>
              </div>

            </div>
            <div class="row">
              <div class="col-12">
                <h4>Informes Recientes</h4>
                @foreach ($proyecto->informes as $infor)
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset("assets/lte/dist/img/check.png")}}" alt="">
                    <span class="username">
                      <a class="text-primary">{{$infor->descripcion}}</a>
                    </span>
                    <span class="description">informe publicado -
                      {{ date('d-m-Y', strtotime($infor->fpublicacion)) }}</span>
                  </div>
                  <!-- /.user-block -->
                  <blockquote>
                  {!!$infor->comentario!!}
                     
                    </blockquote>
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">{{$proyecto->nombreproyecto}}</span>
                          <span class="info-box-number text-center text-muted mb-0">avance en fecha
                            {{ date('d-m-Y', strtotime($infor->fpublicacion)) }}</span>
                        </div>
                      </div>

                    </div>

                    <div class="col-6 col-md-3 text-center">
                      <input type="text" readonly="readonly" class="knob" data-thickness="0.2" data-angleArc="250"
                        data-angleOffset="-125" value="{{$infor->avance}}" data-width="120" data-height="120" 
                      @if ($infor->avance>=80)
                      data-fgColor="#17B217"
                      @else
                      @if ($infor->avance>=51)
                      data-fgColor="#21D4E7"
                      @else
                      @if ($infor->avance>=40)
                      data-fgColor="#F58911"
                      @else
                      data-fgColor="#FF0000"
                      @endif
                      @endif
                      @endif
                      >

                      <div class="knob-label"> porcentaje de avance {{$infor->avance}}%</div>
                    </div>
                  </div>



                  <p>
                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                  </p>
                  
                </div>
                @endforeach




              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
            <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Ges. Doc</h3>
            <p class="text-muted">
              previsualiza informes realizados por el docente. para realizar un nuevo informe pulse el boton crear informe
            </p>
            <br>
            <div class="text-muted">
              <p class="text-sm">software by 
                <b class="d-block">UAJMS-FCIGCH</b>
              </p>
              <p class="text-sm">Project Create by
                <b class="d-block">Daniel M. Nataly S. </b>
              </p>
            </div>

            <h5 class="mt-5 text-muted">Project Function</h5>
            <ul class="list-unstyled">
              <li>
                <a  class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                  elaboracion documentos</a>
              </li>
              <li>
                <a class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> informes pdf</a>
              </li>
              <li>
                <a  class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                  notificaciones correo</a>
              </li>
              <li>
                <a  class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                  Registro estudiantil</a>
              </li>
            </ul>
            <div class="text-center mt-5 mb-3">
              <a href="#" class="btn btn-sm btn-primary">Add files</a>
              <a href="#" class="btn btn-sm btn-warning">Report contact</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
</div>



@endsection