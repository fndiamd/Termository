<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/DataTables/DataTables/css/dataTables.bootstrap4.min.css')}}">
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">

  <script src="{{asset('backend/js/jquery-3.3.1.js')}}"></script>
</head>
<body>
  <div class="container-scroller">
    @include('backend.part.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('backend.part.sidemenu')
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        @include('backend.part.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('backend/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>
  <script src="{{asset('backend/js/settings.js')}}"></script>
  <script src="{{asset('backend/js/todolist.js')}}"></script>
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <script src="{{asset('backend/DataTables/DataTables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/DataTables/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
</body>
</html>
