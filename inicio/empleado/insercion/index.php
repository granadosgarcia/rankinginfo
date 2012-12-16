<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Empleado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

</head>

<script> 

    function verifica ()
{
        if(document.getElementById("nombres").value=="")
        {
	        alert("Nombre Obligatorio");
	        return false;
        }
        
        if(document.getElementById("curp").value=="")
        {
	        alert("Curp Obligatorio");
	        return false;
        }
        
        if(!(document.getElementById("telefono_particular").value.match(/^\d+$/)) && document.getElementById("telefono_particular").value!="")
        {
	      	alert("El telefono Particular solo admite numeros");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_personal").value.match(/^\d+$/)) && document.getElementById("telefono_personal").value!="")
        {
	      	alert("El telefono personal de Casa solo admite numeros");
	        return false;  
        }
       
        if(!(document.getElementById("telefono_patronactual").value.match(/^\d+$/)) && document.getElementById("telefono_patronactual").value!="")
        {
	      	alert("El telefono del patron actual de Casa solo admite numeros");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_patronanterior").value.match(/^\d+$/)) && document.getElementById("telefono_patronanterior").value!="")
        {
	      	alert("El telefono del patron anterior de Casa solo admite numeros");
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
	   				
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_empleado.php";?>


<p name="alerta"></p>

<div id="inputss">

<form method="post" onsubmit="return verifica ()" action="consulta/" enctype="multipart/form-data">

		<div id="primerrow">
			<label>Nombres</label><input type="text" name="nombres" id="nombres">	</br>

			
			<label>Apellido Paterno</label><input type="text" name="apellido_paterno"    id="apellido_paterno">	</br>

			
			<label>Apellido Materno</label><input type="text" name="apellido_materno"    id="apellido_materno">	</br>

			
			<label>Domicilio</label><input type="text" name="domicilio"    id="domicilio">	</br>

			
			<label>Telefono Particular</label><input type="text" name="telefono_particular"       id="telefono_particular"> 	</br>

			<label>Telefono Personal</label><input type="text" name="telefono_personal"       id="telefono_personal"> 	</br>
					
			<label>Estado Civil</label>
			<input type="text" name="estado_civil"        id="estado_civil">
		</div>
		
		<div id="patronrow">

			<label>Patron Actual</label>
			<input type="text" name="patron_actual"   id="patron_actual">	</br>

			<label>Telefono Patron Actual</label>
			<input type="text" name="telefono_patronactual"   id="telefono_patronactual">	</br>

			<label>Domicilio Patron Actual</label>
			<input type="text" name="domicilio_patronactual"   id="domicilio_patronactual">	</br>
			
			<label>Patron Anterior</label>
			<input type="text" name="patron_anterior"   id="patron_anterior">	</br>

			<label>Telefono Patron Anterior</label>
			<input type="text" name="telefono_patronanterior" id="telefono_patronanterior">	</br>
			
			<label>Domicilio Patron Anterior</label>
			<input type="text" name="domicilio_patronanterior"   id="domicilio_patronanterior">	</br>

			
			<label>Responsable Actual</label>
			<input type="text" name="responsable_actual" id="responsable_actual"></br>
			
			<label>CURP</label>
			<input type="text" name="curp"               id="curp">	</br>

			
			<label>Nombre del Conyuge</label>
			<input type="text" name="nombre_conyuge"     id="nombre_conyuge"></br>
			
			<label>Empleo Anterior</label>
			<input type="text" name="empleo_anterior"     id="empleo_anterior"></br>
			
			<label>Tiempo Trabajo Anterior</label>
			<input type="text" name="tiempo_trabajoanterior"     id="tiempo_trabajoanterior"></br>
			
			<label>Habilidades</label>
			<input type="text" name="habilidades"     id="habilidades"></br>

		</div>
		
		<div id="escolaridad">
			<label>Lugar de estudio</label>
			<input type="text" name="lugar_estudio"     id="lugar_estudio"></br>
			
			<label>Grado Escolar</label>
			<input type="text" name="grado_escolar"     id="grado_escolar"></br>
		</div>
		
			<div id="imagenessrow">
				
				
				<label>Imagen del IFE</label>
				<input type="file" name="file[]" id="file" /> </br>
				
				<label>Foto del Empleado</label>
				<input type="file" name="file[]" id="file" /> </br>
				
				<label>Imagen del Comprobante Domiciliario</label>
				<input type="file" name="file[]" id="file"  /></br>
				
				<label>Imagen del Comprobante de Trabajo</label>
				<input type="file" name="file[]" id="file"  /></br>
				
				<label>Imagen Cedula Profesional</label>
				<input type="file" name="file[]" id="file"  /></br>
				
				<label>Imagen Certificado Escolar</label>
				<input type="file" name="file[]" id="file"  /></br>
				
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