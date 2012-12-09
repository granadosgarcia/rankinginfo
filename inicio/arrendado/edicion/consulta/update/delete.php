<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


$dir="".$_SERVER['DOCUMENT_ROOT']."/rankinginfo/uploads/img12/"."$_SESSION[curp]";

$sql="
SELECT clave from arr_calif
WHERE curp='$_SESSION[curp]'";

$sql1="
DELETE
FROM arr_calif
WHERE curp='$_SESSION[curp]'";

$sql2="
DELETE arrendado, calificacion
FROM arrendado JOIN calificacion
WHERE arrendado.curp='$_SESSION[curp]'"; 


$sql3="
DELETE 
FROM arrendado
WHERE curp='$_SESSION[curp]'";


system('/bin/rm -rf ' . escapeshellarg($dir));


if(!($result=mysql_query($sql))){
   	die('Error 0 al actualizar el registro a la base de datos ' . mysql_error());
  } 
   while($row=mysql_fetch_array($result)){
   	$clave=$row['clave']; 
  	$sql2.=" AND calificacion.clave='$clave'";
  	}



  if($contador = mysql_num_rows($result)!=0){
  
  		if (!mysql_query($sql1,$con))
    	die('Error 1 al actualizar el registro a la base de datos ' . mysql_error());
    	
    	if (!mysql_query($sql2,$con))
    	die('Error 2 al actualizar el registro a la base de datos ' . mysql_error());
  }
  else{
  if (!mysql_query($sql3,$con))
  	die('Error 3 al actualizar el registro a la base de datos ' . mysql_error());
}
  
 
  
  
  echo '<script> alert("Actualizado Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
?>

