<?php 
/* Includes de PHP */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$i=0;
$sql= "SELECT fecha from relacion_juicios j WHERE DATEDIFF(j.fecha,CURDATE())<=15 AND DATEDIFF(j.fecha,CURDATE())>=-15";

if(!($resultado=mysql_query($sql,$con)))
{
	die ('<br>ERROR '.mysql_error());
}
else {

	while($row = mysql_fetch_array($resultado)){
		$notifications[$i] =$row['fecha']."//";
		$i++;
	}
	
	if (count($resultado)>0)
	{
?>
	<div id="notifications" name="notifications">

<a class="edita2" href="/rankinginfo/inicio/juicios/consulta/tabla/notification.php">
Hay <?php echo count($notifications) ?> Juicios cerca de cumplirse
</a>
	</div>
<?php	
	}
}



mysql_close($con);
?>
