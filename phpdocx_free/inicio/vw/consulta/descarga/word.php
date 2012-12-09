<?php

error_reporting(E_ERROR);


header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP/1.0
header("Content-type: application/msword");
header('Content-Disposition: attachment; filename="Registro.doc";');


include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";




/* Contador para llenar el arreglo de consultas */
$i=0;
$k=0;
/* GET */
$consultas = $_GET['consulta'];
/* Llenado del arreglo */
foreach($consultas as $consulta)
{
   $curp[$i]= $consulta;
   $sql[$i]="SELECT * from arrendado WHERE curp='".$curp[$i]."' ";
   
   
   
   $resultado[$i]=mysql_query($sql[$i],$con);
   if (!$resultado[$i]) { // add this check.
    die('Invalid query: ' . mysql_error());
    }

   $i++;
}


$j=0;
foreach($consultas as $consulta)
{
   $curp[$j]= $consulta;
   $sql1[$j]="SELECT * from arr_calif as a, calificacion as c WHERE a.curp = '".$curp[$j]."' GROUP BY c.clave";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   $j++;
}

?>
<!-- HTML -->
<html>
		<head>
		<meta charset='UTF-8'>

		</head>
<body>

<div id="entero">
	<div id="wrapper">
		<div id="header">
	<h1>Resultados de b&uacute;squeda</h1>
		</div>
		
<?php while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { ?>
			<div class="infoarrendados">
		
					<div class="notcalif">
		
							<div class="detallespers">
								<table>
									<tr>
										<td>Nombre</td>
										<td><?php echo $row["nombre"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"]?></td>
									</tr>
									
									<tr>
										<td>Curp</td>
										<td><?php echo $row["curp"] ?></td>
									</tr>
<?php if (!empty($row["domicilio_actual"])) { ?>
									<tr>
										<td>Domicilio Actual</td>
										<td><?php echo $row["domicilio_actual"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_casa"]) && !empty($row["estado_civil"])) { ?>			
									<tr>
			<?php if (!empty($row["estado_civil"])) { ?>							
										<td>Estado Civil</td>
										<td><?php echo $row["estado_civil"] ?></td>
			<?php } ?>						
				
			<?php if (!empty($row["telefono_casa"])) { ?>		
										<td>Telefono</td>
										<td><?php echo $row["telefono_casa"] ?></td>
										<?php } ?>
									</tr>
<?php } if (!empty($row["nombre_conyuge"])) { ?>										
									<tr>
										<td>Conyuge</td>
										<td><?php echo $row["nombre_conyuge"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_anterior"])) { ?>										
									<tr>
										<td>Domicilio Anterior</td>
										<td><?php echo $row["domicilio_anterior"] ?></td>
									</tr>
										
<?php } if (!empty($row["nombre_aval"])) { ?>										
									<tr>
										<td>Nombre Aval</td>
										<td><?php echo $row["nombre_aval"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_aval"])){ ?>										
									<tr>
										<td>Domicilio Aval</td>
										<td><?php echo $row["domicilio_aval"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_aval"])){?>										
									<tr>
										<td>Telefono Aval</td>
										<td><?php echo $row["telefono_aval"] ?></td>
									</tr>
<?php } ?>
								</table>
	
							</div>
		
							<div class="fotos">
							<table>
								<tr>
									<td>
										<p>Foto</p>
<?php if (!empty($row["img_foto"])) { ?>	
										<img src="<?php echo $row["img_foto"]?>"/>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php } ?> 
									</td>
								
								
									<td>
										<p>IFE</p>
									<?php if (!empty($row["img_ife"])) { ?>	
										<img src="<?php echo $row["img_ife"]?>"/>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php }?>				
									</td>
								
								
								
									<td>
										<p>Comprobante Domiciliario</p>
										<?php if (!empty($row["img_comprobante_domicilio"])) { ?>	
										<img src="<?php echo $row["img_comprobante_domicilio"]?>"/>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
								</tr>
							</table>
							</div>
		
							<div class="arrendadores">
								<table>
								
<?php if (!empty($row["arrendador_actual"])) { ?>	
									<tr>
										<td>Arrendador Actual</td>
										<td><?php echo $row["arrendador_actual"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_arrendador_actual"])) { ?>									
									<tr>
										<td>Domicilio Arrendador Actual</td>
										<td><?php echo $row["domicilio_arrendador_actual"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_arrendador_actual"])) { ?>									
									<tr>
										<td>Telefono Arrendador Actual</td>
										<td><?php echo $row["telefono_arrendador_actual"] ?></td>
									</tr>
<?php } 
	if (!empty($row["arrendador_anterior"])) { ?>
										<tr>
										<td>Arrendador Anterior</td>
										<td><?php echo $row["arrendador_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_arrendador_anterior"])) { ?>
									<tr>
										<td>Domicilio Arrendador Anterior</td>
										<td><?php echo $row["domicilio_arrendador_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_arrendador_anterior"])) { ?>
									<tr>
										<td>Telefono Arrendador Anterior</td>
										<td><?php echo $row["telefono_arrendador_anterior"] ?></td>
									</tr>
<?php } ?>
								</table>
							</div>
		
					</div>
		
					<div class="calificacionesdiv">
<?php while($row=mysql_fetch_array($resultado1[$k])){ ?>							
								<table>
<?php if (!empty($row["fecha"])) { ?>
								<tr>
								<td>Fecha:</td>
								<td> <?php echo $row["fecha"] ?></td>
								</tr>
<?php } ?>
								<?php if (!empty($row["arr_pagos"])) { ?>
									<tr>
										<td>Pagos</td>
										<td><?php
										switch($row["arr_pagos"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 ?></td>
										 
										 <?php } if (!empty($row["comentario"])) { ?>
				
									
										<td><p>Comentario</p>
										<?php echo $row["comentario"];?></td>
									
									</tr>
		<?php } if (!empty($row["arr_propiedad_anterior"])) { ?>
							
									<tr>
										<td>Propiedad Anterior</td>
										<td><?php
										switch($row["arr_propiedad_anterior"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 ?></td>
									</tr>
		<?php } if (!empty($row["arr_propiedad_actual"])) { ?>

									<tr>
										<td>Propiedad Actual</td>
										<td><?php
										switch($row["arr_propiedad_actual"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 ?></td>
									</tr>
					<?php } if (!empty($row["arr_general"])) { ?>

									<tr>
										<td>General</td>
										<td><?php
										switch($row["arr_general"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 ?></td>
									</tr>	
					<?php } ?>	
								</table>
<?php }?>					</div>
		
			</div>
<?php	
			$k++;
	}
?>
