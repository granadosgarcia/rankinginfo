<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios10.php";
?>
 <html>

   

   <head>
	   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	   
	   <title>Ranking Information</title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
   <script>
	   function verifica () {
		   var x = document.getElementById('contrasena').value;
		   var y = document.getElementById('contrasena1').value;
		   var a = document.getElementById('nombre').value;
		   var b = document.getElementById('privilegios').value;
		   if(x != y){
		   alert("Las Contraseñas no Coinciden")
		   return false;}
		  		   
		   if(a == "" || b == "" || x=="" || y=="")
		   	{
			  alert("No puede haber campos vacios")
			  return false;
		   	}
		   	
		   	 else
		   return true;

	   }
</script>   
   </head>
   

   <body>
   
	<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
   
   <h1 class="titulo2">Dar usuarios de alta</h1>
	   				</div>
	   				<div id="calificacion">
	   				<div id="inputsss">
		<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_admin.php"; ?>

   <form action="sube_usuario.php" onsubmit="return verifica ()" method="post">
   
   		<div id="primerrow2">

   		<ul style="  list-style-type: none;">

<li><label>Usuario: </label>
<input type="text" name="usuario" /></li>

<li><label>Nombre completo:</label>
<input type="text" name="nombre" id="nombre" /></li>
<li><label>Contraseña: </label>
<input type="password" name="contrasena" id="contrasena" /></li>
<li><label>Verificar Contraseña:</label>
<input type="password" name="contrasena1" id="contrasena1" /></li>
<li><label>Privilegios: </label>
<select name="privilegios" id="privilegios" />
<option value="1">Insercion, Consulta y Calificacion</option>
<option value="5">Insercion, Consulta Calificacion y Edición (sin borrar)</option>
<option value="10">Edición (puede borrar), Crear usuarios, Admin (Todos los privilegios)</option>
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
