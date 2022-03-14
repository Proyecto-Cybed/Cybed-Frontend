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

	<title>Foro - Cybed</title>

	<link rel="shortcut icon" href="assets/images/logo_color.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/79f56e797f.js" crossorigin="anonymous"></script>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

	<?php
	require_once('templates/navbar.php');

	if (!empty($_SESSION['usuario'])){

	?>

	<!-- container -->
	<div class="container">

		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item active">Foro</li>
			</ol>
		</nav>

		<div class="row">



			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Crear Entrada</h1>
				</header>
                    <form id="entry" method="post">
                        <div class="mb-3"> 
                          <label for="titulo" class="form-label">Título</label>
                          <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="Titulo" >
                        </div>
                        <div class="mb-3"> 
                          <label for="contenido" class="form-label">Contenido</label>
                          <input type="text" class="form-control" name="contenido" id="contenido" aria-describedby="Contenido">
                        </div>
                        <input type="hidden" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" value="<?php echo $_SESSION['usuario'];?>">
                        <a class="btn btn-primary" href="javascript:insertEntry();" role="button">Crear entrada</a>
                    </form>


				
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem </h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/1.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/2.jpg" alt=""></p>
						<p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->
    <script defer src="assets/js/insertEntry.js"></script>



	<?php    

	} else {
		header("Location:login.php");
	}
	require_once('templates/footer.php');
	require_once('templates/includeJsScripts.php');
	?>
</body>

</html>