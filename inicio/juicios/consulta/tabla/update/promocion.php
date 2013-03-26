<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

?>

<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8"/>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#fecha_notificacion" ).datepicker({ dateFormat: "yy-mm-dd" });
        $( "#fecha_promocion" ).datepicker({ dateFormat: "yy-mm-dd" });

  });
 </script>
</head>
<body>
	<div >
		<h1>Inserta Promoción</h1>
	</div>
	<div>
		<form action="update_promocion.php" method="GET">
		<ul style="list-style: none;">
			<li><label>Comentario</label><br>
			<textarea rows="10" cols="35" id="comentario" name="comentario"></textarea></li>
			<li><label>Fecha de Notificación</label><input type="text" name="fecha_notificacion" id="fecha_notificacion"/></li>
			<li><label>Fecha de Promoción</label><input type="text" name="fecha_promocion" id="fecha_promocion"/></li>
			<li><input type="submit"/></li>
		</ul>

		</form>
	</div>

</body>
</html>
