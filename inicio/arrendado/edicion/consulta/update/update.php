<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


 $nombre= mysql_real_escape_string($_POST['nombre']);
 $apellido_paterno= mysql_real_escape_string($_POST['apellido_paterno']);
 $apellido_materno= mysql_real_escape_string($_POST['apellido_materno']);
 $domicilio_actual= mysql_real_escape_string($_POST['domicilio_actual']);
 $telefono_casa= mysql_real_escape_string($_POST['telefono_casa']);
 $estado_civil= mysql_real_escape_string($_POST['estado_civil']);
 $arrendador_actual= mysql_real_escape_string($_POST['arrendador_actual']);
 $arrendador_anterior= mysql_real_escape_string($_POST['arrendador_anterior']);
 $domicilio_anterior= mysql_real_escape_string($_POST['domicilio_anterior']);
 $curp= mysql_real_escape_string($_POST['curp']);
 $nombre_aval= mysql_real_escape_string($_POST['nombre_aval']);
 $domicilio_aval= mysql_real_escape_string($_POST['domicilio_aval']);
 $telefono_aval= mysql_real_escape_string($_POST['telefono_aval']);
 $nombre_conyuge= mysql_real_escape_string($_POST['nombre_conyuge']);
 
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Edición Arrendado')";

$sql="
UPDATE arrendado SET";

if(!empty($_POST['nombre']))
$sql.=" nombre = '$nombre'";
if(!empty($_POST['apellido_paterno']))
$sql.=", apellido_paterno 	= '$apellido_paterno'";
if(!empty($_POST['apellido_materno']))
$sql.=", apellido_materno 	= '$apellido_materno'";
if(!empty($_POST['domicilio_actual']))
$sql.=", domicilio_actual 	= '$domicilio_actual'";
if(!empty($_POST['telefono_casa']))
$sql.=", telefono_casa    	= '$telefono_casa'";
if(!empty($_POST['estado_civil']))
$sql.=", estado_civil	 	= '$estado_civil'";
if(!empty($_POST['arrendador_actual']))
$sql.=", arrendador_actual	= '$arrendador_actual'";
if(!empty($_POST['arrendador_anterior']))
$sql.=", arrendador_anterior = '$arrendador_anterior'";
if(!empty($_POST['domicilio_anterior']))
$sql.=", domicilio_anterior	= '$domicilio_anterior'";
if(!empty($_POST['curp']))
$sql.=", curp				= '$curp'";
if(!empty($_POST['nombre_aval']))
$sql.=", nombre_aval			= '$nombre_aval'";
if(!empty($_POST['domicilio_aval']))
$sql.=", domicilio_aval		= '$domicilio_aval'";
if(!empty($_POST['telefono_aval']))
$sql.=", telefono_aval 		= '$telefono_aval'";
if(!empty($_POST['nombre_conyuge']))
$sql.=", nombre_conyuge='$nombre_conyuge'";

$sql.="WHERE 
curp='$curp'";


	if (!mysql_query($sql,$con))
  {
  	die('Error al actualizar el registro a la base de datos ' . mysql_error());
  }
  
    else  if(!empty($_FILES['file']['name'][0]) ||
  			!empty($_FILES['file']['name'][1])  ||
  			!empty($_FILES['file']['name'][2]) ) {
  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/image_upload.php";
  }
   mysql_query($sqlact,$con);
  echo '
  <html style="background-color: black;">
  <script> alert("Modificado Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
?>

