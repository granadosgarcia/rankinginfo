<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
?>
</head></html>
<?php
$sql="INSERT INTO cliente_vw(
nombre_cliente";
$sql.=",curp";

if(!empty($_POST['direccion']))
$sql.=",direccion";

if(!empty($_POST['numero_exterior']))
$sql.=",numero_exterior";

if(!empty($_POST['numero_interior']))
$sql.=",numero_interior";

if(!empty($_POST['telefono']))
$sql.=",telefono";

if(!empty($_POST['codigo_postal']))
$sql.=",codigo_postal";

if(!empty($_POST['pais']))
$sql.=",pais";

if(!empty($_POST['poblacion']))
$sql.=",poblacion";

if(!empty($_POST['estado']))
$sql.=",estado";

if(!empty($_POST['fecha_ultimo_pago']))
$sql.=",fecha_ultimo_pago";

if(!empty($_POST['semanas_atraso']))
$sql.=",semanas_atraso";

if(!empty($_POST['ultimo_abono']))
$sql.=",ultimo_abono";

if(!empty($_POST['fecha_ultima_visita']))
$sql.=",fecha_ultima_visita";

if(!empty($_POST['saldo']))
$sql.=",saldo";

if(!empty($_POST['saldo_atrasado']))
$sql.=",saldo_atrasado";

if(!empty($_POST['ultimo_abono_moratorio']))
$sql.=",ultimo_abono_moratorio";

if(!empty($_POST['saldo_moratorio']))
$sql.=",saldo_moratorio";

if(!empty($_POST['saldo_total']))
$sql.=",saldo_total";

$sql.=")

VALUES(
'$_POST[nombre]'";
$sql.=",'$_POST[curp]'";
if(!empty($_POST['direccion']))
$sql.=",'$_POST[direccion]'";
if(!empty($_POST['numero_exterior']))
$sql.=",'$_POST[numero_exterior]'";
if(!empty($_POST['numero_interior']))
$sql.=",'$_POST[numero_interior]'";
if(!empty($_POST['telefono']))
$sql.=",'$_POST[telefono]'";
if(!empty($_POST['codigo_postal']))
$sql.=",'$_POST[codigo_postal]'";
if(!empty($_POST['pais']))
$sql.=",'$_POST[pais]'";
if(!empty($_POST['poblacion']))
$sql.=",'$_POST[poblacion]'";
if(!empty($_POST['estado']))
$sql.=",'$_POST[estado]'";
if(!empty($_POST['fecha_ultimo_pago']))
$sql.=",'$_POST[fecha_ultimo_pago]'";
if(!empty($_POST['semanas_atraso']))
$sql.=",'$_POST[semanas_atraso]'";
if(!empty($_POST['ultimo_abono']))
$sql.=",'$_POST[ultimo_abono]'";
if(!empty($_POST['fecha_ultima_visita']))
$sql.=",'$_POST[fecha_ultima_visita]'";
if(!empty($_POST['saldo']))
$sql.=",'$_POST[saldo]'";
if(!empty($_POST['saldo_atrasado']))
$sql.=",'$_POST[saldo_atrasado]'";
if(!empty($_POST['ultimo_abono_moratorio']))
$sql.=",'$_POST[ultimo_abono_moratorio]'";
if(!empty($_POST['saldo_moratorio']))
$sql.=",'$_POST[saldo_moratorio]'";
if(!empty($_POST['saldo_total']))
$sql.=",'$_POST[saldo_total]'";
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
  echo '<script> alert("Agregado a VW Exitosamente"); window.location = "../"; </script>';

 mysql_close($con);
?>

