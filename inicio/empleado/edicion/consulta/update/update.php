<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


$sql="
UPDATE empleado SET";

$sql.=" curp				= '$_POST[curp]'";

if(!empty($_POST['nombres']))
$sql.=", nombres = '$_POST[nombres]'";

if(!empty($_POST['apellido_paterno']))
$sql.=", apellido_paterno 	= '$_POST[apellido_paterno]'";

if(!empty($_POST['apellido_materno']))
$sql.=", apellido_materno 	= '$_POST[apellido_materno]'";

if(!empty($_POST['domicilio']))
$sql.=", domicilio 	= '$_POST[domicilio]'";

if(!empty($_POST['telefono_particular']))
$sql.=", telefono_particular    	= '$_POST[telefono_particular]'";

if(!empty($_POST['telefono_personal']))
$sql.=", telefono_personal	 	= '$_POST[telefono_personal]'";

if(!empty($_POST['estado_civil']))
$sql.=", estado_civil	= '$_POST[estado_civil]'";

if(!empty($_POST['nombre_conyuge']))
$sql.=", nombre_conyuge = '$_POST[nombre_conyuge]'";

if(!empty($_POST['patron_anterior']))
$sql.=", patron_anterior	= '$_POST[patron_anterior]'";

if(!empty($_POST['patron_actual']))
$sql.=", patron_actual			= '$_POST[patron_actual]'";

if(!empty($_POST['responsable_actual']))
$sql.=", responsable_actual		= '$_POST[responsable_actual]'";

if(!empty($_POST['telefono_patronactual']))
$sql.=", telefono_patronactual 		= '$_POST[telefono_patronactual]'";

if(!empty($_POST['domicilio_patronactual']))
$sql.=", domicilio_patronactual		= '$_POST[domicilio_patronactual]'";

if(!empty($_POST['telefono_patronanterior']))
$sql.=", telefono_patronanterior		= '$_POST[telefono_patronanterior]'";

if(!empty($_POST['domicilio_patronanterior']))
$sql.=", domicilio_patronanterior		= '$_POST[domicilio_patronanterior]'";

if(!empty($_POST['empleo_anterior']))
$sql.=", empleo_anterior		= '$_POST[empleo_anterior]'";

if(!empty($_POST['tiempo_trabajoanterior']))
$sql.=", tiempo_trabajoanterior		= '$_POST[tiempo_trabajoanterior]'";

if(!empty($_POST['habilidades']))
$sql.=", habilidades		= '$_POST[habilidades]'";

$sql.=" WHERE 
curp ='$_SESSION[curp]'";


	if (!mysql_query($sql,$con))
  {
    	echo "<br>".$sql."<br><br>";

  	die('Error al actualizar el registro a la base de datos ' . mysql_error());
  }
  
    else  if(!empty($_FILES['file']['name'][0]) ||
  			!empty($_FILES['file']['name'][1])  ||
  			!empty($_FILES['file']['name'][2])  ||
  			!empty($_FILES['file']['name'][3])  ||
  			!empty($_FILES['file']['name'][4]) ||
  			!empty($_FILES['file']['name'][5])) {
  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/image_upload_E.php";
  }
  
  $sql="
UPDATE escolaridad SET";
$sql.=" clave		= '$_POST[clave]'";
if(!empty($_POST['grado_escolar ']))
$sql.=", grado_escolar 		= '$_POST[grado_escolar]'";

if(!empty($_POST['lugar_estudio ']))
$sql.=", lugar_estudio 		= '$_POST[lugar_estudio]'";
$sql.="WHERE 
clave='$_POST[clave]'";
  
	if (!mysql_query($sql,$con))
  {
  	echo "<br>".$sql."<br><br>";
  	die('Error al actualizar el registro a la base de datos ' . mysql_error());
  }
  
  echo '<script> alert("Agregado Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
?>

