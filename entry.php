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

	<title>CVE - Cybed</title>

	<link rel="shortcut icon" href="assets/images/logo_color.png">

	<link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
	<?php
	require_once('templates/navbar.php')
	?>

	<!-- container -->
	<div class="container">

		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="forum.php">Foro</a></li>
				<li class="breadcrumb-item active">ESTA ENTRADA</li>
			</ol>
		</nav>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-10">
				<div class="entrada">
					<div class="h2" id="titulo"></div>
					<div class="row">
						<div class="col-md-8">
							<div id="contenido"></div>
								<p id="fecha" class="text-muted"></p>
						</div>
						<div class="col-md-4">
							<div id="usuario">
								<p class="h5" id="nombreUsuario"></p>
							</div>
						</div>
					</div>
				</div>

				<div id="mensajes">
					
				</div>
				<div id="comentario">
					<form id="comment" method="post">
						<div class="form-outline">
							<textarea class="form-control"  name="textAreaComentario"  id="textAreaComentario" rows="5"></textarea>
							
						</div>
						<input type="hidden" class="form-control" name="idEntrada" id="idEntrada" aria-describedby="idEntrada" value="<?php echo $_GET['id'];?>">
						<input type="hidden" class="form-control" name="Usuario" id="Usuario" aria-describedby="nombreUsuario" value="<?php echo $_SESSION['usuario'];?>">
					</br>
                        <a class="btn btn-primary" href="javascript:insertComment();" role="button">Comentar</a>
					</form>

				</div>
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-2 sidebar sidebar-right">

				<div class="widget">
					<h4>Vacancies</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="">Lorem ipsum dolor</a><br><span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
						<li><a href="">Totam, libero, quis</a><br><span class="small text-muted">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
						<li><a href="">Enim, sequi dignissimos</a><br><span class="small text-muted">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
						<li><a href="">Suscipit, consequatur, aut</a><br><span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
						<li><a href="">Nam, illo, veritatis</a><br><span class="small text-muted">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->

	<script defer src="assets/js/entry.js"></script>
	<script defer src="assets/js/insertComment.js"></script>
	

	<?php
	require_once('templates/footer.php');
	require_once('templates/includeJsScripts.php');
	?>

</body>

</html>