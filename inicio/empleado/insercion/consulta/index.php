<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $curp= mysql_real_escape_string($_POST['curp']);
 $nombres= mysql_real_escape_string($_POST['nombres']);
 $apellido_paterno= mysql_real_escape_string($_POST['apellido_paterno']);
 $apellido_materno= mysql_real_escape_string($_POST['apellido_materno']);
 $domicilio= mysql_real_escape_string($_POST['domicilio']);
 $telefono_particular= mysql_real_escape_string($_POST['telefono_particular']);
 $telefono_personal= mysql_real_escape_string($_POST['telefono_personal']);
 $estado_civil= mysql_real_escape_string($_POST['estado_civil']);
 $nombre_conyuge= mysql_real_escape_string($_POST['nombre_conyuge']);
 $patron_anterior= mysql_real_escape_string($_POST['patron_anterior']);
 $patron_actual= mysql_real_escape_string($_POST['patron_actual']);
 $responsable_actual= mysql_real_escape_string($_POST['responsable_actual']);
 $telefono_patronactual= mysql_real_escape_string($_POST['telefono_patronactual']);
 $domicilio_patronactual= mysql_real_escape_string($_POST['domicilio_patronactual']);
 $telefono_patronanterior= mysql_real_escape_string($_POST['telefono_patronanterior']);
 $domicilio_patronanterior= mysql_real_escape_string($_POST['domicilio_patronanterior']);
 $empleo_anterior= mysql_real_escape_string($_POST['empleo_anterior']);
 $tiempo_trabajoanterior= mysql_real_escape_string($_POST['tiempo_trabajoanterior']);
 $habilidades= mysql_real_escape_string($_POST['habilidades']);

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
'$nombres'";
$sql.=",'$curp'";
if(!empty($_POST['apellido_paterno']))
$sql.=",'$apellido_paterno'";
if(!empty($_POST['apellido_materno']))
$sql.=",'$apellido_materno'";
if(!empty($_POST['domicilio']))
$sql.=",'$domicilio'";
if(!empty($_POST['telefono_particular']))
$sql.=",'$telefono_particular'";
if(!empty($_POST['telefono_personal']))
$sql.=",'$telefono_personal'";
if(!empty($_POST['estado_civil']))
$sql.=",'$estado_civil'";
if(!empty($_POST['nombre_conyuge']))
$sql.=",'$nombre_conyuge'";
if(!empty($_POST['patron_anterior']))
$sql.=",'$patron_anterior'";
if(!empty($_POST['patron_actual']))
$sql.=",'$patron_actual'";
if(!empty($_POST['responsable_actual']))
$sql.=",'$responsable_actual'";
if(!empty($_POST['telefono_patronactual']))
$sql.=",'$telefono_patronactual'";
if(!empty($_POST['domicilio_patronactual']))
$sql.=",'$domicilio_patronactual'";
if(!empty($_POST['telefono_patronanterior']))
$sql.=",'$telefono_patronanterior'";
if(!empty($_POST['domicilio_patronanterior']))
$sql.=",'$domicilio_patronanterior'";
if(!empty($_POST['empleo_anterior']))
$sql.=",'$empleo_anterior'";
if(!empty($_POST['tiempo_trabajoanterior']))
$sql.=",'$tiempo_trabajoanterior'";
if(!empty($_POST['habilidades']))
$sql.=",'$habilidades'";
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

