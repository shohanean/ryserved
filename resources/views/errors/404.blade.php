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
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="error-page">
							<div class="error-inner text-center">
							<div class="dz-error" data-text="404">404</div>
							<h4 class="error-head"><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>

						<div>
                           <a href="{{ route('login') }}" class="btn btn-secondary">BACK TO LOGIN</a>
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('dashboard_assets') }}/vendor/global/global.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/js/custom.js"></script>
<script src="{{ asset('dashboard_assets') }}/js/deznav-init.js"></script>
</body>
</html>
