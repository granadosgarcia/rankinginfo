<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

?>
<<<<<<< HEAD



<div id="primerrow">
		<ul style="  list-style-type: none;">
		
		
		<h1>Notificación</h1>
			<li><label>Notificación</label><input type="text" name="actor_nombres" id="actor_nombres">	</li>
=======
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
	<div >
		<h1>Inserta Promoción</h1>
	</div>
	<div>
		<form action="update_promocion.php" method="GET">
		<ul>
			<li><label>Comentario</label><input type="text" name="comentario" id="comentario"/></li>
			<li><label>Fecha de Notificación</label><input type="date" name="fecha_notificacion" id="fecha_notificacion"/></li>
			<li><label>Fecha de Promoción</label><input type="date" name="fecha_promocion" id="fecha_promocion"/></li>
			<li><input type="submit"/></li>
		</ul>

		</form>
	</div>

</body>
</html>
>>>>>>> eb5c588d62a3fb49ad16b7eb72277124d5d77c98
