<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGD FCIGCH | UAJMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head> 
<body class="hold-transition sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    @include("theme.$theme.aside") 
    @include("theme.$theme.header")
    
    <div class="wrapper">
       
       
            <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content">
                            <div class="card">
                                    <div class="card-header">
                                      <h3 class="card-title">Sistema gestion documental FCIGCH</h3>
                            
                                      <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                          <i class="fas fa-minus"></i></button>
                                       
                                      </div>
                                    </div>
                                    <div class="card-body">
                                     Sistema creado para la automatizacion de documentacion y notidicaciones online
                                    </div>
                                    <!-- /.card-body -->
                                   

                        </section>
                </div>
                <div id="app">
       
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
                //inicio footer-fin
                @include("theme.$theme.footer")
              
        </div>
      <!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("assets/$theme/plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>

        </body>
        
        </html>