<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="theme-color" content="#343a40">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Agenda Clinic - @yield('title')</title>
    {{Html::style('dist/css/bootstrap.min.css')}}
	<!-- {{Html::style('dist/css/bootstrap-theme.min.css')}} -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="">Agenda Clinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Alterna navegação"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link" href="/agendamento">Home</a> </li>
      <li class="nav-item"> <a class="nav-link" href="/agendamento/create">Agendar Consulta</a> </li>
    </ul>
  </div>
</nav>

<div class="container">
	@yield('content')
</div>
 
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- <div class="container">
    <ul class="list-unstyled list-inline text-center py-2">
    	<li>oi</li>
    </ul>
  </div> -->
  <div class="footer-copyright text-center py-3">&copy; {{date('Y')}} Copyright Agenda Clinic
  </div>
</footer>
{{Html::script('dist/js/jquery-3.5.1.min.js')}}
{{Html::script('dist/js/bootstrap.min.js')}}
</body>
</html>
