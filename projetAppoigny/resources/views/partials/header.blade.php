<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scal=1, shrink-to-fit=no">
	<title>Parc activité d'Appoigny</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
</head>
<body>
	<header class="container-fluid">
		<nav class="navbar navbar-expand-md navbar-light fixed-top navmenu">
			<a class="navbar-brand" href="{{ route('accueil') }}"><img class="imgL" src="{{ asset('assets/img/navbar/logo.png') }}"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active px-md-5">
						<a class="nav-link" href="{{ route('projet')}}"><img class="img-fluid " src="{{ asset('assets/img/navbar/logoprojet.png') }}"><small class="d-md-block">Projet</small></a>
					</li>
					<li class="nav-item active px-md-5">
						<a class="nav-link" href="{{ route('chantier')}}"><img class="img-fluid " src="{{ asset('assets/img/navbar/logochantier.png') }}"><small class="d-md-block">Chantier</small></a>
					</li>
					<li class="nav-item active px-md-5">
						<a class="nav-link" href="#"><img class="img-fluid " src="{{ asset('assets/img/navbar/media.png') }}"><small class="d-md-block">Photos/Vidéos</small></a>
					</li>
					<li class="nav-item active px-md-5">
						<a class="nav-link" href="#"><img class="img-fluid " src="{{ asset('assets/img/navbar/actualite.png') }}"><small class="d-md-block">Actualités</small></a>
					</li>
					<li class="nav-item active px-md-5">
						<a class="nav-link" href="#"><img class="img-fluid " src="{{ asset('assets/img/navbar/contact.png') }}"><small class="d-md-block">Contact</small></a>
					</li>
				</ul>
			</div>
		</nav>
	<section class="row">
		<div class="col-md-12 px-0 mt-5">
			<img src="{{ asset('assets/img/chantier.jpg') }}" class=" imgB w-100">
		</div>
	</section>
</header>