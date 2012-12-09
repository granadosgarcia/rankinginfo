<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>

<html>
	<head>
	
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
<script>	
    function verifica (){
        if(document.getElementById("query").value==""){
        alert("Busqueda Vacia");
        return false;}
        

        
        else
        return true;
    }
</script>

</head>
<body>
<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">

    <h1 class="titulo2">Consulta</h1>
    </div>
	   				<div id="calificacion">
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php";?>


<br>
		<div id="busqueda">
		<form action="consulta/" onsubmit="return verifica();" method="GET">
			<label>Indique su b&uacute;squeda:</label>
			<input type="text" name="query" id="query" class="busquedatexto">
			<div class="submitquery">
			<input type="submit" value="Buscar" class="logout">
			</div>
		</form>
		
		</div>


					</div>
   			</div>
   			
   </div>
</body>
		</html>