<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$date=gmdate(DATE_RFC822);
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Calificacion Arrendado')";

 $curp= mysql_real_escape_string($_SESSION['curp']);
 $arr_pagos= mysql_real_escape_string($_GET['arr_pagos']);
 $arr_propiedad_actual= mysql_real_escape_string($_GET['arr_propiedad_actual']);
 $arr_general= mysql_real_escape_string($_GET['arr_general']);
 $comentario= mysql_real_escape_string($_GET['coment']);
 $nombre_evaluador= mysql_real_escape_string($_GET['nombre_evaluador']);
 $telefono_evaluador= mysql_real_escape_string($_GET['telefono_evaluador']);
 $direccion_evaluador= mysql_real_escape_string($_GET['direccion_evaluador']);



if(!empty($_GET['arr_pagos']) || !empty($_GET['arr_propiedad_actual']) || !empty($_GET['arr_propiedad_anterior']) || !empty($_GET['arr_general']) || !empty($_GET['coment'])){
$sql="INSERT INTO arr_calif(";
if(!empty($_GET['arr_pagos']))
$sql.="arr_pagos,";
if(!empty($_GET['arr_propiedad_actual']))
$sql.="arr_propiedad_actual,";
if(!empty($_GET['arr_general']))
$sql.="arr_general,";
if(!empty($_GET['coment']))
$sql.="comentario,";
$sql.="fecha,";
if(!empty($_GET['nombre_evaluador']))
$sql.="nombre_evaluador,";
if(!empty($_GET['telefono_evaluador']))
$sql.="telefono_evaluador,";
if(!empty($_GET['direccion_evaluador']))
$sql.="direccion_evaluador,";
$sql.="curp";

$sql.=")";

$sql.="VALUES(";
if(!empty($_GET['arr_pagos']))
$sql.="'$arr_pagos',";
if(!empty($_GET['arr_propiedad_actual']))
$sql.="'$arr_propiedad_actual',";
if(!empty($_GET['arr_general']))
$sql.="'$arr_general',";
if(!empty($_GET['coment']))
$sql.="'$comentario',";

$sql.="CURDATE(),";

if(!empty($_GET['nombre_evaluador']))
$sql.="'$nombre_evaluador',";
if(!empty($_GET['telefono_evaluador']))
$sql.="'$telefono_evaluador',";
if(!empty($_GET['direccion_evaluador']))
$sql.="'$direccion_evaluador',";
$sql.="'$curp'";

$sql.=")";


	
	if (!mysql_query($sql,$con))
  {
  echo $sql;
  die('Error 1 al insertar el registro a la base de datos ' . mysql_error());
  }
$id = mysql_insert_id();
 mysql_query($sqlact,$con);
echo '<script> alert("Calificacion Agregada Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
 }
 
 else echo '<script> window.location = "../../"; </script>';

?>

