<?php 


/* Includes de PHP */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";


$querybusqueda = $_GET['query'];
$querybusqueda = mysql_real_escape_string($querybusqueda);
$palabrasquery1 = $querybusqueda;
$palabrasquery = array_unique(explode(" ", $querybusqueda));
$numeropalabras = count($palabrasquery);


/* Query para seleccionar a los clientes vw cuando solo se selecciono a uno */
if($numeropalabras == 1)
{
$sql= "SELECT DISTINCT *
FROM cliente_vw
WHERE 
nombre_cliente regexp '[[:<:]]".$palabrasquery1."[[:>:]]'
OR direccion regexp'[[:<:]]".$palabrasquery1."[[:>:]]' 
OR curp = '".$palabrasquery1."'
OR telefono ='".$palabrasquery1."'
OR estado ='".$palabrasquery1."'
OR poblacion='".$palabrasquery1."'";
}


else
{
/* Query para seleccionar a más de un cliente vw */
	$sql.= " SELECT DISTINCT *
		FROM cliente_vw
		WHERE ";


	for($i=0; $i<$numeropalabras; $i++)
	{
		if($i==0)
			$sql.=" (";
		else 
			$sql.=" AND (";


		$sql.= "
			nombre_cliente regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]'
			OR direccion regexp '[[:<:]]".$palabrasquery[$i]."[[:>:]]' 
			OR curp = '".$palabrasquery[$i]."'
			OR telefono ='".$palabrasquery[$i]."'
			OR estado ='".$palabrasquery[$i]."'
			OR poblacion='".$palabrasquery[$i]."')";		
	}
}


/* Comprobación de error y ejecución del query */
if(!($resultado=mysql_query($sql,$con)))
{
	die ('<br>ERROR '.mysql_error());
}
else echo
"<html>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>  
	   
	   <title>Consulta de Volkswagen</title>
<link rel='stylesheet' href='/rankinginfo/css/estilo.css' type='text/css' charset='utf-8'>
<link rel='stylesheet' href='/rankinginfo/css/jquery.dataTables.css' type='text/css' charset='utf-8'>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.js'></script>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.dataTables.js'></script>

<script type='text/javascript' charset='utf-8'>
			$(document).ready(function() {
				$('#tabla').dataTable();
			} );
		</script>
		
<SCRIPT language='javascript'>
$(function(){
 
    // add multiple select / deselect functionality
    $('#selectall').click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $('.case').click(function(){
 
        if($('.case').length == $('.case:checked').length) {
            $('#selectall').attr('checked', 'checked');
        } else {
            $('#selectall').removeAttr('checked');
        }
 
    });
});
</SCRIPT>

<meta charset='UTF-8'>
		</head>
	<body>

<div id='entero'>
  
   			<div id='wrapper'>
	   				<div id='header'>
	   					<h1>Resultados de Búsqueda</h1>
					</div>
					
					<div id='contenedortabla'>";
					
		include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php";
		echo "<input type='checkbox' id='selectall'/>";		
echo " 	<form method='GET' action='update/'>

		 <table id ='tabla'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>S</th>
		<th class='sorting' role='columnheader' tabindex='0'>Nombre</th>
		<th class='sorting' role='columnheader' tabindex='0'>Direccion</th>
		<th class='sorting' role='columnheader' tabindex='0'>CURP</th>
		<th class='sorting' role='columnheader' tabindex='0'>Estado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Poblacion</th>
		<th class='sorting' role='columnheader' tabindex='0'>Saldo</th>
		<th class='sorting' role='columnheader' tabindex='0'>Saldo Atrasado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Semanas Atraso</th>
		<th class='sorting' role='columnheader' tabindex='0'>Último Abono</th>

					</tr>
		</thead>
		<tbody>";


while($row = mysql_fetch_array($resultado)){ 
			
		echo "<tr class='infooo'>";
				echo "<td><input type='checkbox' name='consulta[]' class='case' value='".$row['curp']."'> </td>";
			
				echo "<td>". $row['nombre_cliente']. " </td>";
				echo "<td>". $row['direccion']. "</td>";
				echo "<td>". $row['curp']. "</td>";
				echo "<td>". $row['estado']. "</td>";
				echo "<td>". $row['poblacion']. " </td>";
				echo "<td>". $row['saldo']. " </td>";
				echo "<td>". $row['saldo_atrasado']. " </td>";
				echo "<td>". $row['semanas_atraso']. " </td>";
				echo "<td>". $row['ultimo_abono']. " </td>";

				
				
		echo "</tr>";
		}


echo "</tbody>
</table>

<!--<input type='submit' name='ok' value='Selecci&oacute;n' class='califica'>-->
</form>
	
</div>

	
	</div>

</div>
</body>

</html>";
mysql_close($con);
?>