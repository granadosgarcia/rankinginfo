<?php 

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";


$querybusqueda = $_GET['query'];
$querybusqueda = mysql_real_escape_string($querybusqueda);
$palabrasquery1 = $querybusqueda;
$palabrasquery = array_unique(explode(" ", $querybusqueda));
$numeropalabras = count($palabrasquery);

if($numeropalabras == 1)
{
	$sql= "SELECT DISTINCT *
	FROM empleado
	WHERE 
	nombres regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
	OR apellido_paterno regexp'[[:<:]]".$palabrasquery1."[[:>:]]' 
	OR apellido_materno regexp'[[:<:]]".$palabrasquery1."[[:>:]]' 
	OR curp = '".$palabrasquery1."'
	OR telefono_particular ='".$palabrasquery1."'";
}

else
{

	$sql.= "SELECT DISTINCT * FROM empleado WHERE";

	for($i=0; $i<$numeropalabras; $i++)
	{
		
		if($i==0)
			$sql.=" (";
		else 
			$sql.=" AND (";


		$sql.= "
			nombres regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]'
			OR apellido_paterno regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]' 
			OR apellido_materno regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]' 
			OR curp = '".$palabrasquery[$i]."'
			OR telefono_particular ='".$palabrasquery[$i]."'";
	}
}




if(!($resultado=mysql_query($sql,$con)))
{
	die ('<br>ERROR '.mysql_error());
}
else 
{
?>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>  
	  	<title>Consulta de Arrendados</title>
	  	<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php"; ?>		
		<link rel='stylesheet' href='/rankinginfo/css/jquery.dataTables.css' type='text/css' charset='utf-8'>
		<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.js'></script>
		<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.dataTables.js'></script>
		
		<script type='text/javascript' charset='utf-8'>
			$(document).ready(function() {
			$('#tabla').dataTable();
			} );
		</script>
				
				
		<script type='text/javascript' charset='utf-8'></script>

		
	</head>
	
	<body>

		<div id='entero'>
  
   			<div id='wrapper'>
	   				
	   				<div id='header'>
	   					<h1>Usuario a Calificar</h1>
					</div><!-- </header> -->
					
					<div id='contenedortabla'>
						<form method='GET' action='actualizacion/'>

							<table id ='tabla'>

								<thead>	
									<tr role='row'>
									<th class='sorting' role='columnheader' tabindex='0'></th>
									<th class='sorting' role='columnheader' tabindex='0'>Nombre</th>
									<th class='sorting' role='columnheader' tabindex='0'>Apellido Paterno</th>
									<th class='sorting' role='columnheader' tabindex='0'>Apellido Materno</th>
									<th class='sorting' role='columnheader' tabindex='0'>CURP</th>
									<th class='sorting' role='columnheader' tabindex='0'>Telefono</th>
								</tr>
								</thead>
								<tbody>
		
<?php 
} 

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php"; 

while($row = mysql_fetch_array($resultado)){ 
	
?>
			
									<tr class='infooo'>
										<td><input type='radio' name='consulta' value='<?php echo $row['curp']?>'></td>
										<td><?php echo $row['nombres']?></td>
										<td><?php echo $row['apellido_paterno']?></td>
										<td><?php echo $row['apellido_materno']?></td>
										<td><?php echo $row['curp']?></td>
										<td><?php echo $row['telefono_particular']?></td>
									</tr>
<?php } ?>
								</tbody>
							</table>
						<input type='submit' name='ok' value='Selecci&oacute;n' class='califica'>
					</form>
				</div><!-- </contenedortabla> -->
			</div><!-- </wrapper> -->
		</div><!-- </entero> -->
	</body>

</html>

<?php mysql_close($con);?>