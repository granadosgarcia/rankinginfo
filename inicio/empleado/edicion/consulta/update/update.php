<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";

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
VALUES ('$_SESSION[usuario_id]', NOW(), 'Edicion Empleado')";

$sql="
UPDATE empleado SET";

$sql.=" curp				= '$curp'";

if(!empty($_POST['nombres']))
$sql.=", nombres = '$nombres'";

if(!empty($_POST['apellido_paterno']))
$sql.=", apellido_paterno 	= '$apellido_paterno'";

if(!empty($_POST['apellido_materno']))
$sql.=", apellido_materno 	= '$apellido_materno'";

if(!empty($_POST['domicilio']))
$sql.=", domicilio 	= '$domicilio'";

if(!empty($_POST['telefono_particular']))
$sql.=", telefono_particular    	= '$telefono_particular'";

if(!empty($_POST['telefono_personal']))
$sql.=", telefono_personal	 	= '$telefono_personal'";

if(!empty($_POST['estado_civil']))
$sql.=", estado_civil	= '$estado_civil'";

if(!empty($_POST['nombre_conyuge']))
$sql.=", nombre_conyuge = '$nombre_conyuge'";

if(!empty($_POST['patron_anterior']))
$sql.=", patron_anterior	= '$patron_anterior'";

if(!empty($_POST['patron_actual']))
$sql.=", patron_actual			= '$patron_actual'";

if(!empty($_POST['responsable_actual']))
$sql.=", responsable_actual		= '$responsable_actual'";

if(!empty($_POST['telefono_patronactual']))
$sql.=", telefono_patronactual 		= '$telefono_patronactual'";

if(!empty($_POST['domicilio_patronactual']))
$sql.=", domicilio_patronactual		= '$domicilio_patronactual'";

if(!empty($_POST['telefono_patronanterior']))
$sql.=", telefono_patronanterior		= '$telefono_patronanterior'";

if(!empty($_POST['domicilio_patronanterior']))
$sql.=", domicilio_patronanterior		= '$domicilio_patronanterior'";

if(!empty($_POST['empleo_anterior']))
$sql.=", empleo_anterior		= '$empleo_anterior'";

if(!empty($_POST['tiempo_trabajoanterior']))
$sql.=", tiempo_trabajoanterior		= '$tiempo_trabajoanterior'";

if(!empty($_POST['habilidades']))
$sql.=", habilidades		= '$habilidades'";

$sql.=" WHERE 
curp ='$curp'";


	if (!mysql_query($sql,$con))
  {
    	echo "<br>".$sql."<br><br>";

  	die('Error al actualizar el registro a la base de datos ' . mysql_error());
  }
  
    else  if(!empty($_FILES['file']['name'][0]) ||
  			!empty($_FILES['file']['name'][1])  ||
  			!empty($_FILES['file']['name'][2])  ||
  			!empty($_FILES['file']['name'][3])  ||
  			!empty($_FILES['file']['name'][4]) ||
  			!empty($_FILES['file']['name'][5])) {
  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/image_upload_E.php";
  }
  
  $sql="
UPDATE escolaridad SET";
$sql.=" clave		= '$_POST[clave]'";
if(!empty($_POST['grado_escolar ']))
$sql.=", grado_escolar 		= '$_POST[grado_escolar]'";

if(!empty($_POST['lugar_estudio ']))
$sql.=", lugar_estudio 		= '$_POST[lugar_estudio]'";
$sql.="WHERE 
clave='$_POST[clave]'";
  
	if (!mysql_query($sql,$con))
  {
  	echo "<br>".$sql."<br><br>";
  	die('Error al actualizar el registro a la base de datos ' . mysql_error());
  }
  
	mysql_query($sqlact, $con);
  echo '<script> alert("Agregado Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
?>

