<?php
error_reporting(E_ERROR);

/* Includes de php */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

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
   $sql1[$j]="SELECT * from arr_calif as a, calificacion as c WHERE a.curp = '".$curp[$j]."' GROUP BY c.clave";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   $j++;
}

?>
<!-- HTML -->
<html>
		<head>
			
			<link rel="stylesheet" href="/rankinginfo/css/estilo1.css" type="text/css" charset="utf-8">
		
			<script src="/rankinginfo/js/jquery-1.8.2.min.js"></script>
<SCRIPT language="javascript">
function word() {
    document.myform.action = '/rankinginfo/inicio/arrendado/consulta/descarga/word.php';
}
function mail() {
            window.location.href="mailto:?subject="+document.title+"&body="+escape(window.location.href);
}
function excel() {
    document.myform.action = '/rankinginfo/inicio/arrendado/consulta/descarga/excel.php';
}
	
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
		<meta charset='UTF-8'>

		</head>
<body>
<div id="entero">
	<div id="wrapper">
		<div id="header" class="noPrint">
	<h1 >Resultados de b&uacute;squeda</h1>
		</div>
		<form method="GET" name="myform">
		<div id="botonesdescarga" class="noPrint">
			<a href="javascript:window.print();"><input type="button" value="Imprimir"></a>
			<input type="checkbox" id="selectall" checked="true"/>	
			<input type="submit" onClick="excel()"value="Excel">
			<input type="submit" onClick="word()" value="Word">
			<a href="javascript:mail()" value="Mail">Mail</a>
 		</div>
<div id="divarrendadoscompleto">
<?php while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { ?>

		<input checked="true" style="visibility:hidden;" name="consulta[]" type="checkbox" value="<?php echo $row['curp'] ?>">

			<div id="infoarrendados">
		
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
			<?php }if (!empty($row["telefono_particular"])) { ?>
									<tr>		
										<td>Telefono de Casa:</td>
										<td><?php echo $row["telefono_casa"] ?></td>
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
										<td>Tel�fono Arrendador Actual:</td>
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
										<td>Tel�fono Arrendador Anterior:</td>
										<td><?php echo $row["telefono_arrendador_anterior"] ?></td>
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
?>
</div>

</form>


