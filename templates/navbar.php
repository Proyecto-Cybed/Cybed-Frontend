<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand fs-1 fw-bold" href="index.php"><img src="assets/images/logo_big.png" width="80px" alt="Cybed logo">CYBED</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link <?= ($activePage == 'index') ? 'active' : ''; ?>" href="index.php">Inicio</a></li>
				<li class="nav-item"><a class="nav-link <?= ($activePage == 'cve') ? 'active' : ''; ?>" href="cve.php">Vulnerabilidades</a></li>
				<li class="nav-item"><a class="nav-link <?= ($activePage == 'forum') ? 'active' : ''; ?>" href="forum.php">Foro</a></li>
				<li class="nav-item"><a class="nav-link <?= ($activePage == 'contact') ? 'active' : ''; ?>" href="contact.php">Contacto</a></li>
				<?php
				if (isset($_SESSION['usuario'])) {
					echo '<li class="nav-item "><a class="btn btn-primary btn-sm mt-0" href="logout.php"> Cerrar Sesión</a></li>';
				} else {
					echo '<li class="nav-item "><a class="btn btn-primary btn-sm mt-0" href="login.php"> Iniciar Sesión / Inscribirse</a></li>';
				}
				?>

			</ul>
		</div>
	</div>
</nav>
<!-- /Navbar -->