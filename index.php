<!DOCTYPE html>
<html lang="en">
	<?php require dirname(__FILE__) . "/masters/master_header.php"; ?>
	<body>
            <?php require dirname(__FILE__) . "/masters/master_navbar.php"; ?>
		

		<!-- Main content starts -->
		<div class="content">
			<!-- Sidebar -->
			<div class="sidebar navbar navbar-inverse navbar-fixed-top bs-docs-nav"> 
                            
				<div class="sidebar-dropdown"><a href="#" style="background-color:inherit; border-bottom:none; ">Navigation
                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse" style="margin-top:0px;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button></a></div>
				<div class="sidebar-inner">
					<!--- Sidebar navigation -->
					<!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
					<ul class="navi">
						<!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

						<li class="nred current"><a href="index.php"><i class="fa fa-desktop"></i> Inicio</a></li>
                                                <li class="nlightblue"><a href="crear.php"><i class="fa fa-envelope-o"></i> Crear denuncia</a></li>
						<li class="ngreen"><a href="consultar.php"><i class="fa fa-search"></i> Consultar estado</a></li>
						<li class="norange"><a href="https://dtt-ecys.org/"><i class="fa fa-external-link "></i>Sistema DTT</a></li>
						<li class="nviolet"><a href="https://portal.ingenieria.usac.edu.gt/"><i class="fa fa-external-link "></i>FIUSAC</a></li>
						<li class="nblue"><a href="acerca.php"><i class="fa fa-question-circle-o"></i>Acerca de</a></li>
					</ul>
					<!--/ Sidebar navigation -->

					<!-- Date -->
					<div class="sidebar-widget">
						<div id="todaydate"></div>
					</div>
				</div>
			</div>
			<!-- Sidebar ends -->

			<!-- Main bar -->
			<div class="mainbar">
				<!-- Encabezado de página -->
				<div class="page-head">
					<!-- Encabezado -->
					<h2 class="pull-left">Bienvenido al Sistema de Denuncias de Estudiantes
					  <!-- meta de la pagina -->
					  <span class="page-meta">¡Crea tus denuncias y promueve la mejora contiua!</span>
					</h2>
					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
					  <a href="index.php"><i class="fa fa-home"></i> Inicio</a> 
					</div>
					<div class="clearfix"></div>
				</div><!--/ Page heading ends -->

				<!-- Matter -->
				<div class="matter">
					<div class="container-fluid">
					  <div class="row-fluid">
						<!-- Content -->
                                                <div>
                                                    <img src="img/inicio.jpg"  align="middle" class="img-responsive" alt="Cinque Terre">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                    <br/>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-lg-1">
                                                    <br/>
                                                </div>
                                                <div class="col-md-10 col-lg-10 col-sm-10">
                                                    <p style="font-size:medium;">
                                                        La metra principal del sistema de denucias hacia los catedráticos es crear un medio por el cual la Escuela de Ciencias y Sistemas de la Facultad de Ingeniería de la Universidad de San Carlos pueda discutir temas de interés común que generen cambios que sean de beneficio para la sociedad en general. Incentivar las denuncias con el objetivo de ser cada vez una mejor sociedad.
                                                    </p>
                                                </div>

					  </div>
					</div>
				</div><!--/ Matter ends -->
			</div><!--/ Mainbar ends -->	    	
			<div class="clearfix"></div>
		</div><!--/ Content ends -->

		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery UI -->
		<script src="js/jquery-ui.min.js"></script> 
		<!-- jQuery Gritter -->
		<!-- <script src="js/jquery.gritter.min.js"></script> -->
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>



