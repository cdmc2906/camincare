<?php
//assign a variable so we don't have to keep referring to the array.
$rm = $_SERVER['REQUEST_METHOD'];
$stat_message = "Hemos recibido tu mensaje. Gracias!";
$posted = false;
$success = false;

if ($rm == 'POST') {
	//assign some variables so we don't have to keep referring to the array.
	$posted = true;
	$name = htmlspecialchars($_POST['name']);
//	$designation = htmlspecialchars($_POST['designation']);
	$company = htmlspecialchars($_POST['company']);
	$contact = htmlspecialchars($_POST['contact']);
	$email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

	//check if all items were submitted.
	if( $name  != "" &&
//		$designation != "" && 
//		$company != "" &&
		$contact != "" &&
		$email != ""&&
		$mensaje!=""){

		//check if email is valid
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$to = 'info@camincare.com.ec';
			$subject = 'MENSAJE DESDE PAGINA WEB ENVIADO POR'.$name;

$mail_message = <<<EOT
El siguiente es un mensaje enviado desde la p&aacute;gina web camincare.com.ec.

Remitente : $name
Empresa : $company
Telefono : $contact
Correo electrónico : $email
Mensaje: $mensaje
EOT;

			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: nonj@dnb.com.ph' . "\r\n" .
			    'Reply-To: christian.araujo@outlook.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

				if(mail($to, $subject, $mail_message)){
					$stat_message = 'Gracias por ponerse en contacto con nosotros.';
					$success = true;
				} else{
					$stat_message = 'Se gener&oacute; un error al enviar el mensaje, si el problema continua intente comunicarse mediante la informaci&oacute;n de contacto mostrada en esta p&aacute;gina.';
				}

		} else{
			$stat_message = "El corre electr&oacute;nico ingresado es incorrecto.";
		}

	} else{
		$stat_message = "Debe llenar todos los campos obligatorios.";
	}
}
 ?>
<style type="text/css">
<!--	#learn-more{ width: 300px;}
	<!--#learn-more label{width: 100px; font-size: 0.8em; display: inline-block;}	#learn-more input[type=text]{width: 180px; margin: 5px 0;}-->
<!--	#form-status{ padding: 10px; display: none; -webkit-border-radius: 10px;
border-radius: 10px;}
	#form-status.display{ display: block;}
	#form-status.green{ 
	margin-left:75px;
		margin-right:15px;
		color: #044c29;
		background-color:#96ed89;
		border: 1px solid #044c29;
	}
	#form-status.red{ 
	margin-left:75px;
	margin-bottom:10px;
	margin-right:15px;
			color: #bf1616;
		background-color:#ff837e;
		border: 1px solid #bf1616;
	}
	#form-status{
	    -webkit-transition: all 2s ease;
		-moz-transition: all 2s ease;
		-ms-transition: all 2s ease;
		-o-transition: all 2s ease;
		transition: all 2s ease;
	}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  	<title>CAMINCARE | Contacto</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">	
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<div class="main-bg">
    <!-- Header -->
    <header>
    	<div class="inner">
            <h1 class="logo"><a href="index.html"></a></h1>
            <nav>
                <ul class="sf-menu">
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="empresa.html">EMPRESA</a></li>
                    <li><a href="#">SERVICIOS</a>
                        <ul>
                       	  <li><a href="serviciosAmbientales.html">Ambientales</a></li>
                            <li><a href="serviciosIndustriales.html">Industriales</a></li>
                        </ul>
                    </li>
                    <li><a href="descargas.php">DESCARGAS</a></li>
                    <li class="current"><a href="contacto.php">CONTACTO</a></li>
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
                    	<article class="grid_6 suffix_1 prefix_1 alpha">
                        	<h2>Informaci&oacute;n</h2>
                            <p class="p1">
                            	<strong class="str-2">
                                	Camincare
                                </strong>
                                <dl class="adress">
                                	<dt>Latacunga - Ecuador</dt>
                                	<dd><span>Tel&eacute;fono:</span><b>032-230-206 </b></dd> 
                                    <dd><span>Celular:</span><b>0984250012</b></dd>
									<dd><span>Celular:</span><b>0984003438</b></dd>
                                    <dd><span>Correo:</span><a href="#">info@camincare.com.ec</a></dd>
                                </dl>
                                
                            </p>
                        </article>
                        <article class="grid_15 suffix_1 omega">
                        	<h2>Formulario de contacto</h2>
                            <form action="" method="post" accept-charset="utf-8" id="contact-form">
                            <?php if ($posted): ?>
                            <div id="form-status" class="red"><?php echo $stat_message; ?></div>
                            <?php endif; ?>
