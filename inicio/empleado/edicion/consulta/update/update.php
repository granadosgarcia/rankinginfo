<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios5.php";

 $curp= mysql_real_escape_string($_POST['curp']);
 $nombres= mysql_real_escape_string($_POST['nombres']);
 $apellido_paterno= mysql_real_escape_string($_POST['apellido_paterno']);
 $apellido_materno= mysql_real_escape_string($_POST['apellido_materno']);
 
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
 $clave_ife = mysql_real_escape_string($_POST['clave_ife']);


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

if(!empty($_POST['calle']))
$sql.=", calle= '$calle'";
if(!empty($_POST['no_interior']))
$sql.=", no_interior ='$no_interior'";
if(!empty($_POST['no_exterior']))
$sql.=", no_exterior ='$no_exterior'";
if(!empty($_POST['colonia']))
$sql.=", colonia ='$colonia'";
if(!empty($_POST['ciudad']))
$sql.=", ciudad ='$ciudad'";
if(!empty($_POST['estado']))
$sql.=", estado ='$estado'";
if(!empty($_POST['codigo_postal']))
$sql.=", codigo_postal ='$codigo_postal'";
if(!empty($_POST['municipio']))
$sql.=", municipio = '$municipio'";
if(!empty($_POST['delegacion']))
$sql.=", delegacion = '$delegacion'";

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

if(!empty($_POST['clave_ife']))
$sql.=", clave_ife		= '$clave_ife'";

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
$sql.=", grado_escolar 		= '$grado'";

if(!empty($_POST['lugar_estudio']))
$sql.=", lugar_estudio 		= '$lugar_estudio1'";
if(!empty($_POST['lugar_estudio2']))
$sql.=", lugar_estudio2 		= '$lugar_estudio2'";
if(!empty($_POST['lugar_estudio3']))
$sql.=", lugar_estudio3 		= '$lugar_estudio3'";
if(!empty($_POST['lugar_estudio4']))
$sql.=", lugar_estudio4 		= '$lugar_estudio4'";
if(!empty($_POST['lugar_estudio5']))
$sql.=", lugar_estudio5 		= '$lugar_estudio5'";
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

