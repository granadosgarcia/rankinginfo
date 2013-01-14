<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Arrendado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
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
	      	alert("El télefono del aval sólo admite números");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_particular").value.match(/^\d+$/)) && document.getElementById("telefono_casa").value!="")
        {
	      	alert("El télefono de casa sólo admite números");
	        return false;  
        }
          if(!(document.getElementById("telefono_personal").value.match(/^\d+$/)) && document.getElementById("telefono_casa").value!="")
        {
	      	alert("El télefono celular sólo admite números");
	        return false;  
        }
        
        else
        return true;
        
        
    }


</script>

<script>
 function conyuge(estado_civil){
//run some code when "onchange" event fires
 

    var conesposo = estado_civil.options[estado_civil.selectedIndex].value;


switch(conesposo)
{
case 'Soltero':
  var x=document.getElementById("hidden");
		x.style.visibility="hidden";
  break;
case 'Soltera':
 var x=document.getElementById("hidden");
		x.style.visibility="hidden";
  break;
case 'Casado':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Casada':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case 'Casado':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Divorciado':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case 'Divorciada':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Juntado':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case 'Juntada':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";

default:
var x=document.getElementById("hidden");
		x.style.visibility="hidden";
	}

}

	</script>	

</head>



	<body>
	<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
<h1 class="titulo2">Agregar Arrendado</h1>
   
<img src='/rankinginfo/img/third1.jpg' height='150' width='150' style='float: left;
margin: -130px 0px 0px -153px;'>
</div>
	   				<div id="calificacion">
	   				
   					            <h3 style="color: #808080; margin: -30px 0px 20px 30px;"> Estás en <?php 
                          $imprim = str_replace('rankinginfo/inicio/', "", $_SERVER["REQUEST_URI"]);
                        $imprim = str_replace(' /', "",$imprim);
                                          echo $imprim; ?></h3>
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_confirm.php";?>


<p name="alerta"></p>

<div id="inputss">

<form method="post" onsubmit="return verifica ()" action="consulta/" enctype="multipart/form-data">

		<div id="primerrow">
		<ul style="  list-style-type: none;">
			<li><label>Nombres</label><input type="text" name="nombre" id="nombre">	</li>

			
			<li><label>Apellido Paterno</label><input type="text" name="apellido_paterno"    id="apellido_paterno">	</li>

			
			<li><label>Apellido Materno</label><input type="text" name="apellido_materno"    id="apellido_materno">	</li>

			
			<li><label>Domicilio</label></li>
			
			<li><label>Calle</label><input type="text" name="calle"    id="calle"></li>
			<li><label>No. Interior</label><input type="text" name="no_interior"    id="no_interior"></li>
			<li><label>No. Exterior</label><input type="text" name="no_exterior"    id="no_exterior"></li>
			<li><label>Colonia</label><input type="text" name="colonia"    id="colonia"></li>
			<li><label>Ciudad</label><input type="text" name="ciudad"    id="ciudad"></li>
			<li><label>Estado</label><input type="text" name="estado"    id="estado"></li>
			<li><label>Codigo Postal</label><input type="text" name="codigo_postal"    id="codigo_postal"></li>
			<li><label>Municipio</label><input type="text" name="municipio"    id="municipio"></li>
			<li><label>Delegación</label><input type="text" name="delegacion"    id="delegacion"></li>
			

			<li><label>Telefono de Casa</label><input type="text" name="telefono_particular"       id="telefono_particular"> 	</li>

			<li><label>Telefono Celular</label><input type="text" name="telefono_personal"       id="telefono_personal"> 	</li>


			<li><label>CURP</label>
			<input type="text" name="curp"               id="curp">	</li>

			<li><label>Clave del IFE</label>
			<input type="text" name="clave_ife" id="clave_ife"></li>

			
			<li><label>Estado Civil</label>
				<select name="estado_civil" id="estado_civil" style="float:right;" onchange="conyuge(this)">
					
					<option>-----</option>
					<option>Soltero</option>
					<option>Soltera</option>
					<option>Casado</option>
					<option>Casada</option>
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>
			</li>


</script>
					<div id="hidden" style=" visibility:hidden;">

		<li><label>Nombre del Conyuge</label>
				<input type="text" name="nombre_conyuge"     id="nombre_conyuge"></li>
					</div></ul>

		</div>

					
	
		
		<div id="arrendadorrow">
			<ul style="  list-style-type: none;">
			<li><label>Arrendador Actual</label>
			<input type="text" name="arrendador_actual"   id="arrendador_actual">	</li>

			
			<li><label>Arrendador Anterior</label>
			<input type="text" name="arrendador_anterior" id="arrendador_anterior">	</li>

			
			<li><label>Domicilio Anterior</label>
			<input type="text" name="domicilio_anterior" id="domicilio_anterior"></li>
			
			
			<li><label>Nombre del Aval</label>
			<input type="text" name="nombre_aval"        id="nombre_aval">	</li>

			
			<li><label>Domicilio del Aval</label>
			<input type="text" name="domicilio_aval"     id="domicilio_aval">	</li>

			
			<li><label>T&eacute;lefono del Aval</label>
			<input type="text" name="telefono_aval"      id="telefono_aval"> </li>
			
			</ul>
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