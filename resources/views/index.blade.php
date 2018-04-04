@extends('layouts.master')

@section('content')
    <div id="index-banner" class="parallax-container valign-wrapper">
		<div class="container center">
			<h1 class="header teal-text text-lighten-2">Segasi</h1>
			<div class="row">
				<h3 class="header col s12 light white-text">Una compañía dedicada al desarrollo de Aplicaciones</h3>
			</div>
		</div>
        <div class="parallax"><img src="img/compute-min.jpg" alt="Unsplashed background img 1"></div>
    </div>

	<!--   Icon Section   -->
	<div class="section container">
		<div class="row">
			<div class="col s12 m4">
				<h2 class="center brown-text"><i class="material-icons">android</i></h2>
				<h5 class="center">Aplicaciones Móviles</h5>
				<p class="center">Desarrollamos aplicaciones con las herramientas más modernas, adaptadas a las necesidades de cada cliente.</p>
			</div>
			<div class="col s12 m4">
				<h2 class="center brown-text"><i class="material-icons">phonelink</i></h2>
				<h5 class="center">Sitios Web</h5>
				<p class="center">Diseñamos su sitio web a medida, cercano y amigable para su fácil autoadministración.</p>
			</div>
			<div class="col s12 m4">
				<h2 class="center brown-text"><i class="material-icons">shopping_cart</i></h2>
				<h5 class="center">Tiendas Virtuales</h5>
				<p class="center">Entregamos soluciones personalizadas, mediante sistemas Web de acuerdo a su modelo de negocio.</p>
			</div>
		</div>
		<br><h5 class="center light">¡ Lo invitamos a descubrir los beneficios de la administración centralizada !</h5><br>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="container center">
			<h4 class="header light black-text">Somos jóvenes profesionales creativos, innovadores y estamos enfocados en la satisfacción de nuestros clientes</h4>
		</div>
		<div class="parallax"><img src="img/background2-min.jpg" alt="Unsplashed background img 2"></div>
	</div>

	<form class="container section center" method="POST" action="/contact">
		{{ csrf_field() }}
		<h4>Contáctanos</h4>
		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix">face</i>
				<input name="contact" id="contact" type="text" required>
				<label for="contact">Nombre</label>
			</div>
			<div class="input-field col s12 l6">
				<i class="material-icons prefix">phone</i>
				<input name="phone" id="phone" type="tel" class="validate" required>
				<label for="phone">Teléfono</label>
			</div>
			<div class="input-field col s12 l6">
				<i class="material-icons prefix">email</i>
				<input name="email" id="email" type="email" class="validate" required>
				<label for="email" data-error="Verifique la dirección de correo electrónico" data-success="Correo Válido">Correo</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">mode_edit</i>
				<textarea name="message" id="message" class="materialize-textarea" required></textarea>
				<label for="message">Mensaje</label>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Enviar
				<i class="material-icons right">send</i>
			</button>
		</div>
	</form>

	<div id="map"></div>
	<div class="fixed-action-btn">
		<a id="menu" class="btn-floating btn-large teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Ir al Portafolio" href="/portfolio">
			<i class="large material-icons">work</i>
		</a>
	</div>
	<!-- Tap Target Structure -->
	<div class="tap-target" data-target="menu">
		<div class="tap-target-content">
			<h5>Portafolio</h5>
			<p>Haz click en el maletín para ver nuestros trabajos.</p>
		</div>
	</div>
@endsection