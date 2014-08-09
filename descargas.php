<?php
session_start();
if (isset($_POST['login']) and $_POST['login'] == 'login')
    {
            include 'db.php';

        $email = mysqli_real_escape_string($link, $_POST['usremail']);
        $password = mysqli_real_escape_string($link, $_POST['usrpass']);
        $password = md5($password . 'd64kd87q');

        $sql = "select count(*) from tblusers where email='$email' and password='$password'";
        $result = mysqli_query($link, $sql);
        if (!$result)
            {
                echo 'Error Saving Data. ';
                exit();
            }
            $row = mysqli_fetch_array($result);

            if ($row[0] > 0)
                {
                    $_SESSION['loggedIn'] = $email;
                    header ('Location: descargasa.php');
                    exit();
                }
                else{
                    $msg = 'Usuario y contraseña incorrectos.';
                    echo '<script language="javascript" >
                               location.href="descargas.php";
                          </script>';
                      }
                  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CAMINCARE | Descargas</title>
	<meta http-equiv="Content-Type"	content="text/html; charset=UTF-8" />
    <meta charset="utf-8">    

	
    <link rel="stylesheet" type="text/css" href="jqueryFileTree.css" media="screen" />    
	<link rel="stylesheet" type="text/css" href="css/style.css">    
    <link rel="stylesheet" type="text/css" href="css/slide.css"/>

	<script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.validate.min.js" ></script>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.easing.js" type="text/javascript"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>    
    <script src="js/jqueryFileTree.js" type="text/javascript"></script>
      
    
    <style type="text/css">
        .example {
            float: left;
            margin: 15px;
        }
        
        .demo {
            width: 500px;
            height: 200px;
            border-top: solid 1px #BBB;
            border-left: solid 1px #BBB;
            border-bottom: solid 1px #FFF;
            border-right: solid 1px #FFF;
            background: #FFF;
            overflow: scroll;
            padding: 5px;
        }
    </style>
    <script type="text/javascript">

    $(document).ready( function() {
    
        $('#fileTreeDemo_1').fileTree({ 
            root: '/archivos', script: 'connectors/jqueryFileTree.php' }, function(file)
            { //document.write("<a href="+file+">"+file+"</a>");
            });  

        $('#login').validate(
        {
            rules: {
                usrpass: {required: true},
                usremail: {required: true,email: true}
                   },
            messages: {
                usrpass: {required: 'Debe ingresar la contraseña.'},
                usremail: {
                    required: 'Debe ingresar el usuario.',
                    email : 'Usuario incorrecto.'
                          }
                       }
        }
        );
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
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="empresa.html">EMPRESA</a></li>
                    <li><a href="#">SERVICIOS</a>
                        <ul>
                       	  <li><a href="serviciosAmbientales.html">Ambientales</a></li>
                            <li><a href="serviciosIndustriales.html">Industriales</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="descargas.php">DESCARGAS</a></li>
                    <li><a href="contacto.php">CONTACTO</a></li>
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
                       <article class="grid_14 suffix_1 prefix_1 alpha">
                            <div class="wrapper p2 hr-border-1">
                                <dl class="extra-wrap def-list-1">
                                  <dt>
                                    DOCUMENTOS
                                  </dt>
                                   <dd class="pad-left">
                                    Ponemos a su disposición documentos que pueden ser de su interés. Para descargar un archivo, click derecho y seleccione la opci&oacute;n Guardar enlace como.
                                    </dd>
                                    <br/>
                                    <dd class="pd-left">
                                        <div id="fileTreeDemo_1" class="demo"></div>
                                    </dd>
                              </dl>
                          </div>
                           
                        </article>
					    <article class="grid_7 suffix_1 omega">
                            <div id="DivLogin">
                                <form action="" id="login" method="POST">
                                    <table align="center">
                                        <tr>
                                            <td colspan="2">
                                                <div ><p align="center">Ingrese sus credenciales</p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <tr>
                                                <b><td id="lblEmail">Email:</td></b>
                                                <td><input type="text" id="usremail" name="usremail" /></td>
                                            </tr>
                                            <tr>
                                                <b> <td id="lblPass" >Contrase&ntildea: </td></b>
                                                <td><input type="password" id="usrpass" name="usrpass" /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="hidden" name="login" value="login" /></td>
                                            </tr>
                                            <tr align="right">
                                                <div align="center">
                                                    <td>&nbsp;</td>
                                                    <td>
                                                        <input align="right" width="70"  type="submit" id="submit" name="submit" value="INGRESAR" />
                                                        <input align="right" width="50"  type="reset" id="cancel" name="cancel" value="CANCELAR" />
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo (isset($msg) ? '<font color="red">'.$msg.'</font>': '');?></td>
                                            </tr>
                                        </tr>
                                    </table>
                                </form>
                            </div>
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