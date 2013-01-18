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
 $domicilio= mysql_real_escape_string($_POST['domicilio']);
 $telefono= mysql_real_escape_string($_POST['telefono']);
 $calle= mysql_real_escape_string($_POST['calle']);
 $no_interior= mysql_real_escape_string($_POST['no_interior']);
 $no_exterior= mysql_real_escape_string($_POST['no_exterior']);
 $colonia= mysql_real_escape_string($_POST['colonia']);
 $ciudad= mysql_real_escape_string($_POST['ciudad']);
 $municipio= mysql_real_escape_string($_POST['municipio']);
 $delegacion= mysql_real_escape_string($_POST['delegacion']);
 $estado= mysql_real_escape_string($_POST['estado']);
 $codigo_postal= mysql_real_escape_string($_POST['codigo_postal']);
 $curp =mysql_real_escape_string($_POST['curp']);
 $no_cliente= mysql_real_escape_string($_POST['no_cliente']);


$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insercion Deudor VW')";
?>
</head></html>
<?php
$sql="INSERT INTO vw(
nombre";

if(!empty($_POST['apellido_paterno']))
$sql.=",apellido_paterno";

if(!empty($_POST['apellido_materno']))
$sql.=",apellido_materno";
/* New */
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
if(!empty($_POST['municipio']))
$sql.=",municipio";
if(!empty($_POST['delegacion']))
$sql.=",delegacion";
if(!empty($_POST['estado']))
$sql.=",estado";
if(!empty($_POST['codigo_postal']))
$sql.=",codigo_postal";
if(!empty($_POST['no_cliente']))
$sql.=",no_cliente";
/* New */
if(!empty($_POST['telefono']))
$sql.=",telefono";
$sql.=",curp";

$sql.=")

VALUES(
'$nombre'";

if(!empty($_POST['apellido_paterno']))
$sql.=",'$apellido_paterno'";
if(!empty($_POST['apellido_materno']))
$sql.=",'$apellido_materno'";


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
if(!empty($_POST['municipio']))
$sql.=",'$municipio'";
if(!empty($_POST['delegacion']))
$sql.=",'$delegacion'";
if(!empty($_POST['estado']))
$sql.=",'$estado'";
if(!empty($_POST['no_cliente']))
$sql.=",'$no_cliente'";

if(!empty($_POST['telefono']))
$sql.=",'$telefono'";

$sql.=",'$curp'";

$sql.=")";	

	if (!mysql_query($sql,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }
  



include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
  mysql_query($sqlact,$con);
  echo '<script> alert("Agregado Exitosamente"); window.location = "../"; </script>';

 mysql_close($con);
?>

