<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";

?>
 <html>

   

   <head>
	   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	   
	   <title>Ranking Information</title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
   
   
   </head>
   

   <body>
   
	<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
   
   <h1 class="titulo2">Dar usuarios de alta</h1>
	   				</div>
	   				<div id="calificacion">
	   				<div id="inputsss">

   <form action="sube_usuario.php" method="post">
   
   		<div id="primerrow">

   		<ul style="  list-style-type: none;">

<li><label>Usuario: </label>
<input type="text" name="usuario" /></li>

<li><label>Nombre completo:</label>
<input type="text" name="nombre" /></li>
<li><label>Contraseña: </label>
<input type="password" name="contrasena" /></li>
<li><label>Verificar Contraseña:</label>
<input type="password" name="contrasena1" /></li>
<li><label>Privilegios: </label>
<select name="privilegios" />
<option value="1">Opcion1</option>
<option value="1">Opcion1</option>
<option value="1">Opcion1</option>
<option value="1">Opcion1</option>
<option value="1">Opcion1</option>
</select></li>



</ul>
				<input type="submit" name="ok" value="Crear" class="crea">
</form>
</div>
</div>
</div>
</div>
</div>

   </body>
 </html>
