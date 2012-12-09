<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta charset="utf-8"> 
<title> Insertar Arrendado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

</head>

<script> 
    function verifica (){
        if(document.getElementById("nombre").value==""){
        alert("Nombre Obligatorio");
        return false;}
        
        if(document.getElementById("curp").value=="")
        {alert("Curp Obligatorio");
        return false;}
        
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
	   				
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_vw.php";?>


<p name="alerta"></p>

<div id="inputss">

<form method="post" onsubmit="return verifica ()" action="consulta/" enctype="multipart/form-data">

		<div id="primerrow">
			<label>Nombre del Cliente</label><input type="text" name="nombre" id="nombre">	</br>

			<label>Curp</label><input type="text" name="curp" id="curp"> </br>
			
			<label>Direccion</label><input type="text" name="direccion"    id="direccion">	</br>

			
			<label>Número Exterior</label><input type="text" name="numero_exterior"    id="numero_exterior">	</br>

			
			<label>Número Interior</label><input type="text" name="numero_interior"    id="numero_interior">	</br>

			
			<label>Tel&eacute;fono</label><input type="text" name="telefono"       id="telefono"> 	</br>

			<label>C&oacute;digo Postal</label><input type="text" name="codigo_postal"   id="codigo_postal"></br>

			
			<label>Pa&iacute;s</label><input type="text" name="pais" id="pais">	</br>

			
			<label>Poblaci&oacute;n</label><input type="text" name="poblacion" id="poblacion"></br>
			
			<label>Estado</label><input type="text" name="estado" id="estado"></br>

			
			<label>Fecha de &uacute;ltimo pago</label>
			<input type="text" name="fecha_ultimo_pago"        id="fecha_ultimo_pago">	</br>

			
			<label>Semanas de atraso</label>
			<input type="text" name="semanas_atraso"     id="semanas_atraso">	</br>

			
			<label>&Uacute;ltimo abono</label>
			<input type="text" name="ultimo_abono"      id="ultimo_abono"> </br>
			
			<label>Fecha de &uacute;ltima visita</label><input type="text" name="fecha_ultima_visita"     id="fecha_ultima_visita"></br>

			<label>Saldo</label><input type="text" name="saldo"     id="saldo"></br>

			<label>Saldo atrasado</label><input type="text" name="saldo_atrasado"     id="saldo_atrasado"></br>
		
			<label>&Uacute;ltimo abono moratorio</label><input type="text" name="ultimo_abono_moratorio"     id="ultimo_abono_moratorio"></br>

			<label>Saldo moratorio</label><input type="text" name="saldo_moratorio"     id="saldo_moratorio"></br>

			<label>Saldo total</label><input type="text" name="saldo_total"     id="saldo_total"></br>

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