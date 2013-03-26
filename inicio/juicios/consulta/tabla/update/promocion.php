<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

?>
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