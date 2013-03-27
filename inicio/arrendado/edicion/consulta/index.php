<?php 

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios5.php";


$querybusqueda = $_GET['query'];
$querybusqueda = mysql_real_escape_string($querybusqueda);
$palabrasquery1 = $querybusqueda;
$palabrasquery = array_unique(explode(" ", $querybusqueda));
$numeropalabras = count($palabrasquery);

if($numeropalabras == 1){
$sql= "SELECT DISTINCT *
FROM arrendado
WHERE 
nombre regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR apellido_paterno regexp'[[:<:]]".$palabrasquery1."[[:>:]]' 
OR apellido_materno regexp'[[:<:]]".$palabrasquery1."[[:>:]]' 
OR curp = '".$palabrasquery1."'
OR arrendador_actual ='".$palabrasquery1."'
OR telefono_casa ='".$palabrasquery1."'
OR nombre_aval='".$palabrasquery1."'";
}

// else if($numeropalabras>1){
// 	$sql= "SELECT DISTINCT *
// FROM arrendado WHERE 
// nombre regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
// OR apellido_paterno = '[[:<:]]".$palabrasquery1."[[:<:]]' 
// OR apellido_materno = '[[:<:]]".$palabrasquery1."[[:<:]]' 
// OR curp = '".$palabrasquery1."'
// OR arrendador_actual ='".$palabrasquery1."'
// OR telefono_casa ='".$palabrasquery1."'
// OR nombre_aval='".$palabrasquery1."'";
// $sql.="EXISTS(
// 	SELECT * FROM arrendado WHERE";

else
{

	$sql.= " SELECT DISTINCT *
		FROM arrendado
		WHERE ";


	for($i=0; $i<$numeropalabras; $i++)
	{
		
		if($i==0)
			$sql.=" (";
		else 
			$sql.=" AND (";


		$sql.= "
			nombre regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]'
			OR apellido_paterno regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]' 
			OR apellido_materno regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]' 
			OR curp = '".$palabrasquery[$i]."'
			OR arrendador_actual ='".$palabrasquery[$i]."'
			OR telefono_casa ='".$palabrasquery[$i]."'
			OR nombre_aval='".$palabrasquery[$i]."')";		
	}
}




//Intento
/*
if($numeropalabras>1)
for($i=1; $i< $numeropalabras; $i++){
$sql.= "AND (nombre LIKE ' %".$palabrasquery[$i]."%'
AND apellido_paterno = '".$palabrasquery[$i]."' AND 
apellido_materno = '".$palabrasquery[$i]."' AND 
curp = '".$palabrasquery[$i]."')";
}
$sql.="ORDER BY LENGTH(apellido_paterno) DESC";
*/


	if(!($resultado=mysql_query($sql,$con))){
			echo "".$sql."<br><br>";

		die ('<br>ERROR '.mysql_error());
		}
	else echo
"<html>
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
		
		</head>
	<body>

<div id='entero'>
  
   			<div id='wrapper'>
	   				<div id='header'>
	   					<h1>Arrendado a Editar</h1>
					</div>
					
					<div id='contenedortabla'>
<h3 style='color: #808080; margin: -30px 0px 20px 30px;'>
					Estás en arrendado/edicion</h3>";
/* 	Botones Menu */
	include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php";

echo " 	<form method='post' action='update/'>

		 <table id ='tabla'>

		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>S</th>
		<th class='sorting' role='columnheader' tabindex='0'>Nombre</th>
		<th class='sorting' role='columnheader' tabindex='0'>Apellido Paterno</th>
		<th class='sorting' role='columnheader' tabindex='0'>Apellido Materno</th>
		<th class='sorting' role='columnheader' tabindex='0'>CURP</th>
		<th class='sorting' role='columnheader' tabindex='0'>Arrendador Actual</th>
		<th class='sorting' role='columnheader' tabindex='0'>Arrendador Anterior</th>
		<th class='sorting' role='columnheader' tabindex='0'>Telefono</th>
			
					</tr>
		</thead>
		<tbody>";


while($row = mysql_fetch_array($resultado)){ 
			
		echo"<tr class='infooo'>";
				echo "<td><input checked type='radio' name='consulta' value='".$row['curp']."'> </td>";
			
				echo "<td>". $row['nombre']. " </td>";
				echo "<td>". $row['apellido_paterno']. "</td>";
				echo "<td>". $row['apellido_materno']. "</td>";
				echo "<td>". $row['curp']. "</td>";
				echo "<td>". $row['arrendador_actual']. " </td>";
				echo "<td>". $row['arrendador_anterior']. " </td>";
				echo "<td>". $row['telefono_casa']. " </td>";
				
				
				
		echo "</tr>";
		}


echo "</tbody>
</table>
<div id='ko'>
<input type='submit' name='ok' value='Selecci&oacute;n' class='califica'>
</div>
</form>
	
</div>

	
	</div>

</div>
</body>

</html>";


mysql_close($con);
?>
