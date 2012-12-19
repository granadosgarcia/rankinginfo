<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $tipo_gestion= mysql_real_escape_string($_POST['tipo_gestion']);
 $etapa_procesal= mysql_real_escape_string($_POST['etapa_procesal']);
 $comentario= mysql_real_escape_string($_POST['comentario']);
 $etapa_juicio= mysql_real_escape_string($_POST['etapa_juicio']);
 $saldo_atrasado= mysql_real_escape_string($_POST['saldo_atrasado']);
 $semanas_atraso= mysql_real_escape_string($_POST['semanas_atraso']);
 $ultimo_abono= mysql_real_escape_string($_POST['ultimo_abono']);

 
 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Gestion VW')";

	if (!mysql_query($sqlact,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }



$sql="
INSERT INTO gestiones (fecha , curp";

if(!empty($_POST['tipo_gestion']))
$sql.=",tipo_gestion";

if(!empty($_POST['etapa_procesal']))
$sql.=",etapa_procesal";

if(!empty($_POST['etapa_juicio']))
$sql.=",etapa_juicio";

if(!empty($_POST['comentario']))
$sql.=",comentario";

if(!empty($_POST['saldo_atrasado']))
$sql.=",saldo_atrasado";

if(!empty($_POST['semanas_atraso']))
$sql.=",semanas_atraso";

if(!empty($_POST['ultimo_abono']))
$sql.=",ultimo_abono";

$sql.=")";


$sql.="VALUES ( NOW(), $_SESSION[curp]";
if(!empty($_POST['tipo_gestion']))
$sql.=",'$tipo_gestion'";
if(!empty($_POST['etapa_procesal']))
$sql.=",'$etapa_procesal'";
if(!empty($_POST['etapa_juicio']))
$sql.=",'$etapa_juicio'";
if(!empty($_POST['comentario']))
$sql.=",'$comentario'";
if(!empty($_POST['saldo_atrasado']))
$sql.=",'$saldo_atrasado'";
if(!empty($_POST['semanas_atraso']))
$sql.=",'$semanas_atraso'";
if(!empty($_POST['ultimo_abono']))
$sql.=",'$ultimo_abono'";

$sql.=")";


	if (!mysql_query($sql,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }






include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";
  echo '<script> alert("Agregado Exitosamente"); window.location = "../"; </script>';

 mysql_close($con);
?>

