<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }} | House Rent Management System </title>

    <!-- Bootstrap -->
    <link href="{{ asset('design/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('design/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('design/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('design/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('design/build/css/custom.min.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- left sidebar -->
        @include('common.sidebar')
        <!-- /left sidebar -->

        <!-- top navigation -->
        @include('common.header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('common.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('design/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('design/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('design/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('design/vendors/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('design/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('design/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('design/vendors/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('design/vendors/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('design/vendors/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('design/vendors/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('design/vendors/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('design/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('design/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('design/vendors/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('design/vendors/DateJS/build/date.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('design/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('design/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('design/build/js/custom.min.js') }}"></script>
</body>
</html>