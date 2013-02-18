<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from relacion_juicios WHERE id='".$_SESSION['curp']."'";
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
    <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query.php";?>

<form method="POST"  action="update.php" enctype="multipart/form-data">
<input style="visibility:hidden; display: none;"type="text" name="consulta" value="<?php echo $row['id']?>">


	<div id="primerrow">
		<label>Actor</label>
		<br>
		<br><label>Nombres</label><input type="text" name="actor_nombres" id="actor_nombres"				value="<?php echo $row['actor_nombres']?>" class="inputderecha">
	<br>
		<label>Apellido Paterno</label>
		<input type="text" name="actor_apellido_paterno"    id="actor_apellido_paterno"		value="<?php echo $row['actor_apellido_paterno']?>" class="inputderecha">
			</br>

		<label>Apellido Materno</label>
		<input type="text" name="actor_apellido_materno"    id="actor_apellido_materno"		value="<?php echo $row['actor_apellido_materno']?>" class="inputderecha">
			</br>
			
					<label>Demandado</label>
		<br>
		<br><label>Nombres</label><input type="text" name="demandado_nombres" id="demandado_nombres"				value="<?php echo $row['demandado_nombres']?>" class="inputderecha">
	<br>
		<label>Apellido Paterno</label>
		<input type="text" name="demandado_apellido_paterno"    id="demandado_apellido_paterno"		value="<?php echo $row['demandado_apellido_paterno']?>" class="inputderecha">
			</br>

		<label>Apellido Materno</label>
		<input type="text" name="demandado_apellido_materno"    id="demandado_apellido_materno"		value="<?php echo $row['demandado_apellido_materno']?>" class="inputderecha">
			</br>
		<label>Juicio</label>
		<input type="text" name="juicio"    id="juicio"		value="<?php echo $row['juicio']?>" class="inputderecha">
			</br>			
			
					<label>Expediente</label>
		<input type="text" name="expediente"    id="expediente"		value="<?php echo $row['expediente']?>" class="inputderecha">
			</br>	
			
					<label>Juzgado</label>
		<input type="text" name="juzgado"    id="jugado"		value="<?php echo $row['juzgado']?>" class="inputderecha">
			</br>	
			
					<label>Estatus</label>
		<input type="text" name="estatus"    id="estatus"		value="<?php echo $row['estatus']?>" class="inputderecha">
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
			
			
								<label>Estado Procesal y Tramite Pendiente</label><br>
		<input type="text" name="estado_procesal_tramite_pendiente"    id="estado_procesal_tramite_pendiente"		value="<?php echo $row['estado_procesal_tramite_pendiente']?>" class="inputderecha">
			</br>	
			
											<label>Lugar</label>
		<input type="text" name="lugar"    id="lugar"		value="<?php echo $row['lugar']?>" class="inputderecha">
			</br>		
			
											<label>Fecha</label>
											
		<input type="text" id="datepicker" name="datepicker" value="<?php echo $row['fecha']?>" />
											
			</br><br>
			
											<label>Comentario</label>
		<textarea  name="comentario_01"    id="comentario_01"		 rows="6" cols="35"><?php echo $row['comentario_01']?></textarea>

			
			
			</div>
	
		<div id="botonesrow">
		
			<div id="modificarrow">
		<input type="submit" name="ok" value="Modificar" class="inserta">
		</div></form>

		</div>
        </div>
        </div>
    </div>
	</body>

</html>
<?php } ?>

