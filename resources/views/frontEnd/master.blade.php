<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    @stack('css')
</head>
<body>
    <div class="wrapper">
    	@yield('content')
    </div>
    <!-- Bootstrap core JavaScript-->
	<script src="{{ asset('public/frontEnd/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/frontEnd/js/custom.js') }}"></script>
	<script src="{{ asset('public/frontEnd/js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>
</html>