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
		header ('Location: descargas_unlocked.php');
		exit();
	}
	else
	{		
		$msg = 'Usuario y contraseña incorrectos.';
		echo '<script language="javascript" >
		location.href="login.php";
		</script>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Autenticación</title>
	<meta http-equiv="Content-Type"
	content="text/html; charset=UTF-8" />
	<link href="style.css" rel="stylesheet">
	<script src="jquery-1.7.1.min.js" ></script>
	<script src="jquery.validate.min.js" ></script>
<script>
$(document).ready(function(){
	$('#login').validate({
		rules: {
			usrpass: {
				required: true
			},
			usremail: {
				required: true,
				email: true
			}
		},
		messages: {
			usrpass: {
				required: 'Debe ingresar la contrase�a.'	
			},
			usremail: {
				required: 'Debe ingresar el usuario.',
				email : 'Usuario incorrecto.'
			}
		}
	}); // end register validation
});
</script>
</head>
	<body>
		<div id="DivLogin">
			<form action="" id="login" method="POST">
				<table align="center">
                 <tr>
                        <td colspan="2">
	                        <div id="header_logo"></div>
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
                     <tr>
						 <div align="center">
						<td><input width="90"  type="submit" id="submit" name="submit" value="INGRESAR" /></td>
                        <td><input align="middle"type="reset" id="cancel" name="cancel" value="CANCELAR" /></td>
						</div>
					</tr>
					<tr>
						<td colspan="2"><?php echo (isset($msg) ? '<font color="red">'.$msg.'</font>': '');?></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>