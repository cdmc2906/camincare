<?php
session_start();
if(!isset($_SESSION['loggedIn'])) {echo '<script language="javascript" >
		location.href="descargas.php";
		</script>';//echo'<script language="javascript">location.href="descargas.php;</script>"';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  	<title>CAMINCARE | Descargas</title>
  	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css"/>
	<link rel="stylesheet" type="text/css" href="css/jqueryFileTree.css">
    
    <!--<script src="js/jquery-1.7.1.min.js"></script>-->
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
	<script src="js/jqueryFileTree.js"></script>

    <!-- jQuery and jQuery UI (REQUIRED) -->
	
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

    <!-- elFinder CSS (REQUIRED) -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">

	<!-- elFinder JS (REQUIRED) -->
	<script type="text/javascript" src="js/elfinder.min.js"></script>

	<!-- elFinder translation (OPTIONAL) -->
	<script type="text/javascript" src="js/i18n/elfinder.es.js"></script>

	<!-- elFinder initialization (REQUIRED) -->
	<script type="text/javascript" charset="utf-8">
			$().ready(function() {
				var elf = $('#elfinder').elfinder({
					url : 'php/connector_unlocked.php' , // connector URL (REQUIRED)
					lang: 'es'             // language (OPTIONAL)
				}).elfinder('instance');
			});
		</script>
</head>
<body>
<div class="main-bg">
    <!-- Header -->
    <header>
    	<div class="inner">
            <h1 class="logo"><a href="index.html"></a></h1>
          <nav>
                <ul class="sf-menu">
                    <li><a href="#">INICIO</a></li>
                    <li><a href="#">EMPRESA</a></li>
                    <li><a href="#">SERVICIOS</a>
                        <ul>
                       	  <li><a href="serviciosAmbientales.html">Ambientales</a></li>
                            <li><a href="serviciosIndustriales.html">Industriales</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="descargas.php">DESCARGAS</a></li>
                    <li><a href="#">CONTACTO</a></li>
					<li><a href="logout.php">SALIR</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <!-- Content -->
        <div class="container_24">
            <div class="wrapper">
            	<div class="grid_24 content-bg">
                	<div class="wrapper">
                       <!-- <a href="loginDescarga.php">login</a>
                                                <a href="elfinder.html">login</a>-->
                                                <div id="elfinder"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Footer -->
    <footer>
    	<div class="container_24">
        	<div class="wrapper">
            	<div class="grid_24 footer-bg">
        			<div class="hr-border-2"></div>
                    <div class="wrapper">
                        <div class="grid_6 suffix_1 prefix_1 alpha">
                        	<div class="copyright">
                            	
                                <strong class="footer-logo">Consultores Ambientales Industriales Castro Rengifo</strong>
<div>CAMINCARE &copy; 2013 </div>
                            </div>
                        </div>
                        <div class="grid_4">
                       	<h5 class="heading-1">Enlaces</h5>
                           <ul class="footer-list">
                            <!--	<li><a href="#">Enero 2013</a></li>
                                <li><a href="#">Febrero 2013</a></li>
                                <li><a href="#">Marzo 2013</a></li>
                                <li><a href="#">Abril 2013</a></li>-->
                                <li><a href="#">INICIO</a></li>
                                <li><a href="#">EMPRESA</a></li>
                                <li><a href="#">SERVICIOS AMBIENTALES</a></li>
                                <li><a href="#">SERVICIOS INDUSTRIALES</a></li>
                                <li><a href="#">DESCARGAS</a></li>
			                    <li><a href="#">CONTACTO</a></li> </ul>
                          </ul>
                        </div>
                        <div class="grid_9">
                        	<h5 class="heading-1">Sitios de Inter&eacute;s</h5>
                            <ul class="footer-list">
                            	<li><a href="http://www.ambiente.gob.ec/">Ministerio del Ambiente</a></li>
                                <li><a href="http://www.epa.gov/espanol/‎">EPA</a></li>
                                <li><a href="http://www.recursosnaturales.gob.ec/‎">Ministerio de Recursos Naturales No Renovables</a></li>
                                <li><a href="http://www.riesgos.gob.ec/tag/cotopaxi/‎">Secretar&iacute;a Nacional de Gesti&oacute;n de Riesgos</a></li>
                            </ul>
                        </div>
                            <div class="grid_2 suffix_1 omega">
                            <ul class="social-list">
                                <li><a href="https://www.facebook.com/camincare.consultoraambientaleindustrial" target="_blank"><img src="images/social-icon-2.png" alt=""></a></li>
                                <li><a href="https://login.secureserver.net/?app=wbe" target="_blank"><img src="images/iconomail.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>