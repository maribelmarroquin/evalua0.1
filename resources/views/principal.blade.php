<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<title> EvaluaMed - @yield('titulo') </title>

</head>
<body>
	<div class="col-md-8 " style="background: transparent linear-gradient(to right, #069 30%, #FFF 100%); height: 30px;"></div><div class="col-md-4"><h1 style="color: #036; background-color: #FFF; margin: 0px 0px 20px 0px; padding: 0px; border: 0px none;">Universidad Veracruzana</h1></div>

	@yield('contenido')

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>