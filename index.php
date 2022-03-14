<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Cybed S.L.">

    <title>Inicio - Cybed</title>

    <link rel="shortcut icon" href="assets/images/logo_color.png">

    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/79f56e797f.js" crossorigin="anonymous"></script>

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<?php
require_once('templates/navbar.php')
?>


<!-- /.navbar -->

<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">
            <h1 class="lead">CYBED</h1>
            
        </div>
    </div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="container text-center">
    <br> <br>
    <h2 class="thin">Es una aplicación web que se encarga de documentar las vulnerabilidades mundiales.</h2>
    <p class="text-muted">
        Desarrollada por:
        <ul class="list-unstyled text-muted ">
            <li><a href="https://github.com/rafaelbv95" class="git">Rafael Bermudo Villaécija</a></li>
            <li><a href="https://github.com/JuanmiCLucena" class="git">Juan Miguel Costa Lucena</a></li>
            <li><a href="https://github.com/Deg42" class="git">Juan Antonio González Rivera</a></li>
        </ul>
    </p>
</div>
<!-- /Intro-->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
    <div class="container">

        <h3 class="text-center thin">Tecnologías</h3>

        <div class="row">
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fab fa-bootstrap"></i>Bootstrap v5.0</h4>
                </div>
                <div class="h-body text-center">
                    <p>Bootstrap es un framework front-end utilizado para desarrollar aplicaciones web y sitios mobile first, o sea, con un layout que se adapta a la pantalla del dispositivo utilizado por el usuario</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fas fa-server"></i>API CVE</h4>
                </div>
                <div class="h-body text-center">
                    <p>Es una lista de información registrada sobre vulnerabilidades 
                        de seguridad conocidas, en la que cada referencia tiene un número de identificación CVE-ID
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fab fa-creative-commons"></i>Creative Commons</h4>
                </div>
                <div class="h-body text-center">
                    <p>Progressus es una plantilla empresarial gratuita, 
                        receptiva y atractiva basada en el marco HTML/CSS de Bootstrap,
                        que tiene la licencia creative commons 3.0 
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fab fa-js"></i>AJAX</h4>
                </div>
                <div class="h-body text-center">
                    <p>Es una técnica de desarrollo web que, al combinar una serie de tecnologías independientes, nos permite intercambiar información entre el servidor y el cliente (un navegador web) de forma asíncrona
                    </p>
                </div>
            </div>
        </div>
        <!-- /row  -->

    </div>
</div>
<!-- /Highlights -->

<!-- Social links. @TODO: replace by link/instructions in template -->
<section id="social">
    <div class="container">
        <div class="wrapper clearfix">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
            </div>
            <!-- AddThis Button END -->
        </div>
    </div>
</section>
<!-- /social links -->


<?php
	require_once('templates/footer.php');
	require_once('templates/includeJsScripts.php');
	?>

</body>

</html>