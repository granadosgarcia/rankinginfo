<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

		<link rel="stylesheet" type="text/css" href="/rankinginfo/css/estilo.css">
    	<title>Menú de opciones</title>
    </head>
    <body>
    	<div id="entero">
     			<div id="wrapper">
	   				<div id="header">
		   				<h1 class="titulo">Ranking Information </h1>
		   				   <img src="/rankinginfo/img/third.jpg" height="150" width="150" style="float: left;
margin: -200px 0px 0px -160px;">

		   			</div>
   				
		   			<div id="contenido">
	   					<p class="bienvenida"><?php echo "Bienvenido ". $_SESSION['nombreusuario'];?></p>
		   				                  <?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_inicio.php";?>

	   					
    	
	   					<div class="botonera">
		   					<a href="insercion/"><input type="button" value="Inserción" class="inserta"></a>

		   					<a href="consulta/"><input type="button" value="Consulta" class="edita"></a>
		   					


		   				
		   				</div>
	
		   			</div>
   					
		   		</div>
    </body>
</html>    

