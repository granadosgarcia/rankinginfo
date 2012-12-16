<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Arrendado </title>
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
        
        if(!(document.getElementById("telefono_aval").value.match(/^\d+$/)) && document.getElementById("telefono_aval").value!="")
        {
	      	alert("El telefono del aval solo admite numeros");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_casa").value.match(/^\d+$/)) && document.getElementById("telefono_casa").value!="")
        {
	      	alert("El telefono de Casa solo admite numeros");
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
<h1 class="titulo2">Agregar Arrendado</h1>

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

			
			<label>Domicilio Actual</label><input type="text" name="domicilio_actual"    id="domicilio_actual">	</br>

			
			<label>Telefono de casa</label><input type="text" name="telefono_casa"       id="telefono_casa"> 	</br>

			
			<label>Estado Civil</label>
			<input type="text" name="estado_civil"        id="estado_civil">
		</div>
		
		<div id="arrendadorrow">

			<label>Arrendador Actual</label>
			<input type="text" name="arrendador_actual"   id="arrendador_actual">	</br>

			
			<label>Arrendador Anterior</label>
			<input type="text" name="arrendador_anterior" id="arrendador_anterior">	</br>

			
			<label>Domicilio Anterior</label>
			<input type="text" name="domicilio_anterior" id="domicilio_anterior"></br>
			
			<label>CURP</label>
			<input type="text" name="curp"               id="curp">	</br>

			
			<label>Nombre del Aval</label>
			<input type="text" name="nombre_aval"        id="nombre_aval">	</br>

			
			<label>Domicilio del Aval</label>
			<input type="text" name="domicilio_aval"     id="domicilio_aval">	</br>

			
			<label>T&eacute;lefono del Aval</label>
			<input type="text" name="telefono_aval"      id="telefono_aval"> </br>
			
			<label>Nombre del Conyuge</label>
				<input type="text" name="nombre_conyuge"     id="nombre_conyuge"></br>

		</div>
		
			<div id="imagenesrow">
				
				
				<label>Imagen del IFE</label>
				<input type="file" name="file[]" id="file" /> </br>
				
				<label>Foto del Arrendado</label>
				<input type="file" name="file[]" id="file" /> </br>
				
				<label>Imagen del Comprobante Domiciliario</label>
				<input type="file" name="file[]" id="file"  /> 

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