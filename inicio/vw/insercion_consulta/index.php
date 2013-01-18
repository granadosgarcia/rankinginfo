<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Arrendado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

</head>



<body>

<div id="entero">
  
	<div id="wrapper">
		<div id="header">
			<h1 class="titulo2">Consulta de Gestiones</h1>

		</div>
	   	
	   	<div id="calificacion">
	   				
	   		<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_gestion_VW.php";?>


	   		<p name="alerta"></p>

	   		<div id="inputss">

		   		<form method="post" onsubmit="return verifica ()" action="update/" enctype="multipart/form-data">

				<div id="primerrow">
					<label>Tipo</label><br>
					<select name="tipo_gestion" id="tipo_gestion">
					<option value="" >---</option>
					<option value="Opcion 1" >Telefonica 1</option>
					<option value="Opcion 2" >Presencial</option>
					<option value="Opcion 3" >Juicio</option>
					<option value="Opcion 4" >Opción 4</option>
					</select>
					<br>
	
						<label>Etapa Procesal</label><br>
					<input name="etapa_procesal" id="etapa_procesal" type="text"><br>

		
					<br>
					
					<label>Monto de Deuda</label>
					 <input name="monto_deuda" id="monto_deuda" type="text"><br>
					
					<label>Saldo Atrasado</label>
					 <input name="saldo_atrasado" id="saldo_atrasado" type="text"><br>
					 
					 <label>Semanas de Atraso</label>
					 <input name="semanas_atraso" id="semanas_atraso" type="text">	<br>
					 
					 <label>Ultimo Abono</label>
					 <input name="ultimo_abono" id="ultimo_abono" type="text">	<br><br>
					 	
					<label>Gestion</label>
					<textarea rows="3" cols="35" name="comentario" id="comentario" ></textarea>

				
					
					
					
				</div>
		

				<div id="botonesrow">
	
					<div id="modificarrow">
						<input type="submit" name="ok" value="Insertar" class="edita">
					</div>
			</div>
				</form>

			</div>	   				
		</div>
	</div>
</div>

	</body>

</html>