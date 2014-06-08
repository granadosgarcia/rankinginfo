<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $curp= mysql_real_escape_string($_REQUEST['consulta']);

  $utlima_actuacion= mysql_real_escape_string($_REQUEST['utlima_actuacion']);
  $estado_procesal_tramite_pendiente= mysql_real_escape_string($_REQUEST['estado_procesal']);
  $comentario_01= mysql_real_escape_string($_REQUEST['comentario_01']);
   $fecha= mysql_real_escape_string($_REQUEST['datepicker']);
   $originalDate = $fecha;
   $newDate = date("Y-m-d", strtotime($originalDate));
   $fecha= $newDate;

   $actor_nombres = mysql_real_escape_string($_REQUEST['actor_nombre']);
   $actor_paterno = mysql_real_escape_string($_REQUEST['actor_paterno']);
   $actor_materno = mysql_real_escape_string($_REQUEST['actor_materno']);
   $moral_nombre = mysql_real_escape_string($_REQUEST['moral_nombre']);
   $moral_paterno = mysql_real_escape_string($_REQUEST['moral_paterno']);
   $moral_materno = mysql_real_escape_string($_REQUEST['moral_materno']);
   $abogado_nombre = mysql_real_escape_string($_REQUEST['abogado_nombre']);
   $abogado_paterno = mysql_real_escape_string($_REQUEST['abogado_paterno']);
   $abogado_materno = mysql_real_escape_string($_REQUEST['abogado_materno']);
   $demandado_nombre = mysql_real_escape_string($_REQUEST['demandado_nombre']);
   $demandado_paterno = mysql_real_escape_string($_REQUEST['demandado_paterno']);
   $demandado_materno = mysql_real_escape_string($_REQUEST['demandado_materno']);
   $juicio = mysql_real_escape_string($_REQUEST['juicio']);
   $juzgado = mysql_real_escape_string($_REQUEST['juzgado']);
   $distrito = mysql_real_escape_string($_REQUEST['distrito']);

 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Inserción Juicio')";



$sql="UPDATE relacion_juicios SET ";

if(!empty($actor_nombres))
$sql.="actor_nombres = '$actor_nombres'";

if(!empty($actor_paterno))
$sql.=",actor_apellido_paterno = '$actor_paterno'";

if(!empty($actor_materno))
$sql.=",actor_apellido_materno = '$actor_materno'";

if(!empty($moral_nombre))
$sql.=",persona_moral_nombres = '$moral_nombre'";

if(!empty($moral_paterno))
$sql.=",persona_moral_apellido_paterno = '$moral_paterno'";

if(!empty($moral_materno))
$sql.=",persona_moral_apellido_materno = '$moral_materno'";

if(!empty($abogado_nombre))
$sql.=",abogado_patrono_nombres = '$abogado_nombre'";

if(!empty($abogado_paterno))
$sql.=",abogado_patrono_apellido_paterno = '$abogado_paterno'";

if(!empty($abogado_materno))
$sql.=",abogado_patrono_apellido_materno = '$abogado_materno'";

if(!empty($demandado_nombre))
$sql.=",demandado_nombres = '$demandado_nombre'";

if(!empty($demandado_paterno))
$sql.=",demandado_apellido_paterno = '$demandado_paterno'";

if(!empty($demandado_materno))
$sql.=",demandado_apellido_materno = '$demandado_materno'";

if(!empty($juicio))
$sql.=",juicio = '$juicio'";

if(!empty($juzgado))
$sql.=",juzgado = '$juzgado'";

if(!empty($distrito))
$sql.=",distrito_juidicial = '$distrito'";


if(!empty($_REQUEST['datepicker']))
$sql.=",fecha = '$fecha'";

if(!empty($_REQUEST['utlima_actuacion']))
$sql.=", ultima_actuacion = '$utlima_actuacion'";


if(!empty($_REQUEST['estado_procesal']))
$sql.=", estado_procesal = '$estado_procesal_tramite_pendiente'";

if(!empty($_REQUEST['comentario_01']))
$sql.=", comentario_01 = '$comentario_01'";



$sql.=" WHERE
expediente ='$curp'";


  if (!mysql_query($sql,$con))
  {
    include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/errorsql.php";
  }

    mysql_query($sqlact,$con);
  echo '<script> alert("Editado Exitosamente"); window.location="../../"; </script>';

 mysql_close($con);
?>
