<?php

function nav(){
?>
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/proteger.png" width="10%" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="vulnerabilidades.php">Vulnerabilidades</a></li>
					<li><a href="foro.php">Foro</a></li>
					<li><a class="btn" href="IniciarSesion.php"> Iniciar Sesión / Inscribirse</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->


<?php
}


function footer (){

?>
    <footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contacto</h3>
                    <div class="widget-body">
                        <p>+34 xxxxxxxxx<br>
                            <a href="mailto:#">cybed@cybed.com</a><br>
                            <br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda perspiciatis maxime reiciendis tempora perferendis illum est veritatis, quam aliquam minus et quis consequuntur aperiam eum dolores voluptas provident voluptates sint.
                            <5></5>
                        </p>	
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Sígueme</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>	
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <h3 class="widget-title">Cybed</h3>
                    <div class="widget-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                        <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="index.php">Inicio</a> | 
                            <a href="vulnerabilidades.php">Vulnerabilidades</a> |
                            <a href="foro.php">Foro</a> |
                            <a href="contact.php">Contacto</a> |
                            <b><a href="registro.ph">Inscribirse</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2022, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>	
<?php
}

?>