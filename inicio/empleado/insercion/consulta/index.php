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
 
 //NEW
 $clave_ife= mysql_real_escape_string($_POST['clave_ife']);
 $calle= mysql_real_escape_string($_POST['calle']);
 $no_interior= mysql_real_escape_string($_POST['no_interior']);
 $no_exterior= mysql_real_escape_string($_POST['no_exterior']);
 $colonia= mysql_real_escape_string($_POST['colonia']);
 $ciudad= mysql_real_escape_string($_POST['ciudad']);
 $estado= mysql_real_escape_string($_POST['estado']);
 $codigo_postal= mysql_real_escape_string($_POST['codigo_postal']);
 $municipio= mysql_real_escape_string($_POST['municipio']);
 $delegacion= mysql_real_escape_string($_POST['delegacion']);

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
 $grado = mysql_real_escape_string($_POST['grado_escolar']);
 $lugar_estudio1 = mysql_real_escape_string($_POST['lugar_estudio']);
 $lugar_estudio2 = mysql_real_escape_string($_POST['lugar_estudio2']);
 $lugar_estudio3 = mysql_real_escape_string($_POST['lugar_estudio3']);
 $lugar_estudio4 = mysql_real_escape_string($_POST['lugar_estudio4']);
 $lugar_estudio5 = mysql_real_escape_string($_POST['lugar_estudio5']);

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

if(!empty($_POST['clave_ife']))
$sql.=",clave_ife";

if(!empty($_POST['calle']))
$sql.=",calle";

if(!empty($_POST['no_interior']))
$sql.=",no_interior";

if(!empty($_POST['no_exterior']))
$sql.=",no_exterior";

if(!empty($_POST['colonia']))
$sql.=",colonia";

if(!empty($_POST['ciudad']))
$sql.=",ciudad";

if(!empty($_POST['estado']))
$sql.=",estado";

if(!empty($_POST['codigo_postal']))
$sql.=",codigo_postal";

if(!empty($_POST['municipio']))
$sql.=",municipio";

if(!empty($_POST['delegacion']))
$sql.=",delegacion";

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

if(!empty($_POST['clave_ife']))
$sql.=",'$clave_ife'";

if(!empty($_POST['calle']))
$sql.=",'$calle'";
if(!empty($_POST['no_interior']))
$sql.=",'$no_interior'";
if(!empty($_POST['no_exterior']))
$sql.=",'$no_exterior'";
if(!empty($_POST['colonia']))
$sql.=",'$colonia'";
if(!empty($_POST['ciudad']))
$sql.=",'$ciudad'";
if(!empty($_POST['estado']))
$sql.=",'$estado'";
if(!empty($_POST['codigo_postal']))
$sql.=",'$codigo_postal'";
if(!empty($_POST['municipio']))
$sql.=",'$municipio'";
if(!empty($_POST['delegacion']))
$sql.=",'$delegacion'";


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
if(!empty($_POST['lugar_estudio2']))
$sql.=",lugar_estudio2";
if(!empty($_POST['lugar_estudio3']))
$sql.=",lugar_estudio3";
if(!empty($_POST['lugar_estudio4']))
$sql.=",lugar_estudio4";
if(!empty($_POST['lugar_estudio5']))
$sql.=",lugar_estudio5";


$sql.=")

VALUES(";
$sql.=$id;
if(!empty($_POST['grado_escolar']))
$sql.=",'$grado'";
if(!empty($_POST['lugar_estudio']))
$sql.=",'$lugar_estudio1'";
if(!empty($_POST['lugar_estudio2']))
$sql.=",'$lugar_estudio2'";
if(!empty($_POST['lugar_estudio3']))
$sql.=",'$lugar_estudio3'";
if(!empty($_POST['lugar_estudio4']))
$sql.=",'$lugar_estudio4'";
if(!empty($_POST['lugar_estudio5']))
$sql.=",'$lugar_estudio5'";
$sql.=")";
  
if (!mysql_query($sql,$con))
  {
	  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/errorsql.php";
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

