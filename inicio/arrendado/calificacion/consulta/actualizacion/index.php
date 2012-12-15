<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$_SESSION['curp']= $_GET['consulta'];

$sql="SELECT * from arrendado WHERE curp='".$_SESSION['curp']."'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)){ ?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

		<title> Calificación Arrendado </title>
<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php"; ?>		
		<script>
			function verifica()
			{
				if(document.getElementById("arr_pagos").value==0 && document.getElementById("arr_propiedad_actual").value==0 && 										   document.getElementById("arr_propiedad_anterior").value==0 && document.getElementById("arr_general").value==0 && 									   document.getElementById("coment").value=="")
				{
					alert("Todos los campos estan vacios");
					return false;
				}
				else 
				return true;
			}
		</script>
	</head>

	<body>
		<div id="entero">
			<div id='wrapper'>
	   			<div id='header'>
		   			<h1> Calificando </h1>
	   			</div><!-- </header> -->
	   			
	
				<p>Estas calificando a: <?php echo $row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno'];?></p>
				<?php } include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query.php";?>		
<?php if(!empty($row['img_foto'])){?>
				<img height="100px" width="150px" src="<?php echo $row['img_foto']?>"/>
<? 		} else { ?>
				<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>
				

		
		
				<form method="GET" onsubmit="return verifica ()" action="update.php">
					<div id="ca">
					<label class="lab">Pagos</label>
					<select name="arr_pagos" id="arr_pagos">
						<option value="0">---</option>
						<option value="1">Muy Bueno</option>
						<option value="2">Bueno</option>
						<option value="3">Normal</option>
						<option value="4">Malo</option>
						<option value="5">Muy Malo</option>
					</select>
		
					<label class="lab">Propiedad Actual</label>
					<select name="arr_propiedad_actual" id="arr_propiedad_actual">
						<option value="0">---</option>
						<option value="1">Muy Bueno</option>
						<option value="2">Bueno</option>
						<option value="3">Normal</option>
						<option value="4">Malo</option>
						<option value="5">Muy Malo</option>
					</select>
					
					<label class="lab">Propiedad Anterior</label>
					<select name="arr_propiedad_anterior" id="arr_propiedad_anterior">
						<option value="0">---</option>
						<option value="1">Muy Bueno</option>
						<option value="2">Bueno</option>
						<option value="3">Normal</option>
						<option value="4">Malo</option>
						<option value="5">Muy Malo</option>
					</select>
					

					<label class="lab">En general</label>
					<select name="arr_general" id="arr_general">
						<option value="0">---</option>
						<option value="1">Muy Bueno</option>
						<option value="2">Bueno</option>
						<option value="3">Normal</option>
						<option value="4">Malo</option>
						<option value="5">Muy Malo</option>
					</select>
						</br>
						</div>
						<div id="co">					
							<label class="lab">Comentario</label>
						<br>
							<textarea rows="3" cols="35" name="coment" id="coment" ></textarea>
				<br><div id="ni">
							<input type="submit" name="ok" value="Enviar" class="edita">
				</div>
						</div>
					
				</form>
			</div><!-- </wrapper> -->
		</div><!-- </entero> -->
	</body>

</html>
<?php } include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/close.php";?>