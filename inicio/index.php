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
		   				
	   					<div class="salida">
	   						<a href="/rankinginfo/cerrar_sesion.php" ><input type="button" value="Cerrar sesi&oacute;n" class="logout"></a>
	   					</div>
    	
	   					<div class="botonera">
		   					<a href="arrendado/"><input type="button" value="Arrendado" class="inserta"></a>

		   					<a href="empleado/"><input type="button" value="Empleado" class="edita"></a>

		   					<a href="vw/"><input type="button" value="VW" class="edita"></a>

		   					<?php if(isset($_SESSION['privilegios'])&&$_SESSION['privilegios']>=10){
 ?>
		   					<a href="admin/"><input type="button" value="Admin" class="edita"></a>
<?php } ?>

		   				

		   				</div>
	
		   			</div>
   					
		   		</div>
    </body>
</html>    

