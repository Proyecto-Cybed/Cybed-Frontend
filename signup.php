<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Cybed - Registrarse</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

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

    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Registration</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registro</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Registrar una nueva cuenta</h3>
                            <p class="text-center text-muted">Si por el contrario ya tienen una cuenta, acuda a <a href="login.php">Iniciar Sesión</a></p>
                            <hr>

                            <form>
                                <div class="top-margin">
                                    <label>Nombre de usuario <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="usuario">
                                </div>
                                <div class="top-margin">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                                <div class="top-margin">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" id="apellido">
                                </div>
                                <div class="top-margin">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label>Contraseña <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="contrasenya1">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirmar Contraseña <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="contrasenya2">
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            He leído los términos y condiciones <a href="page_terms.html">Términos y condiciones</a>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <a class="btn btn-primary" href="javascript:insertarUsuario();" role="button">Registrarse</a>
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
<script src="assets/js/loadCve.js"></script>
</html>