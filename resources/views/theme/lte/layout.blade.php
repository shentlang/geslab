<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGD FCIGCH | UAJMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <STYLE>
      .invisible { visibility : hidden }
      </STYLE>
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
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Codystar&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Akronim|Fredericka+the+Great|Londrina+Sketch|Yesteryear&display=swap" rel="stylesheet"> 
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
    <!-- css selec2 proyecto -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
  <!-- estilo de tablas -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables/dataTables.bootstrap4.css")}}">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.css")}}">
   <!-- Toastr -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/ion-rangeslider/css/ion.rangeSlider.min.css")}}">
   <!-- bootstrap slider -->
   <link rel="stylesheet" href="{{asset("assets/$theme/plugins/bootstrap-slider/css/bootstrap-slider.min.css")}}">
</head> 
<body class="hold-transition sidebar-mini">
    <div class="loader" id="loading" style=" position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://media.giphy.com/media/PUYgk3wpNk0WA/giphy.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
"></div>
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
<!-- select2 for proyect -->
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

<script src="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.js")}}"></script> 
<script src="{{asset("assets/$theme/plugins/toastr/toastr.min.js")}}"></script> 
<!-- Ion Slider -->
<script src="{{asset("assets/$theme/plugins/ion-rangeslider/js/ion.rangeSlider.min.js")}}"></script>
<!-- Bootstrap slider -->
<script src="{{asset("assets/$theme/plugins/bootstrap-slider/bootstrap-slider.min.js")}}"></script>
<!-- jQuery Knob -->
<script src="{{asset("assets/$theme/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("assets/$theme/plugins/sparkline/jquery.sparkline.min.js")}}"></script>
<!-- ckeditor -->
<script src="{{asset("assets/$theme/ckeditor/ckeditor.js")}}"></script>
<!-- animate css -->
<link rel="stylesheet" href="{{asset("assets/$theme/animate.min.css")}}">

<script type="text/javascript">
  window.addEventListener('load', () =>{

  document.getElementById('loading').className = 'invisible';




  })
  </script>

<script>
 CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );


