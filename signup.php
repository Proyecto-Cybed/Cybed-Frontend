<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Cybed S.L.">

    <title>Registro - Cybed</title>

    <link rel="shortcut icon" href="assets/images/logo_color.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
				<li class="breadcrumb-item active">Registrarse</li>
			</ol>
		</nav>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registro</h1>
                </header>
                <div id="usuarioInsertado">

                </div>

                <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Registrar una nueva cuenta</h3>
                            <p class="text-center text-muted">Si por el contrario ya tienen una cuenta, acuda a <a href="login.php">Iniciar Sesión</a></p>
                            <hr>

                            <form role="form" id="register-form"> 

                            <div class="form-body">
                                <div class="form-group top-margin">
                                        <label for="validacionNombreUsuario" class="form-label">Nombre de usuario <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="usuario" name="usuario">
                                        <span class="help-block" id="error"></span>
                                </div>
                                <div class="form-group top-margin">
                                    <label for="validacionNombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                    <span class="help-block" id="error"></span>
                                </div>
                                <div class="form-group top-margin">
                                    <label>Apellidos <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos"> 
                                    <span class="help-block" id="error"></span>
                                </div>
                                <div class="form-group top-margin">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" id="email" name="email">
                                    <span class="help-block" id="error"></span>
                                </div>
                                <div class="form-group row top-margin">
                                    <div class="col-sm-6">
                                        <label>Contraseña <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="contrasenya1" name="contrasenya1">
                                        <span class="help-block" id="error"></span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Repetir Contraseña <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="contrasenya2" name="contrasenya2">
                                        <span class="help-block" id="error"></span>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row">
                                        <label class="checkbox">
                                            <input type="checkbox" name="check">
                                            He leído los términos y condiciones <a href="page_terms.html">Términos y condiciones</a>
                                        </label>
                                        <span class="help-block" id="error"></span>
                                </div>

                            </div> 
                            <div class="form-footer">
                                <div class="col-lg-4 offset-lg-9 text-right mt-3">  
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                </div>
                            </div>
 
                            </form>
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
<script src="assets/js/users.js"></script>
</html>