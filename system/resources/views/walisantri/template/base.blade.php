<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SIPEMAKAN</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5cc76ac70c.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/animate.css">
    
    <link rel="stylesheet" href="{{'public'}}/web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/magnific-popup.css">

    <link rel="stylesheet" href="{{'public'}}/web/css/aos.css">

    <link rel="stylesheet" href="{{'public'}}/web/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{'public'}}/web/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/nouislider.css">

    
    <link rel="stylesheet" href="{{'public'}}/web/css/flaticon.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/icomoon.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/style.css">

<!-- Select2 -->
  <link rel="stylesheet" href="{{ url('public/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('walisantri.template.section.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('walisantri.template.section.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #EEE2DC; color: black; !important">
    <div class="row">
         <div class="col-md-12">
             
             @yield('content') 
                </div>
              </div>
         </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('walisantri.template.section.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

<!-- <link rel="stylesheet" href="{!! asset('plugins/fontawesome-free/css/all.min.css') !!}"> -->

<script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>

 <script src="{{'public'}}/web/js/jquery.min.js"></script>
  <script src="{{'public'}}/web/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{'public'}}/web/js/popper.min.js"></script>
  <script src="{{'public'}}/web/js/bootstrap.min.js"></script>
  <script src="{{'public'}}/web/js/jquery.easing.1.3.js"></script>
  <script src="{{'public'}}/web/js/jquery.waypoints.min.js"></script>
  <script src="{{'public'}}/web/js/jquery.stellar.min.js"></script>
  <script src="{{'public'}}/web/js/owl.carousel.min.js"></script>
  <script src="{{'public'}}/web/js/jquery.magnific-popup.min.js"></script>
  <script src="{{'public'}}/web/js/aos.js"></script>

  <script src="{{'public'}}/web/js/nouislider.min.js"></script>
  <script src="{{'public'}}/web/js/moment-with-locales.min.js"></script>
  <script src="{{'public'}}/web/js/bootstrap-datetimepicker.min.js"></script>
  <script src="{{'public'}}/web/js/main.js"></script>

<!-- Select2 -->
<script src="{{ url('public/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
<script>
  $(".table-datatable").DataTable();

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
  
</script>
</body>
</html>
                                                                                                                  