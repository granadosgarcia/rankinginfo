<?php
header('Content-Type: text/html; charset=utf-8');

error_reporting(E_ERROR);


/* Includes de php */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Consulta Empleado')";

/* Contador para llenar el arreglo de consultas */
$i=0;
$k=0;
/* GET */
$consultas = $_GET['consulta'];
/* Llenado del arreglo */

$var = 	mysql_query($sqlact, $con);
if(!$var){
echo $sql;
echo "errorrr".mysql_error();
}
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
   $sql1[$j]="SELECT * from emp_calif  WHERE curp = '".$curp[$j]."' GROUP BY id";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   
   $j++;
}


?>
<!-- HTML -->
<html>
		<head>
			<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php"; ?>

			<link rel="stylesheet" href="/rankinginfo/css/estilo1.css" type="text/css" charset="utf-8">
		<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/rankinginfo/js/fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="/rankinginfo/js/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />


<link rel="icon" href="/rankinginfo/img/favicon.ico" >

			
			<link rel="stylesheet" href="/rankinginfo/css/estilo1.css" type="text/css" charset="utf-8">
		



<script type="text/javascript">
		$(document).ready(function() {

			$(".imagengrande").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});
		});
</script>

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

<?php 

while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { ?>

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
										<a class="imagengrande" href="<?php echo $row["img_ife"]?>"<img height="100px" width="150px" src="<?php echo htmlentities($row["img_ife"])?>"/></a>
<?php } else {?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
								
<?php }?>				
									</td>
								
								
								
									<td>
										<p>Comprobante Domiciliario</p>
										<?php if (!empty($row["img_comprobante_domicilio"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_comprobante_domicilio"]?>"<img height="100px" width="150px" src="<?php echo htmlentities($row["img_comprobante_domicilio"])?>"/></a>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
							
								
									<td>
										<p>Comprobante de Trabajo</p>
										<?php if (!empty($row["img_comprobante_trabajo"])) { ?>	
										<a class="imagengrande" href="<?php echo $row["img_comprobante_trabajo"]?>"<img height="100px" width="150px" src="<?php echo htmlentities($row["img_comprobante_trabajo"])?>"/>
<?php } else { ?>
										<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
<?php  }?>
									</td>
									

								</tr>
							</table>
							</div>
		
							<div id="patrones">
								<table>
								
<?php if (!empty($row["patron_actual"])) { ?>	
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
										<td><label>Cedula Profesional</label>
											 <a class="imagengrande" href="<?php $row['img_cedula_profesional']?>" <img height="100px" width="150px" src="<?php echo htmlentities($row['img_cedula_profesional'])?>"></td>
<?php } else { ?>
										<td><img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/></td>
										
<?php }if(!empty($row['img_certificado_escolar'])) {?>
										<td><lable>Certificado Escolar</lable>
											<a class="imagengrande" href="<?php echo htmlentities($row['img_certificado_escolar'])?>"<img height="100px" width="150px" src="<?php echo htmlentities($row['img_certificado_escolar'])?>"></td>			
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
	mysql_close($con);


?>



