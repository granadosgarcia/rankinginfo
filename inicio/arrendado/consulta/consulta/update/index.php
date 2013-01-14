<?php
error_reporting(E_ERROR);

/* Includes de php */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Consulta Arrendado')";
/* Contador para llenar el arreglo de consultas */
$i=0;
$k=0;
/* GET */
$consultas = $_GET['consulta'];
$_SESSION['consultadescarga']= $consultas;

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
   $sql1[$j]="SELECT * from arr_calif WHERE curp = '".$curp[$j]."' GROUP BY id";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   $j++;
}

?>
<!-- HTML -->
<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

			<script type="text/javascript" src="/rankinginfo/js/jquery-1.8.2.min.js"></script>

			<link rel="stylesheet" href="/rankinginfo/css/estilo1.css" type="text/css" charset="utf-8">
		<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/rankinginfo/js/fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="/rankinginfo/js/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />


<link rel="icon" href="/rankinginfo/img/favicon.ico" >

<script type="text/javascript">
		$(document).ready(function() {

			$(".imagengrande").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				// helpers : {
				// 	overlay : null
				// }
			});
		});
</script>


<SCRIPT language="javascript">
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});
</SCRIPT>

		</head>
<body>
<div id="entero">
	<div id="wrapper">
		<div id="header" class="noPrint">
	<h1 >Resultados de b&uacute;squeda</h1>
		</div>
		<div id="botonesdescarga" class="noPrint">
			<a href="javascript:window.print();"><input type="button" value="Imprimir"></a>
			<a href="../../descarga/word.php"><input type="submit" value="Word"></a>
			<a href="../../"><input type="submit" value="Atr&aacute;s"></a>
<!--
			<a href="../../descarga/excel.php"><input type="submit" value="Excel"></a>
			<a href="../../descarga/mail.php"><input type="submit" value="Mail"></a>
-->
 		</div>
