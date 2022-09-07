<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeuShopMin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @Include ('admin.section.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @Include ('admin.section.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin.utils.notif')
                    </div>
                </div>
                @yield('content')
            </div>


            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
        </div>
        @Include ('admin.section.footer')

        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
