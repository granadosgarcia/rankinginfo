<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";

?>
 <html>

   

   <head>
	   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	   
	   <title>Ranking Information</title>
 <link type="text/css" rel="stylesheet" href="/css/estilo.css">
   
   
   </head>
   

   <body>
   

   
   <h1>Dar usuarios de alta</h1>
   
   
   <form action="sube_usuario.php" method="post">
Usuario: <input type="text" name="usuario" />
Contrasena: <input type="password" name="contrasena" />
Nombre completo:<input type="text" name="nombre" />
Privilegios: <input type="text" name="privilegios" />
<input type="submit" />
</form>

   </body>
 </html>
