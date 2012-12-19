<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Consultar VW </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

</head>


<body>

<div id="entero">
  
	<div id="wrapper">
		<div id="header">
			<h1 class="titulo2">Consulta VW</h1>

		</div>
	   	
	   	<div id="calificacion">
	   				
	   		<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php";?>


	   		<p name="alerta"></p>

	   		<div id="inputss">

		   		<form method="get" action="consulta/">

				<div id="primerrow">
					<label>Introduzca su búsqueda</label><input type="text" name="nombre" id="nombre">	</br>
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