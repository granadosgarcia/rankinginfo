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
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insercion Empleado')";
?>
</head></html>
<?php
$sql="INSERT INTO empleado(
nombres";
$sql.=",curp";

if(!empty($_POST['apellido_paterno']))
$sql.=",apellido_paterno";

if(!empty($_POST['apellido_materno']))
$sql.=",apellido_materno";

if(!empty($_POST['domicilio']))
$sql.=",domicilio";

if(!empty($_POST['telefono_particular']))
$sql.=",telefono_particular";

if(!empty($_POST['telefono_personal']))
$sql.=",telefono_personal";

if(!empty($_POST['estado_civil']))
$sql.=",estado_civil";

if(!empty($_POST['nombre_conyuge']))
$sql.=",nombre_conyuge";

if(!empty($_POST['patron_anterior']))
$sql.=",patron_anterior";

if(!empty($_POST['patron_actual']))
$sql.=",patron_actual";

if(!empty($_POST['responsable_actual']))
$sql.=",responsable_actual";

if(!empty($_POST['telefono_patronactual']))
$sql.=",telefono_patronactual";

if(!empty($_POST['domicilio_patronactual']))
$sql.=",domicilio_patronactual";

if(!empty($_POST['telefono_patronanterior']))
$sql.=",telefono_patronanterior";

if(!empty($_POST['domicilio_patronanterior']))
$sql.=",domicilio_patronanterior";

if(!empty($_POST['empleo_anterior']))
$sql.=",empleo_anterior";

if(!empty($_POST['tiempo_trabajoanterior']))
$sql.=",tiempo_trabajoanterior";

if(!empty($_POST['habilidades']))
$sql.=",habilidades";

$sql.=")

VALUES(
'$_POST[nombres]'";
$sql.=",'$_POST[curp]'";
if(!empty($_POST['apellido_paterno']))
$sql.=",'$_POST[apellido_paterno]'";
if(!empty($_POST['apellido_materno']))
$sql.=",'$_POST[apellido_materno]'";
if(!empty($_POST['domicilio']))
$sql.=",'$_POST[domicilio]'";
if(!empty($_POST['telefono_particular']))
$sql.=",'$_POST[telefono_particular]'";
if(!empty($_POST['telefono_personal']))
$sql.=",'$_POST[telefono_personal]'";
if(!empty($_POST['estado_civil']))
$sql.=",'$_POST[estado_civil]'";
if(!empty($_POST['nombre_conyuge']))
$sql.=",'$_POST[nombre_conyuge]'";
if(!empty($_POST['patron_anterior']))
$sql.=",'$_POST[patron_anterior]'";
if(!empty($_POST['patron_actual']))
$sql.=",'$_POST[patron_actual]'";
if(!empty($_POST['responsable_actual']))
$sql.=",'$_POST[responsable_actual]'";
if(!empty($_POST['telefono_patronactual']))
$sql.=",'$_POST[telefono_patronactual]'";
if(!empty($_POST['domicilio_patronactual']))
$sql.=",'$_POST[domicilio_patronactual]'";
if(!empty($_POST['telefono_patronanterior']))
$sql.=",'$_POST[telefono_patronanterior]'";
if(!empty($_POST['domicilio_patronanterior']))
$sql.=",'$_POST[domicilio_patronanterior]'";
if(!empty($_POST['empleo_anterior']))
$sql.=",'$_POST[empleo_anterior]'";
if(!empty($_POST['tiempo_trabajoanterior']))
$sql.=",'$_POST[tiempo_trabajoanterior]'";
if(!empty($_POST['habilidades']))
$sql.=",'$_POST[habilidades]'";
$sql.=")";
	if (!mysql_query($sql,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }
$id = mysql_insert_id();

$sql="INSERT INTO escolaridad(
clave";

if(!empty($_POST['grado_escolar']))
$sql.=",grado_escolar";

if(!empty($_POST['lugar_estudio']))
$sql.=",lugar_estudio";


$sql.=")

VALUES(";
$sql.=$id;
if(!empty($_POST['grado_escolar']))
$sql.=",'$_POST[grado_escolar]'";
if(!empty($_POST['lugar_estudio']))
$sql.=",'$_POST[lugar_estudio]'";
$sql.=")";
  
if (!mysql_query($sql,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }

  else  if(!empty($_FILES['file']['name'][0]) ||
  			!empty($_FILES['file']['name'][1]) ||
  			!empty($_FILES['file']['name'][2]) ||
  			!empty($_FILES['file']['name'][3]) ||
  			!empty($_FILES['file']['name'][4]) ||
  			!empty($_FILES['file']['name'][5])) {
  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/image_upload_E.php";
  }


include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
	mysql_query($sqlact, $con);
  echo '<script> alert("Agregado Exitosamente"); window.location = "../"; </script>';

 mysql_close($con);
?>

