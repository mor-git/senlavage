<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Winkle</title>
	<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="{{ asset('template/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="{{ asset('template/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Morris Charts CSS -->
    <link href="{{ asset('template/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- bootstrap-select CSS -->
	<link href="{{ asset('template/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>	
	
	
	<!-- vector map CSS -->
	<link href="{{ asset('template/vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="{{ asset('template/dist/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('template/dist/css/mor.css') }}" rel="stylesheet" type="text/css">
	<!-- dataTables CSS -->
	<link href="{{ asset('template/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- jQuery -->
    <script src="{{ asset('template/vendors/bower_components/jquery/dist/jquery-3.3.1.min.js')}}"></script>
</head>

<body>

@include('layouts.navbar')
@yield('content')
@yield('scripts')
@include('layouts.footer')
	<!-- JavaScript -->
	
    <!-- jQuery
    <script src="{{ asset('template/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('template/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    
	<!-- Data table JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('template/dist/js/dataTables-data.js') }}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('template/dist/js/jquery.slimscroll.js') }}"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('template/dist/js/dropdown-bootstrap-extended.js') }}"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="{{ asset('template/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/echarts/dist/echarts-en.min.js') }}"></script>
	<script src="{{ asset('template/vendors/echarts-liquidfill.min.js') }}"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="{{ asset('template/vendors/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('template/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('template/dist/js/vectormap-data.js') }}"></script>
	
	<!-- Toast JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
	
	<!-- Piety JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('template/dist/js/peity-data.js') }}"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{ asset('template/vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template/vendors/bower_components/morris.js/morris.min.js') }}"></script>
	
	<!-- Bootstrap Select JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	
	<!-- Flot Charts JavaScript -->
	<script src="{{ asset('template/vendors/bower_components/Flot/excanvas.min.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/Flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/Flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/Flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/Flot/jquery.flot.time.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/Flot/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/Flot/jquery.flot.crosshair.js') }}"></script>
	<script src="{{ asset('template/vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
	<script src="{{ asset('template/dist/js/flot-data.js') }}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{ asset('template/dist/js/init.js') }}"></script>
	<script src="{{ asset('template/dist/js/dashboard2-data.js') }}"></script>
</body>

</html>