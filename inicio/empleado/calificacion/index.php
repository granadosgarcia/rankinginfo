<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php"; ?>		
		<script>	
			function verifica ()
			{
				if(document.getElementById("query").value=="")
				{
					alert("Busqueda Vacia");
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
			   		<h1 class="titulo2">Busque Para Calificar</h1>
			   	</div><!-- </header> -->
		   		
		   		<div id="calificacion">
		   			<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_empleado.php";?>
		   			<br>
		   			
		   			<div id="busqueda">
			   			<form action="consulta/" onsubmit="return verifica();" method="GET">
				   			<label>Indique su b&uacute;squeda:</label>
				   			<input type="text" name="query" id="query" class="busquedatexto">
				   			
				   			<div class="submitquery">
					   			<input type="submit" value="Buscar" class="logout">
					   		</div><!-- </submitquery> -->
					   	</form>
					</div><!-- </busqueda> -->
	
	
				</div><!-- </calificacion> -->
	   		</div><!-- </wrapper> -->	
	   </div><!-- </entero> -->	
	</body>
</html>