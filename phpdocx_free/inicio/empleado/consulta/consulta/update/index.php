<?php
header('Content-Type: text/html; charset=utf-8');

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
   
   $sql[$i]="SELECT * from empleado, escolaridad where curp='".$curp[$i]."' ";
   
   
   $resultado[$i]=mysql_query($sql[$i],$con);
   if (!$resultado[$i]) { // add this check.
    die('Invalid query: ' . mysql_error());
    }
$resultado[$i];
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
			
			<link rel="stylesheet" href="/rankinginfo/css/estilo1.css" type="text/css" charset="utf-8">
		
			<script src="/rankinginfo/js/jquery-1.8.2.min.js"></script>
<SCRIPT language="javascript">
function word() {
    document.myform.action = '/rankinginfo/inicio/empleado/consulta/descarga/word.php';
}
function excel() {
    document.myform.action = '/rankinginfo/inicio/empleado/consulta/descarga/excel.php';
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
		<div id="header">
	<h1 >Resultados de b&uacute;squeda</h1>
		</div>
		<form method="GET" action="/rankinginfo/inicio/arrendado/consulta/descarga/excel.php" name="myform">
		<div id="botonesdescarga">
			<a href="javascript:window.print();"><input type="button" value="Imprimir"></a>
			<input type="checkbox" id="selectall" checked="true"/>	
			<input type="submit" onClick="excel()"value="Excel">
			<input type="submit" onClick="word()" value="Word">
		</div>

<?php while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { ?>

		<input checked="true" style="visibility:hidden;" name="consulta[]" type="checkbox" value="<?php echo htmlentities($row['curp']) ?>">

			<div id="infoarrendados">
		
					<div id="notcalif">
		
							<div id="detallespers">
								<table>
									<tr>
										<td>Nombre: </td>
										<td><?php echo htmlentities($row["nombres"])." ".$row["apellido_paterno"]." ".$row["apellido_materno"]?></td>
									</tr>
									
									<tr>
										<td>Curp:</td>
										<td><?php echo htmlentities($row["curp"]) ?></td>
									</tr>
<?php if (!empty($row["domicilio_actual"])) { ?>
									<tr>
										<td>Domicilio Actual:</td>
										<td><?php echo htmlentities($row["domicilio"]) ?></td>
									</tr>
<?php } if (!empty($row["telefono_particular"]) && !empty($row["telefono_personal"])) { ?>			
									<tr>
			<?php if (!empty($row["estado_civil"])) { ?>							
										<td>Telefono Personal:</td>
										<td><?php echo htmlentities($row["telefono_personal"]) ?></td>
			<?php } ?>						
				
			<?php if (!empty($row["telefono_particular"])) { ?>		
										<td>Telefono Particular:</td>
										<td><?php echo htmlentities($row["telefono_particular"]) ?></td>
										<?php } ?>
									</tr>
									
									<?php } if (!empty($row["estado_civil"])) { ?>										
									<tr>
										<td>Estado Civil:</td>
										<td><?php echo htmlentities($row["estado_civil"]) ?></td>
									</tr>
<?php } if (!empty($row["nombre_conyuge"])) { ?>										
									<tr>
										<td>Conyuge:</td>
										<td><?php echo htmlentities($row["nombre_conyuge"]) ?></td>
									</tr>
<?php } if (!empty($row["responsable_actual"])) { ?>										
									<tr>
										<td>Responsable Actual:</td>
										<td><?php echo htmlentities($row["responsable_actual"]) ?></td>
									</tr>
										
<?php } if (!empty($row["empleo_anterior"])) { ?>										
									<tr>
										<td>Empleo Anterior:</td>
										<td><?php echo htmlentities($row["empleo_anterior"]) ?></td>
									</tr>
<?php } if (!empty($row["tiempo_trabajoanterior"])){ ?>										
									<tr>
										<td>Tiempo del Trabajo Anterior:</td>
										<td><?php echo htmlentities($row["tiempo_trabajoanterior"]) ?></td>
									</tr>
<?php } if (!empty($row["tiempo_trabajoanterior"])){ ?>										
									<tr>
										<td>Habilidades:</td>
										<td><?php echo htmlentities($row["habilidades"]) ?></td>
									</tr>
<? } ?>
							</div>
		
							<div id="fotos">
							<table>
								<tr>
									<td>
										<p>Foto</p>
<?php if (!empty($row["img_foto"])) { ?>	
										<img height="100px" width="150px" src="<?php echo htmlentities($row["img_foto"])?>"/>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php } ?> 
									</td>
								
								
									<td>
										<p>IFE</p>
									<?php if (!empty($row["img_ife"])) { ?>	
										<img height="100px" width="150px" src="<?php echo htmlentities($row["img_ife"])?>"/>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php }?>				
									</td>
								
								
								
									<td>
										<p>Comprobante Domiciliario</p>
										<?php if (!empty($row["img_comprobante_domicilio"])) { ?>	
										<img height="100px" width="150px" src="<?php echo htmlentities($row["img_comprobante_domicilio"])?>"/>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
							
								
									<td>
										<p>Comprobante de Trabajo</p>
										<?php if (!empty($row["img_comprobante_trabajo"])) { ?>	
										<img height="100px" width="150px" src="<?php echo htmlentities($row["img_comprobante_trabajo"])?>"/>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
									

								</tr>
							</table>
							</div>
		
							<div id="patrones">
								<table>
								
<?php if (!empty($row["patraon_actual"])) { ?>	
									<tr>
										<td>Patron Actual:</td>
										<td><?php echo htmlentities($row["patron_actual"]) ?></td>
									</tr>
<?php } if (!empty($row["domicilio_patronactual"])) { ?>									
									<tr>
										<td>Domicilio Patron Actual:</td>
										<td><?php echo htmlentities($row["domicilio_patronactual"]) ?></td>
									</tr>
<?php } if (!empty($row["domicilio_patronactual"])) { ?>									
									<tr>
										<td>Teléfono Patron Actual:</td>
										<td><?php echo htmlentities($row["telefono_patronactual"]) ?></td>
									</tr>
<?php } 
	if (!empty($row["patron_anterior"])) { ?>
									<tr>
										<td>Patron Anterior:</td>
										<td><?php echo htmlentities($row["patron_anterior"]) ?></td>
									</tr>
<?php } if (!empty($row["domicilio_patronanterior"])) { ?>
									<tr>
										<td>Domicilio Patron Anterior:</td>
										<td><?php echo htmlentities($row["domicilio_patronanterior"]) ?></td>
									</tr>
<?php } if (!empty($row["telefono_patronanterior"])) { ?>
									<tr>
										<td>Teléfono Patron Anterior:</td>
										<td><?php echo htmlentities($row["telefono_patronanterior"]) ?></td>
									</tr>
<?php } ?>
								</table>
							</div>
		
					</div>
					
					<div id="escolaridad">
								<table>

<?php  if (!empty($row["grado_escolar"])) { ?>
									<tr>
										<td>Grado Escolar</td>
										<td><?php echo htmlentities($row['grado_escolar'])?></td>
									</tr>
<?php } if (!empty($row["lugar_estudio"])) { ?>
									<tr>
										<td>Lugar de Estudio</td>
										<td><?php echo htmlentities($row['lugar_estudio'])?></td>
										
									</tr>
<?php } ?>
									<tr>
<?php if(!empty($row['img_cedula_profesional'])) {?>
										<td><label>Cedula Profesional</label><img height="100px" width="150px" src="<?php echo htmlentities($row['img_cedula_profesional'])?>"></td>
<?php } else { ?>
										<td><img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/></td>
										
<?php }if(!empty($row['img_certificado_escolar'])) {?>
										<td><lable>Certificado Escolar</lable><img height="100px" width="150px" src="<?php echo htmlentities($row['img_certificado_escolar'])?>"></td>			
<?php } else { ?>
										<td><img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/></td>
									</tr>
<?php } ?>
								</table>
						</div>

		
					<div id="calificacionesdiv">

					
<?php while($row=mysql_fetch_array($resultado1[$k])){ ?>							
								<table class="califs">
<?php if (!empty($row["fecha"])) { ?>
<tr><td> Calificaciones</td></tr>
								<tr>
								<td>Fecha:</td>
								<td> <?php echo htmlentities($row["fecha"]) ?></td>
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
		<?php }  if (!empty($row["emp_calif_anterior"])) { ?>
							
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
								<?php  if (!empty($row["comentario"])) { ?>
								<table class="comentarios">
								<tr>
								 
								<td class="comment">Comentarios: </br>
										<?php echo htmlentities($row["comentario"]);?></td>
								
								</tr>
								</table>
								<?php } ?>
<?php }?>					</div>
							
									
			</div>
<?php	
			$k++;
	}
?>

</form>