<div id="divarrendadoscompleto">
<?php while($row=mysql_fetch_array($resultado[$k])) { ?>
<br>
		<input checked="true" style="visibility:hidden;" name="consulta[]" type="checkbox" value="<?php echo $row['curp'] ?>">

			<div id="infoarrendados<?php echo $k;?>" class="infoarrendados">
		
					<div id="notcalif">
		
							<div id="detallespers">
								<table>
									<tr>
										<td><label class="negritas">Nombre: </label></td>
										<td><?php echo $row["nombre"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"]?></td>
									</tr>
									
									<tr>
										<td><label class="negritas">Curp:</label></td>
										<td><?php echo $row["curp"] ?></td>
									</tr>
<?php if (!empty($row["clave_ife"])) { ?>
									<tr>
										<td><label class='negritas'>Clave del IFE:</label></td>
										<td><?php echo $row["clave_ife"] ?></td>
									</tr>
<?php } if (!empty($row["calle"]) || !empty($row["no_exterior"])) { ?>
									<tr>
										<td>Domicilio Actual:</td>
<?php if (!empty($row["calle"])) {?>							
										<td><label class="negritas">Calle: </label class="negritas"><?php echo $row["calle"] ?></td>
<?php } ?>

<?php if (!empty($row["no_interior"])) { ?>							
										<td><label class="negritas">No. Interior: </label class="negritas"><?php echo $row["no_interior"] ?></td>
<?php } ?>

<?php if (!empty($row["no_exterior"])) { ?>							
										<td><label class="negritas">No. Exterior: </label class="negritas"><?php echo $row["no_exterior"] ?></td>
<?php } ?>

<?php if (!empty($row["colonia"])) { ?>							
										<td><label class="negritas">Colonia: </label class="negritas"><?php echo $row["colonia"] ?></td>
<?php } ?>

<?php if (!empty($row["ciudad"])) { ?>							
										<td><label class="negritas">Ciudad: </label class="negritas"><?php echo $row["ciudad"] ?></td>
<?php } ?>

<?php if (!empty($row["estado"])) { ?>							
										<td><label class="negritas">Estado: </label class="negritas"><?php echo $row["estado"] ?></td>
<?php } ?>

<?php if (!empty($row["codigo_postal"])) { ?>							
										<td><label class="negritas">Codigo Postal: </label class="negritas"><?php echo $row["codigo_postal"] ?></td>
<?php } ?>

<?php if (!empty($row["municipio"])) { ?>							
										<td><label class="negritas">Municipio: </label class="negritas"><?php echo $row["municipio"] ?></td>
<?php } ?>

<?php if (!empty($row["delegacion"])) { ?>							
										<td><label class="negritas">Delegación: </label class="negritas"><?php echo $row["delegacion"] ?></td>
<?php } ?>
				</tr>


<?php } if (!empty($row["telefono_casa"])) { ?>			
									<tr>						
										<td><label class="negritas">Telefono Casa:</label></td>
										<td><?php echo $row["telefono_casa"] ?></td>
									</tr>s
									
<?php } if (!empty($row["telefono_particular"])) { ?>			
									<tr>						
										<td><label class="negritas">Telefono Particular:</label></td>
										<td><?php echo $row["telefono_particular"] ?></td>
									</tr>
																
<?php } if (!empty($row["estado_civil"])) { ?>										
									<tr>
										<td><label class="negritas">Estado Civil:</label></td>
										<td><?php echo $row["estado_civil"] ?></td>
									</tr>
<?php } if (!empty($row["nombre_conyuge"])) { ?>										
									<tr>
										<td><label class="negritas">Conyuge:</label></td>
										<td><?php echo $row["nombre_conyuge"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_anterior"])) { ?>										
									<tr>
										<td><label class="negritas">Domicilio Anterior:</label></td>
										<td><?php echo $row["domicilio_anterior"] ?></td>
									</tr>
										
<?php } if (!empty($row["nombre_aval"])) { ?>										
									<tr>
										<td><label class="negritas">Nombre Aval:</label></td>
										<td><?php echo $row["nombre_aval"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_aval"])){ ?>										
									<tr>
										<td><label class="negritas">Domicilio Aval:</label></td>
										<td><?php echo $row["domicilio_aval"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_aval"])){?>										
									<tr>
										<td><label class="negritas">Telefono Aval</label>:</td>
										<td><?php echo $row["telefono_aval"] ?></td>
									</tr>
<?php } ?>
								</table>
	
							</div>
		<div class="contain">
							<div id="fotos">
							<table>
								<tr>
									<td>
										<p><label class="negritas">Foto</label></p>
<?php if (!empty($row["img_foto"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_foto"]?>"><img height="100px" width="150px" src="<?php echo $row["img_foto"]?>"/></a>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php } ?> 
									</td>
								
								
									<td>
										<p><label class="negritas">IFE</label></p>
									<?php if (!empty($row["img_ife"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_ife"]?>"><img height="100px" width="150px" src="<?php echo $row["img_ife"]?>"/></a>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php }?>				
									</td>
								
								
								
									<td>
										<p><label class="negritas">Comprobante Domiciliario</label></p>
										<?php if (!empty($row["img_comprobante_domicilio"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_comprobante_domicilio"]?>"><img height="100px" width="150px" src="<?php echo $row["img_comprobante_domicilio"]?>"/></a>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
								</tr>
							</table>
							</div>
		
							<div id="arrendadores">
								<table>
								
<?php if (!empty($row["arrendador_actual"])) { ?>	
									<tr>
										<td><label class="negritas">Arrendador Actual:</td>
										<td><?php echo $row["arrendador_actual"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_arrendador_actual"])) { ?>									
									<tr>
										<td><label class="negritas">Domicilio Arrendador Actual:</td>
										<td><?php echo $row["domicilio_arrendador_actual"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_arrendador_actual"])) { ?>									
									<tr>
										<td><label class="negritas">Teléfono Arrendador Actual:</td>
										<td><?php echo $row["telefono_arrendador_actual"] ?></td>
									</tr>
<?php } 
	if (!empty($row["arrendador_anterior"])) { ?>
										<tr>
										<td><label class="negritas">Arrendador Anterior:</td>
										<td><?php echo $row["arrendador_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_arrendador_anterior"])) { ?>
									<tr>
										<td><label class="negritas">Domicilio Arrendador Anterior:</td>
										<td><?php echo $row["domicilio_arrendador_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_arrendador_anterior"])) { ?>
									<tr>
										<td><label class="negritas">Teléfono Arrendador Anterior:</td>
										<td><?php echo $row["telefono_arrendador_anterior"] ?></td>
									</tr>
<?php } ?>
								</table>
							</div>
		
					</div>
				</div>
					<div id="calificacionesdiv">
<?php 
$contador=0;
while($row=mysql_fetch_array($resultado1[$k])){ ?>
<?php if (!empty($row["fecha"]) && $contador==0) { 
	$contador++;
?>
			<h2>Calificaciones</h2>
<?php } ?>
								<table class="califs">
<?php if (!empty($row["nombre_evaluador"])) { ?>
								<tr>
									<td><label class="negritas">Nombre del Evaluador</label></td>
									<td><?php echo $row["nombre_evaluador"] ?></td></tr>
<?php if (!empty($row["telefono_evaluador"])) { ?>
									<tr><td><label class="negritas">Telefono del Evaluador</label></td>
									<td><?php echo $row["telefono_evaluador"] ?></td></tr>
<?php } if (!empty($row["direccion_evaluador"])) { ?>
									<tr><td><label class="negritas">Dirección del Evaluador</label></td>
									<td><?php echo $row["direccion_evaluador"] ?></td>
								</tr>
<?php } }?>
<?php if (!empty($row["fecha"])) { ?>
								<tr>
								<td><label class="negritas">Fecha:</label></td>
								<td> <?php echo $row["fecha"] ?></td>
								</tr>
<?php } ?>
								<?php if (!empty($row["arr_pagos"])) { ?>
									<tr>
										<td><label class="negritas">Pagos:</label></td>
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
																				
									
									</tr>
		<?php  if (!empty($row["arr_propiedad_anterior"])) { ?>
							
									<tr>
										<td><label class="negritas">Propiedad Anterior:</label></td>
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
										<td><label class="negritas">Propiedad Actual</label></td>
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
										<td><label class="negritas">General:</label></td>
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
								<?php } if (!empty($row["comentario"])) { ?>
								<table class="comentarios">
								<tr>
								 
				

								<td class="comment"><label class="negritas">Comentarios: </label></br>
										<?php echo $row["comentario"];?></td>
								
								</tr>
								</table>
								<?php } ?>
<?php }?>					</div>
		
			</div>
<?php	
			$k++;
	}
	mysql_query($sqlact, $con)
?>
</div>



