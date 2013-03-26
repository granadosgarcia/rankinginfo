<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from relacion_juicios WHERE expediente='".$_SESSION['curp']."'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>


<title> Editar Juicio </title>

<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script> 
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
  });
 </script>
</head>

	<body>
        <div id="entero">
            <div id="wrapper">

                <div id="inputss">
                
                <br>
    <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query.php";?>

<form method="POST"  action="update.php" enctype="multipart/form-data">
<input style="visibility:hidden; display: none;"type="text" name="consulta" value="<?php echo $row['expediente']?>">


	<div id="primerrow">
	
	
	<label>Expediente</label>
		<p><?php echo $row['expediente']?></p>
			</br>	
			
			
		<label>Actor</label>
		<br>
		<br><label>Nombres</label><p><?php echo $row['actor_nombres']?></p>
	<br>
		<label>Apellido Paterno</label>
		<p><?php echo $row['actor_apellido_paterno']?> </p>
			</br>

		<label>Apellido Materno</label>
		<p> <?php echo $row['actor_apellido_materno']?></p>
			</br>
			
					<label>Demandado</label>
		<br>
		<br><label>Nombres</label><p><?php echo $row['demandado_nombres']?></p>
	<br>
		<label>Apellido Paterno</label>
		<p><?php echo $row['demandado_apellido_paterno']?> </p>
			</br>

		<label>Apellido Materno</label>
		<p><?php echo $row['demandado_apellido_materno']?></p>
			</br>
		<label>Juicio</label>
		<p><?php echo $row['juicio']?></p>
			</br>			
			
					
			
					<label>Juzgado</label>
		<p><?php echo $row['juzgado']?></p>
			</br>	
			
			
														<label>Distrito Judicial</label>
		<input type="text" name="distrito_juidicial"    id="distrito_juidicial"		value="<?php echo $row['distrito_juidicial']?>" class="inputderecha">
			</br>	
			
					
					<label>ultima_actuacion</label>
		<input type="text" name="utlima_actuacion"    id="ultima_actuacion"		value="<?php echo $row['ultima_actuacion']?>" class="inputderecha">
			</br>	
			
					<label>S.Actuación</label>
		<input type="text" name="s_actuacion_01"    id="s_actuacion_01"		value="<?php echo $row['s_actuacion_01']?>" class="inputderecha">
			</br>	
			
								<label>S.Actuación</label>
		<input type="text" name="s_actuacion_02"    id="s_actuacion_02"		value="<?php echo $row['s_actuacion_02']?>" class="inputderecha">
			</br>	<br>
			
			
								<label>Estado Procesal</label><br>
		<input type="text" name="estado_procesal"    id="estado_procesal"		value="<?php echo $row['estado_procesal']?>" class="inputderecha">
			</br>	
			
	
			
											<label>Fecha de Vencimiento de Termino (Día-Mes-Año)</label>
											
		<input type="text" id="datepicker" name="datepicker" value="<?php echo $row['fecha']?>" />
											
			</br><br>
			
											<label>Comentario</label>
		<textarea  name="comentario_01"    id="comentario_01"		 rows="6" cols="35"><?php echo $row['comentario_01']?></textarea>

			
			
			</div>
	
		<div id="botonesrow">
		
			<div id="modificarrow">
		<input type="submit" name="ok" value="Modificar" class="inserta">
		</div></form>
		
		
		<FORM> 
			<INPUT type="button" value="Promocion" onClick="window.open('promocion.php','mywindow','width=600,height=800')"> 
			<INPUT type="button" value="Promocion" onClick="window.open('notificacion.php','mywindow','width=600,height=800')"> 
		</FORM>

		</div>
        </div>
        </div>
    </div>
	</body>

</html>
<?php } ?>

