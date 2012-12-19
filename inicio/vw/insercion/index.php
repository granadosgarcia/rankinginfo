<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Deudor VW </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

</head>

<script> 
    function verifica (){
        if(document.getElementById("nombre").value=="")
        {
	        alert("Nombre Obligatorio");
	        return false;
        }
        
        if(document.getElementById("curp").value=="")
        {
	        alert("Curp Obligatorio");
	        return false;
        }
        
        if(!(document.getElementById("telefono").value.match(/^\d+$/)) && document.getElementById("telefono").value!="")
        {
	      	alert("El telefono del aval solo admite numeros");
	        return false;  
        }
        

        
        else
        return true;
        
        
    }


</script>

	<body>
	<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
<h1 class="titulo2">Agregar Deudor VW</h1>

</div>
	   				<div id="calificacion">
	   				
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php";?>


<p name="alerta"></p>

<div id="inputss">

<form method="post" onsubmit="return verifica ()" action="consulta/" enctype="multipart/form-data">

		<div id="primerrow">
			<label>Nombres</label><input type="text" name="nombre" id="nombre">	</br>

			
			<label>Apellido Paterno</label><input type="text" name="apellido_paterno"    id="apellido_paterno">	</br>

			
			<label>Apellido Materno</label><input type="text" name="apellido_materno"    id="apellido_materno">	</br>

			
			<label>Domicilio</label><input type="text" name="domicilio"    id="domicilio">	</br>

			
			<label>Telefono</label><input type="text" name="telefono"       id="telefono"> 	</br>

			
			<label>Curp</label>
			<input type="text" name="curp"        id="curp">
			
			
		</div>

		

			<div id="botonesrow">
	
<div id="modificarrow">
				<input type="submit" name="ok" value="Insertar" class="edita">
</div>
			</div>
</form>

</div>	   				</div></div></div>

	</body>

</html>