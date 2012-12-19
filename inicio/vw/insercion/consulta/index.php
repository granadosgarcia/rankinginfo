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
 $curp= mysql_real_escape_string($_POST['curp']);

$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insercion Deudor VW')";
?>
</head></html>
<?php
$sql="INSERT INTO vw(
nombre";
$sql.=",curp";

if(!empty($_POST['apellido_paterno']))
$sql.=",apellido_paterno";

if(!empty($_POST['apellido_materno']))
$sql.=",apellido_materno";

if(!empty($_POST['domicilio']))
$sql.=",domicilio";

if(!empty($_POST['telefono']))
$sql.=",telefono";


$sql.=")

VALUES(
'$nombre'";
$sql.=",'$curp'";
if(!empty($_POST['apellido_paterno']))
$sql.=",'$apellido_paterno'";
if(!empty($_POST['apellido_materno']))
$sql.=",'$apellido_materno'";
if(!empty($_POST['domicilio']))
$sql.=",'$domicilio'";
if(!empty($_POST['telefono']))
$sql.=",'$telefono'";$sql.=")";	

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

