<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('backend.component.head')
    @yield('head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Control Sidebar -->
        @include('backend.component.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('backend.component.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')

        <!-- Footer Content -->
        @include('backend.component.footer')
        <!-- Control Sidebar -->
        
        @include('backend.component.right_sidebar')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('backend.component.script')
    @yield('script')
</body>

</html>
