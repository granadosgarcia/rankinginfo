<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
 $nombre= mysql_real_escape_string($_POST['nombre']);
 $apellido_paterno= mysql_real_escape_string($_POST['apellido_paterno']);
 $apellido_materno= mysql_real_escape_string($_POST['apellido_materno']);

 $estado_civil= mysql_real_escape_string($_POST['estado_civil']);
 $arrendador_actual= mysql_real_escape_string($_POST['arrendador_actual']);
 $arrendador_anterior= mysql_real_escape_string($_POST['arrendador_anterior']);
 $domicilio_anterior= mysql_real_escape_string($_POST['domicilio_anterior']);
 $curp= mysql_real_escape_string($_POST['curp']);
 $nombre_aval= mysql_real_escape_string($_POST['nombre_aval']);
 $domicilio_aval= mysql_real_escape_string($_POST['domicilio_aval']);
 $telefono_aval= mysql_real_escape_string($_POST['telefono_aval']);
 $nombre_conyuge= mysql_real_escape_string($_POST['nombre_conyuge']);

 //nuevos
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

if(!empty($_POST['clave_ife']))
$sql.=",clave_ife";

if(!empty($_POST['nombre_conyuge']))
$sql.=",nombre_conyuge";

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

$sql.=")

VALUES(
'$nombre'";
$sql.=",'$curp'";
if(!empty($_POST['apellido_paterno']))
$sql.=",'$apellido_paterno'";
if(!empty($_POST['apellido_materno']))
$sql.=",'$apellido_materno'";
if(!empty($_POST['domicilio_actual']))
$sql.=",'$domicilio_actual'";
if(!empty($_POST['telefono_casa']))
$sql.=",'$telefono_casa'";
if(!empty($_POST['estado_civil']))
$sql.=",'$estado_civil'";
if(!empty($_POST['arrendador_actual']))
$sql.=",'$arrendador_actual'";
if(!empty($_POST['arrendador_anterior']))
$sql.=",'$arrendador_anterior'";
if(!empty($_POST['domicilio_anterior']))
$sql.=",'$domicilio_anterior'";
if(!empty($_POST['nombre_aval']))
$sql.=",'$nombre_aval'";
if(!empty($_POST['domicilio_aval']))
$sql.=",'$domicilio_aval'";
if(!empty($_POST['telefono_aval']))
$sql.=",'$telefono_aval'";
if(!empty($_POST['clave_ife']))
$sql.=",'$clave_ife'";
if(!empty($_POST['nombre_conyuge']))
$sql.=",'$nombre_conyuge'";


//NUEVOS
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

