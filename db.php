<?php
 
//godaddy
// $link = mysqli_connect('68.178.216.38', 'caminadmin', 'Camin@dmin2013');
// if (!$link)
// {
//   echo 'La comunicación con el servidor ha fallado.';
//   exit();
// }

// if (!mysqli_set_charset($link, 'UTF8'))
// {
//   echo 'No se reconoce la codificación de conexión.';
//   exit();
// }

// if(!mysqli_select_db($link, 'caminadmin'))
// {
//   echo 'No se pudo encontrar la base de datos.';
//   exit(); 
// }

//webhost
$link = mysqli_connect('mysql15.000webhost.com', 'a2904389_camin', 'camincare+#');
if (!$link)
{
  echo 'La comunicación con el servidor ha fallado.';
  exit();
}

if (!mysqli_set_charset($link, 'UTF8'))
{
  echo 'No se reconoce la codificación de conexión.';
  exit();
}

if(!mysqli_select_db($link, 'a2904389_camin'))
{
  echo 'No se pudo encontrar la base de datos.';
  exit(); 
}

 
$link = mysqli_connect('localhost', 'root', 'admin123');
if (!$link)
{
  echo 'La comunicación con el servidor ha fallado.';
  exit();
}

if (!mysqli_set_charset($link, 'UTF8'))
{
  echo 'No se reconoce la codificación de conexión.';
  exit();
}

// if(!mysqli_select_db($link, 'camindb'))
// {
//   echo 'No se pudo encontrar la base de datos.';
//   exit(); 
// }

 
?>
