<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$sql="SELECT * from arrendado WHERE curp='".$_SESSION['curp']."'";
$resultado=mysql_query($sql, $con);
$to = 'margrangr@hotmail.com';
$subject = 'My Email';
$msg="
<html>
		<head>
		</head>
	<body>

		<h1>Resultados de b&uacute;squeda</h1>
		
		<table>

		<thead>	
		<tr role='row'>
				<th class='sorting' role='columnheader' tabindex='0'>Nombre</th>
				<th class='sorting' role='columnheader' tabindex='0'>Apellido Paterno</th>
				<th class='sorting' role='columnheader' tabindex='0'>Apellido Materno</th>
				<th class='sorting' role='columnheader' tabindex='0'>Domicilio</th>
				<th class='sorting' role='columnheader' tabindex='0'>Telefono</th>
				<th class='sorting' role='columnheader' tabindex='0'>Estado Civil</th>
				<th class='sorting' role='columnheader' tabindex='0'>Arrendador Actual</th>
				<th class='sorting' role='columnheader' tabindex='0'>Arrendador Anterior</th>
				<th class='sorting' role='columnheader' tabindex='0'>Domicilio Anterior</th>
				<th class='sorting' role='columnheader' tabindex='0'>Curp</th>
				<th class='sorting' role='columnheader' tabindex='0'>Nombre Aval</th>					
				<th class='sorting' role='columnheader' tabindex='0'>Domicilio Aval</th>
				<th class='sorting' role='columnheader' tabindex='0'>Telefono Aval</th>
				<th class='sorting' role='columnheader' tabindex='0'>Nombre Conyuge</th>
												</tr>
				</thead>";

while($row=mysql_fetch_array($resultado)){
	$msg.="<tr>
				 <td>".$row['nombre']."</td> 
				 <td>".$row['apellido_paterno']. "</td>
				 <td>".$row['apellido_materno']. "</td>
				 <td>".$row['domicilio_actual']. "</td>
				 <td>".$row['telefono_casa']. " </td>
				 <td>".$row['estado_civil']. " </td>
				 <td>". $row['arrendador_actual']. " </td>
				 <td>". $row['arrendador_anterior']. " </td>
				 <td>". $row['domicilio_anterior']. " </td>
				 <td>". $row['curp']. " </td>
				 <td>". $row['nombre_aval']. " </td>
				 <td>". $row['domicilio_aval']. " </td>
				 <td>". $row['telefono_aval']. " </td>
				 <td>". $row['nombre_conyuge']. " </td>
			
			</tr></table></body></html>";
		

}

		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo $msg;
mail($to, $subject, $msg, $headers);
?>
