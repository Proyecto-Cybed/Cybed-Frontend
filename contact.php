<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Cybed S.L.">

	<title>Contacto - Cybed</title>

	<link rel="shortcut icon" href="assets/images/logo_color.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
	<!-- Fixed navbar -->
	<?php
	require_once('templates/navbar.php')
	?>


	<!-- container -->
	<div class="container">

		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item active">Contacto</li>
			</ol>
		</nav>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contáctanos</h1>
				</header>

				<p>
					Nos encantaría saber de usted. ¿Interesado en trabajar con nosotros? Rellene el siguiente formulario con información sobre su proyecto y nos pondremos en contacto lo antes posible.</p>
				<br>
				<form>
					<div class="row">
						<div class="col-sm-4">
							<input class="form-control" type="text" placeholder="Nombre">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="text" placeholder="Email">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="text" placeholder="Teléfono">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<textarea placeholder="Escribe el mensaje aquí..." class="form-control" rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<label class="checkbox"><input type="checkbox"> Regístrese para recibir el boletín</label>
						</div>
						<div class="col-sm-6 text-right">
							<input class="btn btn-action" type="submit" value="Enviar mensaje">
						</div>
					</div>
				</form>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Dirección</h4>
					<address>
						41400 IES Luis Vélez de Guevara, Écija, Sevilla, España
					</address>
					<h4>Teléfono:</h4>
					<address>
						(+34) 60000000
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->

	<section class="container-full top-space">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6326.240345149131!2d-5.08388735215726!3d37.552232404844034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd12caea8e08f2bb%3A0x4dd34539e2aa7b93!2sI.E.S.%20Luis%20V%C3%A9lez%20de%20Guevara!5e0!3m2!1ses!2ses!4v1646903757483!5m2!1ses!2ses" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>
	<?php
	require_once('templates/footer.php');
	require_once('templates/includeJsScripts.php');
	?>

</body>

</html>