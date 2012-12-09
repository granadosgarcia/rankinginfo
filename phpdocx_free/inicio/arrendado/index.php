<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/rankinginfo/css/estilo.css">
    	<title>Menu de opciones</title>
    	
    <script type="text/javascript">
    
    function init(){
    var privilegios =<?php echo $_SESSION['privilegios'];?>;
    var remove = document.getElementById("edicion");
    if( privilegios === 1)
    remove.parentNode.removeChild(remove);
    }
    </script>
   
    </head>
    <body onload="init()"><div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
	   			
   <h1 class="titulo">Ranking Information </h1>
   

   
   					</div>
   				
   					<div id="contenido">
   					
   					
    <p class="bienvenida"><?php 
    
    echo "Bienvenido ". $_SESSION['nombreusuario'];?></p>
    
       	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_inicio.php";?>
       	   				
    	
    	
    	<div class="botonera">
<a href="insercion/"><input type="button" value="Insertar" class="inserta"></a>
    	<div id="edicion" >
<a href="edicion/"><input type="button" value="Editar" class="edita"></a>
    	</div>
<a href="calificacion/"><input type="button" value="Calificar" class="califica"></a>

<a href="consulta/"><input type="button" value="Consultar" class="consulta"></a>

    	</div>

   					</div>
	
   			</div>

    </body>
</html>    

