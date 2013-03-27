<?php
/* Includes de PHP */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$querybusqueda1 = $_GET['datepicker'];
$querybusqueda1 = mysql_real_escape_string($querybusqueda1);

$ano = $_GET['ano'];
$ano = mysql_real_escape_string($ano);

$mes = $_GET['mes'];
$mes = mysql_real_escape_string($mes);



$querybusqueda = $_GET['query'];
$querybusqueda = mysql_real_escape_string($querybusqueda);
$palabrasquery1 = $querybusqueda;
if (!empty($_GET['query'])){

$sql= "SELECT DISTINCT *
FROM relacion_juicios
WHERE 
actor_nombres regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR actor_apellido_paterno regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR actor_apellido_materno regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR demandado_nombres regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR demandado_apellido_paterno regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR demandado_apellido_materno regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR distrito_juidicial = '".$palabrasquery1."'
OR expediente ='".$palabrasquery1."'
OR fecha ='".$palabrasquery1."'";}

else if (!empty($_GET['ano']) ){
	$sql="SELECT DISTINCT * FROM relacion_juicios
	WHERE
	year(fecha)='".$ano;
	if(!empty($_GET['mes']))
	$sql.= "' AND month(fecha)='".$mes;
	
	$sql.="'";
	}


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
		<form method='GET' onsubmit="return atLeastOneRadio()" action='update/'>

		 <table id ='tabla'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>S</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha</th>
		<th class='sorting' role='columnheader' tabindex='0'>Expediente</th>
		<th class='sorting' role='columnheader' tabindex='0'>Juzgado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Actor</th>
		<th class='sorting' role='columnheader' tabindex='0'>Demandado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Juicio</th>
		<th class='sorting' role='columnheader' tabindex='0'>Ultima Actuacion </th>
		<th class='sorting' role='columnheader' tabindex='0'>S.Actuacion</th>
		<th class='sorting' role='columnheader' tabindex='0'>S.Actuacion</th>
		<th class='sorting' role='columnheader' tabindex='0'>Estado Procesal</th>
		<th class='sorting' role='columnheader' tabindex='0'>Comentario</th>
		<th class='sorting' role='columnheader' tabindex='0'>Distrito Judicial</th>
					</tr>
		</thead>
		<tbody>


<?php while($row = mysql_fetch_array($resultado)){   ?>
			
		<tr class='infooo'>
				<td><input checked type='radio' name='consulta' class='case' value='<?php echo $row['expediente'] ?>' > </td>
				<td><?php  $originalDate = $row['fecha'] ;
					$newDate = date("d-m-Y", strtotime($originalDate));
							echo $newDate;
?></td>
				<td><?php echo $row['expediente'] ?></td>
				<td><?php echo $row['juzgado'] ?></td>
				<td><?php echo $row['actor_nombres']." ".$row['actor_apellido_paterno']." ".$row['actor_apellido_materno'] ?></td>
				<td><?php echo $row['demandado_nombres']." ".$row['demandado_apellido_paterno']." ".$row['demandado_apellido_materno'] ?></td>				<td><?php echo $row['juicio'] ?></td>
				<td><?php echo $row['ultima_actuacion'] ?></td>
				<td><?php echo $row['s_actuacion_01'] ?></td>
				<td><?php echo $row['s_actuacion_02'] ?></td>
				<td><?php echo $row['estado_procesal'] ?></td>
				<td><?php echo $row['comentario_01'] ?></td>
				<td><?php echo $row['distrito_juidicial'] ?></td>
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