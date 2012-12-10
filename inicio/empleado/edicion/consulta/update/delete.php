<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";

$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Borrar Arrendado')";

$dir="".$_SERVER['DOCUMENT_ROOT']."/rankinginfo/uploads/img12/"."$_SESSION[curp]";


//Borrar ESCOLARIDAD
$sql="SELECT clave_escolaridad from empleado WHERE curp='$_SESSION[curp]'";


if(!($result=mysql_query($sql)))
{
   	die('Error 0 al actualizar el registro a la base de datos ' . mysql_error());
} 
while($row=mysql_fetch_array($result))
{
   $clave_escolaridad=$row["clave_escolaridad"];
}

if(mysql_num_rows($result)!=0)
{
	$sql= "DELETE FROM escolaridad WHERE clave = '$clave_escolaridad'";

	if(!($result=mysql_query($sql)))
		{
			die('Error 1 al actualizar el registro a la base de datos ' . mysql_error());
		}
  
}

// Borrar CALIFICACION Y EMP_CALIF
$sql="SELECT clave FROM emp_calif WHERE curp='$_SESSION[curp]'";

if(!($result=mysql_query($sql)))
{
   	die('Error 2 al actualizar el registro a la base de datos ' . mysql_error());
} 
while($row=mysql_fetch_array($result))
{
   $clave_calif=$row["clave"];
}

if(mysql_num_rows($result)!=0)
{
	$sql= "DELETE FROM emp_calif WHERE clave = '$clave_calif'";

	if(!($result=mysql_query($sql)))
		{
			die('Error 3 al actualizar el registro a la base de datos ' . mysql_error());
		}
		
	$sql= "DELETE FROM calificacion WHERE clave ='$clave_calif'";

	if(!($result=mysql_query($sql)))
		{
			die('Error 4 al actualizar el registro a la base de datos ' . mysql_error());
		}
  
}

$sql="DELETE FROM empleado WHERE curp = '$_SESSION[curp]'";
if(!($result=mysql_query($sql)))
	{
		die('Error 5 al actualizar el registro a la base de datos ' . mysql_error());
	}
  
	mysql_query($sqlact, $con);
echo '<script> alert("Eliminado Exitosamente"); window.location = "../../"; </script>';

mysql_close($con);
?>