</script>

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
    <script>
        $(function () {
          /* BOOTSTRAP SLIDER */
          $('.slider').bootstrapSlider()
      
          /* ION SLIDER */
          $('#range_1').ionRangeSlider({
            min     : 0,
            max     : 5000,
            from    : 1000,
            to      : 4000,
            type    : 'double',
            step    : 1,
            prefix  : '$',
            prettify: false,
            hasGrid : true
          })
          $('#range_2').ionRangeSlider()
      
          $('#range_5').ionRangeSlider({
            min     : 0,
            max     : 100,
            type    : 'single',
            step    : 1,
            postfix : ' % de avance',
            prettify: false,
            hasGrid : true
          })
          $('#range_6').ionRangeSlider({
            min     : -50,
            max     : 50,
            from    : 0,
            type    : 'single',
            step    : 1,
            postfix : '°',
            prettify: false,
            hasGrid : true
          })
      
          $('#range_4').ionRangeSlider({
            type      : 'single',
            step      : 100,
            postfix   : ' light years',
            from      : 55000,
            hideMinMax: true,
            hideFromTo: false
          })
          $('#range_3').ionRangeSlider({
            type    : 'double',
            postfix : ' miles',
            step    : 10000,
            from    : 25000000,
            to      : 35000000,
            onChange: function (obj) {
              var t = ''
              for (var prop in obj) {
                t += prop + ': ' + obj[prop] + '\r\n'
              }
              $('#result').html(t)
            },
            onLoad  : function (obj) {
              //
            }
          })
        })
      </script>
      <script>
          $(function () {
            /* jQueryKnob */
        
            $('.knob').knob({
              /*change : function (value) {
               //console.log("change : " + value);
               },
               release : function (value) {
               console.log("release : " + value);
               },
               cancel : function () {
               console.log("cancel : " + this.value);
               },*/
              draw: function () {
        
                // "tron" case
                if (this.$.data('skin') == 'tron') {
        
                  var a   = this.angle(this.cv)  // Angle
                    ,
                      sa  = this.startAngle          // Previous start angle
                    ,
                      sat = this.startAngle         // Start angle
                    ,
                      ea                            // Previous end angle
                    ,
                      eat = sat + a                 // End angle
                    ,
                      r   = true
        
                  this.g.lineWidth = this.lineWidth
        
                  this.o.cursor
                  && (sat = eat - 0.3)
                  && (eat = eat + 0.3)
        
                  if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value)
                    this.o.cursor
                    && (sa = ea - 0.3)
                    && (ea = ea + 0.3)
                    this.g.beginPath()
                    this.g.strokeStyle = this.previousColor
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                    this.g.stroke()
                  }
        
                  this.g.beginPath()
                  this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                  this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                  this.g.stroke()
        
                  this.g.lineWidth = 2
                  this.g.beginPath()
                  this.g.strokeStyle = this.o.fgColor
                  this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
                  this.g.stroke()
        
                  return false
                }
              }
            })
            /* END JQUERY KNOB */
        
            //INITIALIZE SPARKLINE CHARTS
            $('.sparkline').each(function () {
              var $this = $(this)
              $this.sparkline('html', $this.data())
            })
        
            /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
            drawDocSparklines()
            drawMouseSpeedDemo()
        
          })
        
          function drawDocSparklines() {
        
            // Bar + line composite charts
            $('#compositebar').sparkline('html', {
              type    : 'bar',
              barColor: '#aaf'
            })
            $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
              {
                composite: true,
                fillColor: false,
                lineColor: 'red'
              })
        
        
            // Line charts taking their values from the tag
            $('.sparkline-1').sparkline()
        
            // Larger line charts for the docs
            $('.largeline').sparkline('html',
              {
                type  : 'line',
                height: '2.5em',
                width : '4em'
              })
        
            // Customized line chart
            $('#linecustom').sparkline('html',
              {
                height      : '1.5em',
                width       : '8em',
                lineColor   : '#f00',
                fillColor   : '#ffa',
                minSpotColor: false,
                maxSpotColor: false,
                spotColor   : '#77f',
                spotRadius  : 3
              })
        
            // Bar charts using inline values
            $('.sparkbar').sparkline('html', { type: 'bar' })
        
            $('.barformat').sparkline([1, 3, 5, 3, 8], {
              type               : 'bar',
             
              tooltipValueLookups: {
                levels: $.range_map({
                  ':2' : 'Low',
                  '3:6': 'Medium',
                  '7:' : 'High'
                })
              }
            })
        
            // Tri-state charts using inline values
            $('.sparktristate').sparkline('html', { type: 'tristate' })
            $('.sparktristatecols').sparkline('html',
              {
                type    : 'tristate',
                colorMap: {
                  '-2': '#fa7',
                  '2' : '#44f'
                }
              })
        
            // Composite line charts, the second using values supplied via javascript
            $('#compositeline').sparkline('html', {
              fillColor     : false,
              changeRangeMin: 0,
              chartRangeMax : 10
            })
            $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
              {
                composite     : true,
                fillColor     : false,
                lineColor     : 'red',
                changeRangeMin: 0,
                chartRangeMax : 10
              })
        
            // Line charts with normal range marker
            $('#normalline').sparkline('html',
              {
                fillColor     : false,
                normalRangeMin: -1,
                normalRangeMax: 8
              })
            $('#normalExample').sparkline('html',
              {
                fillColor       : false,
                normalRangeMin  : 80,
                normalRangeMax  : 95,
                normalRangeColor: '#4f4'
              })
        
            // Discrete charts
            $('.discrete1').sparkline('html',
              {
                type     : 'discrete',
                lineColor: 'blue',
                xwidth   : 18
              })
            $('#discrete2').sparkline('html',
              {
                type          : 'discrete',
                lineColor     : 'blue',
                thresholdColor: 'red',
                thresholdValue: 4
              })
        
            // Bullet charts
            $('.sparkbullet').sparkline('html', { type: 'bullet' })
        
            // Pie charts
            $('.sparkpie').sparkline('html', {
              type  : 'pie',
              height: '1.0em'
            })
        
            // Box plots
            $('.sparkboxplot').sparkline('html', { type: 'box' })
            $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
              {
                type        : 'box',
                raw         : true,
                showOutliers: true,
                target      : 6
              })
        
            // Box plot with specific field order
            $('.boxfieldorder').sparkline('html', {
              type                     : 'box',
              tooltipFormatFieldlist   : ['med', 'lq', 'uq'],
              tooltipFormatFieldlistKey: 'field'
            })
        
            // click event demo sparkline
            $('.clickdemo').sparkline()
            $('.clickdemo').bind('sparklineClick', function (ev) {
              var sparkline = ev.sparklines[0],
                  region    = sparkline.getCurrentRegionFields()
              value         = region.y
              alert('Clicked on x=' + region.x + ' y=' + region.y)
            })
        
            // mouseover event demo sparkline
            $('.mouseoverdemo').sparkline()
            $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
              var sparkline = ev.sparklines[0],
                  region    = sparkline.getCurrentRegionFields()
              value         = region.y
              $('.mouseoverregion').text('x=' + region.x + ' y=' + region.y)
            }).bind('mouseleave', function () {
              $('.mouseoverregion').text('')
            })
          }
        
          /**
           ** Draw the little mouse speed animated graph
           ** This just attaches a handler to the mousemove event to see
           ** (roughly) how far the mouse has moved
           ** and then updates the display a couple of times a second via
           ** setTimeout()
           **/
          function drawMouseSpeedDemo() {
            var mrefreshinterval = 500 // update display every 500ms
            var lastmousex       = -1
            var lastmousey       = -1
            var lastmousetime
            var mousetravel      = 0
            var mpoints          = []
            var mpoints_max      = 30
            $('html').mousemove(function (e) {
              var mousex = e.pageX
              var mousey = e.pageY
              if (lastmousex > -1) {
                mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
              }
              lastmousex = mousex
              lastmousey = mousey
            })
            var mdraw = function () {
              var md      = new Date()
              var timenow = md.getTime()
              if (lastmousetime && lastmousetime != timenow) {
                var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
                mpoints.push(pps)
                if (mpoints.length > mpoints_max) {
                  mpoints.splice(0, 1)
                }
                mousetravel = 0
                $('#mousespeed').sparkline(mpoints, {
                  width        : mpoints.length * 2,
                  tooltipSuffix: ' pixels per second'
                })
              }
              lastmousetime = timenow
              setTimeout(mdraw, mrefreshinterval)
            }
            // We could use setInterval instead, but I prefer to do it this way
            setTimeout(mdraw, mrefreshinterval);
          }
        </script>

        </body>
        
        </html>