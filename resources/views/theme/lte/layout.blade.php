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
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
    <!-- css selec proyecto -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
  <!-- estilo de tablas -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables/dataTables.bootstrap4.css")}}">
 <!-- date range picker -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.css")}}">
   <!-- Toastr -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
</head> 
<body class="hold-transition skin-blue sidebar-mini">

    <!-- Site wrapper -->
  
    
    
    <div class="wrapper">
        @include("theme.$theme.header")
        @include("theme.$theme.aside") 
        
       
           
                <div class="content-wrapper " style="background-image: url({{asset("assets/lte/dist/img/maxresdefault.jpg")}})" id="app" >
                    <main class="py-4">
                        @yield('content')
                    </main>
                   
                </div>
              <!-- inicio footer -fin footer -->
              
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
<!-- selec for proyect -->
<script src="{{asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>
<!-- listar el proyecto -->
<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables/dataTables.bootstrap4.js")}}"></script>
 <!-- bootstrap color picker -->
<script src="{{asset("assets/$theme/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>
<!-- date-range-picker -->
      <script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>   
<!-- InputMask -->
<script src="{{asset("assets/$theme/plugins/inputmask/jquery.inputmask.bundle.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/moment/moment.min.js")}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset("assets/$theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}"></script>
<!-- daterange picker -->

<script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- aqui ruta css <script src="{{asset("assets/$theme")}}"></script>  -->
<script src="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.js")}}"></script> 
<script src="{{asset("assets/$theme/plugins/toastr/toastr.min.js")}}"></script> 
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script> 
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script> 

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
  
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'DD/MM/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )
  
      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })
      
      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()
  
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  
      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });
    })
  </script>
  <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
    <script>
    var ultimoValorValido = null;
$("#estudiantes").on("change", function() {
  if ($("#estudiantes option:checked").length > 2) {
    $("#estudiantes").val(ultimoValorValido);
  } else {
    ultimoValorValido = $("#estudiantes").val();
  }
});
    </script>
    <script type="text/javascript">
      $(function() {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
    
        $('.swalDefaultSuccess').click(function() {
          Toast.fire({
            type: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultInfo').click(function() {
          Toast.fire({
            type: 'info',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultError').click(function() {
          Toast.fire({
            type: 'error',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultWarning').click(function() {
          Toast.fire({
            type: 'warning',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultQuestion').click(function() {
          Toast.fire({
            type: 'question',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
    
        $('.toastrDefaultSuccess').click(function() {
          toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
          toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
          toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
          toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
      });
    
    </script>

        </body>
        
        </html>