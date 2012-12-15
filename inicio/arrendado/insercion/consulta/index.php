<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insercion Arrendado')";
?>
</head></html>
<?php
$sql="INSERT INTO arrendado(
nombre";
$sql.=",curp";

if(!empty($_POST['apellido_paterno']))
$sql.=",apellido_paterno";

if(!empty($_POST['apellido_materno']))
$sql.=",apellido_materno";

if(!empty($_POST['domicilio_actual']))
$sql.=",domicilio_actual";

if(!empty($_POST['telefono_casa']))
$sql.=",telefono_casa";

if(!empty($_POST['estado_civil']))
$sql.=",estado_civil";

if(!empty($_POST['arrendador_actual']))
$sql.=",arrendador_actual";

if(!empty($_POST['arrendador_anterior']))
$sql.=",arrendador_anterior";

if(!empty($_POST['domicilio_anterior']))
$sql.=",domicilio_anterior";

if(!empty($_POST['nombre_aval']))
$sql.=",nombre_aval";

if(!empty($_POST['domicilio_aval']))
$sql.=",domicilio_aval";

if(!empty($_POST['telefono_aval']))
$sql.=",telefono_aval";

if(!empty($_POST['nombre_conyuge']))
$sql.=",nombre_conyuge";

$sql.=")

VALUES(
'$_POST[nombre]'";
$sql.=",'$_POST[curp]'";
if(!empty($_POST['apellido_paterno']))
$sql.=",'$_POST[apellido_paterno]'";
if(!empty($_POST['apellido_materno']))
$sql.=",'$_POST[apellido_materno]'";
if(!empty($_POST['domicilio_actual']))
$sql.=",'$_POST[domicilio_actual]'";
if(!empty($_POST['telefono_casa']))
$sql.=",'$_POST[telefono_casa]'";
if(!empty($_POST['estado_civil']))
$sql.=",'$_POST[estado_civil]'";
if(!empty($_POST['arrendador_actual']))
$sql.=",'$_POST[arrendador_actual]'";
if(!empty($_POST['arrendador_anterior']))
$sql.=",'$_POST[arrendador_anterior]'";
if(!empty($_POST['domicilio_anterior']))
$sql.=",'$_POST[domicilio_anterior]'";
if(!empty($_POST['nombre_aval']))
$sql.=",'$_POST[nombre_aval]'";
if(!empty($_POST['domicilio_aval']))
$sql.=",'$_POST[domicilio_aval]'";
if(!empty($_POST['telefono_aval']))
$sql.=",'$_POST[telefono_aval]'";
if(!empty($_POST['nombre_conyuge']))
$sql.=",'$_POST[nombre_conyuge]'";
$sql.=")";	
	if (!mysql_query($sql,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }
  
  else  if(!empty($_FILES['file']['name'][0]) ||
  			!empty($_FILES['file']['name'][1]) ||
  			!empty($_FILES['file']['name'][2]) ) {
  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/image_upload.php";
  }


include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
  mysql_query($sqlact,$con);
  echo '<script> alert("Agregado Exitosamente"); window.location = "../"; </script>';

 mysql_close($con);
?>

