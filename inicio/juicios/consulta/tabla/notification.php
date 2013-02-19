<?php
/* Includes de PHP */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";


$sql= "SELECT * from relacion_juicios j WHERE DATEDIFF(j.fecha,CURDATE())<=15 AND DATEDIFF(j.fecha,CURDATE())>=-15";



if(!($resultado=mysql_query($sql)))
{
	die ($sql."Error".mysql_error());
}
else { ?>
<html>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>  
	   
	   <title>Consulta de Arrendados</title>
<link rel='stylesheet' href='/rankinginfo/css/estilo.css' type='text/css' charset='utf-8'>
<link rel='stylesheet' href='/rankinginfo/css/jquery.dataTables.css' type='text/css' charset='utf-8'>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.js'></script>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.dataTables.js'></script>


<script type='text/javascript' charset='utf-8'>
			$(document).ready(function() {
				$('#tabla').dataTable();
			} );
		</script>
		


<meta charset='UTF-8'>
		</head>
	<body>

<div id='entero'>
  
   			<div id='wrapper2'>
	
					
					<div id='contenedortabla'>

	<?php	include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_juicios.php"; ?>
	<br>	<br>	<br>
		<form method='GET' action='update/'>

		 <table id ='tabla'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>S</th>

		<th class='sorting' role='columnheader' tabindex='0'>Actor</th>
		<th class='sorting' role='columnheader' tabindex='0'>Demandado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Juicio</th>
		<th class='sorting' role='columnheader' tabindex='0'>Expediente</th>
		<th class='sorting' role='columnheader' tabindex='0'>Juzgado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Estatus</th>
		<th class='sorting' role='columnheader' tabindex='0'>Ultima Actuacion </th>
		<th class='sorting' role='columnheader' tabindex='0'>S.Actuacion</th>
		<th class='sorting' role='columnheader' tabindex='0'>S.Actuacion</th>
		<th class='sorting' role='columnheader' tabindex='0'>Estado Procesal y Tramite Pendiente</th>
		<th class='sorting' role='columnheader' tabindex='0'>Comentario</th>
		<th class='sorting' role='columnheader' tabindex='0'>Lugar</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha</th>
					</tr>
		</thead>
		<tbody>


<?php while($row = mysql_fetch_array($resultado)){   ?>
			
		<tr class='infooo'>
				<td><input type='radio' name='consulta' class='case' value='<?php echo $row['id'] ?>' > </td>
			
				<td><?php echo $row['actor_nombres']." ".$row['actor_apellido_paterno']." ".$row['actor_apellido_materno'] ?></td>
				<td><?php echo $row['demandado_nombres']." ".$row['demandado_apellido_paterno']." ".$row['demandado_apellido_materno'] ?></td>				<td><?php echo $row['juicio'] ?></td>
				<td><?php echo $row['expediente'] ?></td>
				<td><?php echo $row['juzgado'] ?></td>
				<td><?php echo $row['estatus'] ?></td>
				<td><?php echo $row['ultima_actuacion'] ?></td>
				<td><?php echo $row['s_actuacion_01'] ?></td>
				<td><?php echo $row['s_actuacion_02'] ?></td>
				<td><?php echo $row['estado_procesal_tramite_pendiente'] ?></td>
				<td><?php echo $row['comentario_01'] ?></td>
				<td><?php echo $row['lugar'] ?></td>
				<td><?php echo $row['fecha'] ?></td>
		</tr>
	<?php	} ?>


</tbody>
</table>
<div id='ko'>
<input type='submit' name='ok' value='Selecci&oacute;n' class='califica'>
</div>
</form>
	
</div>

	
	</div>

</div>
</body>

</html>
<?php
}
mysql_close($con);
?>