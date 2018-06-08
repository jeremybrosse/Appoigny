@extends('layouts.mainlayout')

@section('title', "Accueil" )

@section('contenu')

<main class="container-fluid">
	{{-- <img src="assets/img/forest.png" class="forest d-none d-md-block">
	<img src="assets/img/hills.png" class="build d-none d-md-block"> --}}
	<section class="container">
		<div class="row my-5">				
			<div class="col-lg-6 my-3">
				<div class="card">
				<img class="card-img" src="{{ asset('assets/img/accueil.png') }}">
				</div>
			</div>
			<div class="col-lg-6 my-3">
				
				<p>Le futur Parc d’activités économiques situé en bordure de
					l’autoroute A6, offrira près de 34 hectares de superficie
					commercialisable, pour mettre en vitrine le dynamisme du
				territoire.</p>
				<p>Au pied de l’échangeur Nord de l’Autoroute A6, à Appoigny, le
					parc d’activités économiques s’étend sur 50 hectares, divisés en
				deux secteurs.</p>
				<p>Au Nord, 40 hectares, bénéficieront d’une très belle façade sur
					l’Autoroute du Soleil, atout indéniable pour porter l’image et la
				notoriété des entreprises et du site.</p>
				<p>Au Sud, environ 10 hectares, longeront la RN6, derrière le parc
				hôtelier/restauration.</p>
				
			</div>
		</div>
	</section>
</main>

@endsection