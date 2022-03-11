<?php
session_start();
require_once('CRUDUser.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Cybed S.L.">

	<title>Identificación - Cybed</title>

	<link rel="shortcut icon" href="assets/images/logo_color.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

	<?php
	$error = null;
	if (isset($_POST['Enviar'])) {
		login();
	}
	require_once('templates/navbar.php');
	?>

	<!-- container -->
	<div class="container">

		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item active">Iniciar Sesión</li>
			</ol>
		</nav>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Iniciar Sesión</h1>
				</header>

				<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Inicia sesión en tu cuenta</h3>
							<p class="text-center text-muted">Con una cuenta en Cybed podrás acceder al <a href="#">Foro</a>.
								<br />Si no tienes cuenta, crea una en la página de <a href="signup.php">Registro</a>.
							</p>
							<hr>

							<?php
							if (isset($_SESSION['usuario'])) {
								header("Location:forum.php");
								exit;
							} else {
								if ($error) {
									echo "<p style='text-align: center; color: red'>" . $error . "</p>";
								}
							?>
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									<div class="top-margin">
										<label>Usuario <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="usuario">
									</div>
									<div class="top-margin">
										<label>Contraseña <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="password">
									</div>

									<hr>

									<div class="row">

										<div class="col-lg-8">
											<b><a href="">Olvidé mi contraseña</a></b>
										</div>
										<div class="col-lg-4 text-right">
											<input type="submit" name="Enviar">
										</div>
									</div>
								</form>
							<?php
							}
							?>
						</div>
					</div>

				</div>

			</article>
			<!-- /Article -->

		</div>
	</div> <!-- /container -->

	<?php
	require_once('templates/footer.php');
	require_once('templates/includeJsScripts.php');
	?>


</body>

</html>