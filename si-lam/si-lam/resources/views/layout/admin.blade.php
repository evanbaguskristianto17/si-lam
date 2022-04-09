
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- STYLE -->
  @include('include.admin.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- NAVBAR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  @include('include.admin.nav')
  </nav>
 

  <!-- SIDEBAR -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
@include('include.admin.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- HEADER CONTENT -->
    <div class="content-header">
@include('include.admin.head')
    </div>
    <!-- /.content-header -->

    <!-- MAIN CONTENT -->
    <section class="content">
      <div class="container-fluid">
        @yield('container')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- CONTENT FOOTER -->
  <footer class="main-footer">
    @include('include.admin.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- script -->
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('include.admin.script')
</body>
</html>
