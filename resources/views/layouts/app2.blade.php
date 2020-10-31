<html>
	<head>
		<title>Agendamento - @yield('title')</title>
		{{Html::style('dist/css/bootstrap.min.css')}}
		<!-- {{Html::style('dist/css/bootstrap-theme.min.css')}} -->
	</head>
	<body>
		<div class="container">
			@yield('content')
		</div>

		{{Html::script('dist/js/jquery-3.5.1.min.js')}}
		{{Html::script('dist/js/bootstrap.min.js')}}
	</body>
</html>