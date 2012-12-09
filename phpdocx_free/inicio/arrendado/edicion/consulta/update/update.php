<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


$sql="
UPDATE arrendado SET";

if(!empty($_POST['nombre']))
$sql.=" nombre = '$_POST[nombre]'";
if(!empty($_POST['apellido_paterno']))
$sql.=", apellido_paterno 	= '$_POST[apellido_paterno]'";
if(!empty($_POST['apellido_materno']))
$sql.=", apellido_materno 	= '$_POST[apellido_materno]'";
if(!empty($_POST['domicilio_actual']))
$sql.=", domicilio_actual 	= '$_POST[domicilio_actual]'";
if(!empty($_POST['telefono_casa']))
$sql.=", telefono_casa    	= '$_POST[telefono_casa]'";
if(!empty($_POST['estado_civil']))
$sql.=", estado_civil	 	= '$_POST[estado_civil]'";
if(!empty($_POST['arrendador_actual']))
$sql.=", arrendador_actual	= '$_POST[arrendador_actual]'";
if(!empty($_POST['arrendador_anterior']))
$sql.=", arrendador_anterior = '$_POST[arrendador_anterior]'";
if(!empty($_POST['domicilio_anterior']))
$sql.=", domicilio_anterior	= '$_POST[domicilio_anterior]'";
if(!empty($_POST['curp']))
$sql.=", curp				= '$_POST[curp]'";
if(!empty($_POST['nombre_aval']))
$sql.=", nombre_aval			= '$_POST[nombre_aval]'";
if(!empty($_POST['domicilio_aval']))
$sql.=", domicilio_aval		= '$_POST[domicilio_aval]'";
if(!empty($_POST['telefono_aval']))
$sql.=", telefono_aval 		= '$_POST[telefono_aval]'";
if(!empty($_POST['nombre_conyuge']))
$sql.=", nombre_conyuge		= '$_POST[nombre_conyuge]'";

$sql.="WHERE 
curp='$_SESSION[curp]'";


	if (!mysql_query($sql,$con))
  {
  	die('Error al actualizar el registro a la base de datos ' . mysql_error());
  }
  
    else  if(!empty($_FILES['file']['name'][0]) ||
  			!empty($_FILES['file']['name'][1])  ||
  			!empty($_FILES['file']['name'][2]) ) {
  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/image_upload.php";
  }
  echo '<script> alert("Agregado Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
?>