<!--                            <form id="contact-form" method="post">-->
                             <!-- <fieldset>
                                <label class="name">
                                	<span>Nombre:</span>
                                    <input type="text">
                                </label>
                                <label class="email">
                                  <span>Email:</span>
                                  <input type="email">
                                </label>
                                <label class="message">
                                  <span>Mensaje:</span>	
                                  <textarea></textarea>
                                </label>
                                <div class="btns">
                                    <a class="button" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
                                    <a class="button" onClick="document.getElementById('contact-form').submit()">Enviar</a> 
                                </div>
                              </fieldset>                                                    
                            </form>-->
                            <fieldset>
								<label class="name" for="name">
									<span> * Nombre:</span>
									<input type="text" name="name" id="name" <?php if($posted && $success == false){echo "value= \"$name\"";} ?> >
								</label>
								<!--<label class="name" for="designation">
									<span>Cargo</span>
									<input type="text" name="designation" id="designation" 
									<?php //if($posted && $success == false){ echo "value= \"$designation\"";} ?> >
								</label>-->
								<label class="name" for="company">
									<span>Empresa:</span>
									<input type="text" name="company" id="company" <?php if($posted && $success == false){ echo "value= \"$company\"";} ?> >
								</label>
								<label class="name" for="contact">
                                	<span>* Telefono:</span>
                                	<input type="text" name="contact" id="contact" <?php if($posted && $success == false){ echo "value= \"$contact\"";} ?> >							</label>
						
								<label class="email" for="email">
                                <span>* Correo electr&oacute;nico</span>
									<input type="text" name="email" id="email"
									<?php if($posted && $success == false){
										echo "value= \"$email\"";
									} ?> >
								</label>
                                <label class="name" for="mensaje">
									<span>* Mensaje:</span>
                                    <textarea name="mensaje" id="mensaje" <?php if($posted && $success == false){ echo "value= \"$mensaje\"";} ?> ></textarea>
								</label>
								 <div class="btns">
                                 <span>* Campos Obligatorios</span>
                                                             <input type="hidden" name="secret" id="secret">
                                    <a class="button" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
                                    <a class="button" onClick="document.getElementById('contact-form').submit()">Enviar</a> 
                                </div>
							<fieldset>

                            <!--<input type="submit" name="submit" id="submit" value="Enviar">
<input type="reset" name="submit" id="submit" value="Cancelar">-->
							</form>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->

<script type="text/javascript" charset="utf-8" >

/*(function( $, window, document, undefined ) {

	$('#form-status').addClass('display');	
	<?php if ($success): ?>
	$('#form-status').removeClass('red').addClass('green');	
	<?php endif; ?>

})( jQuery, window, document );*/

$(document).ready(function(){
		form = $('#form-status');

		<?php if ($success): ?>
		form.removeClass('red').addClass('green');	
		<?php endif; ?>

		form.fadeIn(200);	
	});	


</script>
                        </article>
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
                               <!-- <div><a href="contacto - copia (2).php">contacto</a></div>
                                <div><a href="contacto - copia.php">contacto</a></div>-->
                                <!--<div><a href="listar.php">LISTAR</a></div>
                               <div class="fb-activity" data-site="www.camincare.com.ec" data-width="300" data-height="300" data-header="true" data-recommendations="false"></div>-->
                            </div>
                        </div>
                        <div class="grid_4">
                       	<h5 class="heading-1">Enlaces</h5>
                            <ul class="footer-list">
                            <!--	<li><a href="#">Enero 2013</a></li>
                                <li><a href="#">Febrero 2013</a></li>
                                <li><a href="#">Marzo 2013</a></li>
                                <li><a href="#">Abril 2013</a></li>-->
                                <li><a href="index.html">INICIO</a></li>
                                <li><a href="empresa.html">EMPRESA</a></li>
                                <li><a href="serviciosAmbientales.html">SERVICIOS AMBIENTALES</a></li>
                                <li><a href="serviciosIndustriales.html">SERVICIOS INDUSTRIALES</a></li>
                                <li><a href="descargas.php">DESCARGAS</a></li>
			                    <li><a href="contacto.php">CONTACTO</a></li> </ul>
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