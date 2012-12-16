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

$sql="
INSERT INTO vw (fecha";

if(!empty($_POST['tipo_gestion']))
$sql.="tipo_gestion";

if(!empty($_POST['etapa_procesal']))
$sql.=",etapa_procesal";

if(!empty($_POST['etapa_juicio']))
$sql.=",etapa_juicio";

if(!empty($_POST['comentario']))
$sql.=",comentario";

$sql.=")";


$sql.="VALUES ( NOW()";
if(!empty($_POST['tipo_gestion']))
$sql.="'$tipo_gestion'";
if(!empty($_POST['etapa_procesal']))
$sql.=",'$etapa_procesal'";
if(!empty($_POST['etapa_juicio']))
$sql.=",'$etapa_juicio'";
if(!empty($_POST['comentario']))
$sql.=",'$comentario'";

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

