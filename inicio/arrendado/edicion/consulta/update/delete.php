<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios5.php";
$fecha =date("F j, Y, g:i a");

$dir="".$_SERVER['DOCUMENT_ROOT']."/rankinginfo/uploads/img12/"."$_SESSION[curp]";

$sql="
SELECT *
FROM arr_calif
WHERE curp='$_SESSION[curp]'";

if(!($result=mysql_query($sql)))
{
	echo $sql;
   	die('Error 0 al actualizar el registro a la base de datos ' . mysql_error());
} 
if($contador = mysql_num_rows($result)!=0)
{
	$sql="
	DELETE
	FROM arr_calif
	WHERE curp='$_SESSION[curp]'";

	if(!($result=mysql_query($sql)))
	{
	   	die('Error 1 al actualizar el registro a la base de datos ' . mysql_error());
	} 
}

$sql="
DELETE 
FROM arrendado WHERE curp='$_SESSION[curp]'"; 

if(!($result=mysql_query($sql)))
{
   	die('Error 2 al actualizar el registro a la base de datos ' . mysql_error());
} 

$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Borrar Arrendado')";

system('/bin/rm -rf ' . escapeshellarg($dir));

  mysql_query($sqlact,$con);
  
  echo '<script> alert("Actualizado Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
?>

