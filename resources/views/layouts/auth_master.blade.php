<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE TITLE HERE -->
	<title>{{ env('APP_NAME') }}</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ env('FAVICON') }}">
    <link href="{{ asset('dashboard_assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
    @yield('content')
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="./js/deznav-init.js"></script>
</body>
</html>
