<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP/1.0
header("Content-type: application/msword");
header('Content-Disposition: attachment; filename="Registro.doc";');
error_reporting(E_ERROR);

/* Includes de php */
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
   $sql[$i]="SELECT * from empleado WHERE curp='".$curp[$i]."' ";
   
   
   
   $resultado[$i]=mysql_query($sql[$i],$con);
   if (!$resultado[$i]) { // add this check.
    die('Invalid query: ' . mysql_error());
    }
htmlentities($resultado[$i]);
   $i++;
}


$j=0;
foreach($consultas as $consulta)
{
   $curp[$j]= $consulta;
   $sql1[$j]="SELECT * from emp_calif as a, calificacion as c WHERE a.curp = '".$curp[$j]."' GROUP BY c.clave";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   
   $j++;
}

?>
<!-- HTML -->
<html>
		<head>
			
		
			<script src="/rankinginfo/js/jquery-1.8.2.min.js"></script>
		<meta charset='UTF-8'>

		</head>
<body>

<div id="entero">
	<div id="wrapper">
		<div id="header">
	<h1 >Resultados de b&uacute;squeda</h1>
		</div>
		

<?php while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { ?>


			<div id="infoarrendados">
		
					<div id="notcalif">
		
							<div id="detallespers">
								<table>
									<tr>
										<td>Nombre: </td>
										<td><?php echo $row["nombres"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"]?></td>
									</tr>
									
									<tr>
										<td>Curp:</td>
										<td><?php echo $row["curp"] ?></td>
									</tr>
<?php if (!empty($row["domicilio_actual"])) { ?>
									<tr>
										<td>Domicilio Actual:</td>
										<td><?php echo $row["domicilio"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_particular"]) && !empty($row["telefono_personal"])) { ?>			
									<tr>
			<?php if (!empty($row["estado_civil"])) { ?>							
										<td>Telefono Personal:</td>
										<td><?php echo $row["telefono_personal"] ?></td>
			<?php } ?>						
				
			<?php if (!empty($row["telefono_particular"])) { ?>		
										<td>Telefono Particular:</td>
										<td><?php echo $row["telefono_particular"] ?></td>
										<?php } ?>
									</tr>
									
									<?php } if (!empty($row["estado_civil"])) { ?>										
									<tr>
										<td>Estado Civil:</td>
										<td><?php echo $row["estado_civil"] ?></td>
									</tr>
<?php } if (!empty($row["nombre_conyuge"])) { ?>										
									<tr>
										<td>Conyuge:</td>
										<td><?php echo $row["nombre_conyuge"] ?></td>
									</tr>
<?php } if (!empty($row["responsable_actual"])) { ?>										
									<tr>
										<td>Responsable Actual:</td>
										<td><?php echo $row["responsable_actual"] ?></td>
									</tr>
										
<?php } if (!empty($row["empleo_anterior"])) { ?>										
									<tr>
										<td>Empleo Anterior:</td>
										<td><?php echo $row["empleo_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["tiempo_trabajoanterior"])){ ?>										
									<tr>
										<td>Tiempo del Trabajo Anterior:</td>
										<td><?php echo htmlentities($row["tiempo_trabajoanterior"]) ?></td>
									</tr>
<?php } if (!empty($row["tiempo_trabajoanterior"])){ ?>										
									<tr>
										<td>Habilidades:</td>
										<td><?php echo $row["habilidades"] ?></td>
									</tr>
<? } ?>
							</div>
		
<!--
							<div id="fotos">
							<table>
								<tr>
									<td>
										<p>Foto</p>
<?php if (!empty($row["img_foto"])) { ?>	
										<img height="100px" width="150px" src="<?php echo $row["img_foto"]?>"/>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php } ?> 
									</td>
								
								
									<td>
										<p>IFE</p>
									<?php if (!empty($row["img_ife"])) { ?>	
										<img height="100px" width="150px" src="<?php echo $row["img_ife"]?>"/>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php }?>				
									</td>
								
								
								
									<td>
										<p>Comprobante Domiciliario</p>
										<?php if (!empty($row["img_comprobante_domicilio"])) { ?>	
										<img height="100px" width="150px" src="<?php echo $row["img_comprobante_domicilio"]?>"/>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
							
								
									<td>
										<p>Comprobante de Trabajo</p>
										<?php if (!empty($row["img_comprobante_trabajo"])) { ?>	
										<img height="100px" width="150px" src="<?php echo $row["img_comprobante_trabajo"]?>"/>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
									

								</tr>
							</table>
							</div>
-->
		
							<div id="patrones">
								<table>
								
<?php if (!empty($row["patraon_actual"])) { ?>	
									<tr>
										<td>Patron Actual:</td>
										<td><?php echo $row["patron_actual"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_patronactual"])) { ?>									
									<tr>
										<td>Domicilio Patron Actual:</td>
										<td><?php echo $row["domicilio_patronactual"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_patronactual"])) { ?>									
									<tr>
										<td>Teléfono Patron Actual:</td>
										<td><?php echo $row["telefono_patronactual"] ?></td>
									</tr>
<?php } 
	if (!empty($row["patron_anterior"])) { ?>
									<tr>
										<td>Patron Anterior:</td>
										<td><?php echo $row["patron_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_patronanterior"])) { ?>
									<tr>
										<td>Domicilio Patron Anterior:</td>
										<td><?php echo $row["domicilio_patron_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_patronanterior"])) { ?>
									<tr>
										<td>Teléfono Patron Anterior:</td>
										<td><?php echo $row["telefono_patronanterior"] ?></td>
									</tr>
<?php } ?>
								</table>
							</div>
		
					</div>
		
					<div id="calificacionesdiv">
					
<?php while($row=mysql_fetch_array($resultado1[$k])){ ?>							
								<table class="califs">
<?php if (!empty($row["fecha"])) { ?>
<tr><td> Calificaciones</td></tr>
								<tr>
								<td>Fecha:</td>
								<td> <?php echo $row["fecha"] ?></td>
								</tr>
<?php } ?>
								<?php if (!empty($row["emp_desempeno"])) { ?>
									<tr>
										<td>Desempeño:</td>
										<td><?php
										switch($row["emp_desempeno"]){
										
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
		<?php  if (!empty($row["emp_calif_anterior"])) { ?>
							
									<tr>
										<td>Calificacion Empleo anterior:</td>
										<td><?php
										switch($row["emp_calif_anterior"]){
										
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
								<?php } if (!empty($row["comentario"])) { ?>
								<table class="comentarios">
								<tr>
								 
								<td class="comment">Comentarios: </br>
										<?php echo $row["comentario"];?></td>
								
								</tr>
								</table>
								<?php } ?>
<?php }?>					</div>
							
							<div id="escolaridad">
							
							</div>
		
			</div>
<?php	
			$k++;
	}
?>



