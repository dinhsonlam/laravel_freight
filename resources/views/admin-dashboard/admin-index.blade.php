<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin-dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin-dashboard/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('admin-dashboard/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('admin-dashboard/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
    @include('admin-dashboard.components.header')
    <div class="content-wrapper">
    @yield('admin-index-section-content')
    @yield('managing-partners-section-content')
    @yield('list-partners-section-content')

    @include('admin-dashboard.components.footer')
    <!-- footer -->
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin-dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin-dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('admin-dashboard/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin-dashboard/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin-dashboard/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin-dashboard/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('admin-dashboard/js/sb-admin-datatables.min.js')}}"></script>
    <script src="{{asset('admin-dashboard/js/sb-admin-charts.min.js')}}"></script>
  
</body>

</html>
