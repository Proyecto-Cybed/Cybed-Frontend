<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>Contact us - Progressus Bootstrap template</title>

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
	<!-- Fixed navbar -->
	<?php
	require_once('templates/navbar.php')
	?>


	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">About</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>

				<p>
					We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
				</p>
				<br>
				<form>
					<div class="row">
						<div class="col-sm-4">
							<input class="form-control" type="text" placeholder="Name">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="text" placeholder="Email">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="text" placeholder="Phone">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<textarea placeholder="Type your message here..." class="form-control" rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
						</div>
						<div class="col-sm-6 text-right">
							<input class="btn btn-action" type="submit" value="Send message">
						</div>
					</div>
				</form>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						2002 Holcombe Boulevard, Houston, TX 77030, USA
					</address>
					<h4>Phone:</h4>
					<address>
						(713) 791-1414
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->

	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	<?php
	require_once('templates/footer.php');
	require_once('templates/includeJsScripts.php');
	?>	

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
	<script src="assets/js/google-map.js"></script>


</body>

</html>