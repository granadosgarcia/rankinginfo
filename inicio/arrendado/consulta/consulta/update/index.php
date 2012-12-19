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
			<a href="../../"><input type="submit" value="Menu"></a>
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
										<td>Nombre: </td>
										<td><?php echo $row["nombre"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"]?></td>
									</tr>
									
									<tr>
										<td>Curp:</td>
										<td><?php echo $row["curp"] ?></td>
									</tr>
<?php if (!empty($row["domicilio_actual"])) { ?>
									<tr>
										<td>Domicilio Actual:</td>
										<td><?php echo $row["domicilio_actual"] ?></td>
									</tr>

<?php } if (!empty($row["telefono_casa"])) { ?>			
									<tr>						
										<td>Telefono Personal:</td>
										<td><?php echo $row["telefono_casa"] ?></td>
							
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
<?php } if (!empty($row["domicilio_anterior"])) { ?>										
									<tr>
										<td>Domicilio Anterior:</td>
										<td><?php echo $row["domicilio_anterior"] ?></td>
									</tr>
										
<?php } if (!empty($row["nombre_aval"])) { ?>										
									<tr>
										<td>Nombre Aval:</td>
										<td><?php echo $row["nombre_aval"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_aval"])){ ?>										
									<tr>
										<td>Domicilio Aval:</td>
										<td><?php echo $row["domicilio_aval"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_aval"])){?>										
									<tr>
										<td>Telefono Aval:</td>
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
										<p>Foto</p>
<?php if (!empty($row["img_foto"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_foto"]?>"><img height="100px" width="150px" src="<?php echo $row["img_foto"]?>"/></a>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php } ?> 
									</td>
								
								
									<td>
										<p>IFE</p>
									<?php if (!empty($row["img_ife"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_ife"]?>"><img height="100px" width="150px" src="<?php echo $row["img_ife"]?>"/></a>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php }?>				
									</td>
								
								
								
									<td>
										<p>Comprobante Domiciliario</p>
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
										<td>Arrendador Actual:</td>
										<td><?php echo $row["arrendador_actual"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_arrendador_actual"])) { ?>									
									<tr>
										<td>Domicilio Arrendador Actual:</td>
										<td><?php echo $row["domicilio_arrendador_actual"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_arrendador_actual"])) { ?>									
									<tr>
										<td>Teléfono Arrendador Actual:</td>
										<td><?php echo $row["telefono_arrendador_actual"] ?></td>
									</tr>
<?php } 
	if (!empty($row["arrendador_anterior"])) { ?>
										<tr>
										<td>Arrendador Anterior:</td>
										<td><?php echo $row["arrendador_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["domicilio_arrendador_anterior"])) { ?>
									<tr>
										<td>Domicilio Arrendador Anterior:</td>
										<td><?php echo $row["domicilio_arrendador_anterior"] ?></td>
									</tr>
<?php } if (!empty($row["telefono_arrendador_anterior"])) { ?>
									<tr>
										<td>Teléfono Arrendador Anterior:</td>
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
<?php if (!empty($row["fecha"])) { ?>
								<tr>
								<td>Fecha:</td>
								<td> <?php echo $row["fecha"] ?></td>
								</tr>
<?php } ?>
								<?php if (!empty($row["arr_pagos"])) { ?>
									<tr>
										<td>Pagos:</td>
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
										<td>Propiedad Anterior:</td>
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
										<td>General:</td>
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
								 
				

								<td class="comment">Comentarios: </br>
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



