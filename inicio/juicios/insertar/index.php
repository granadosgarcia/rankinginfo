<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Arrendado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script><script> 
    function verifica (){
        if(document.getElementById("nombre").value=="")
        {
	        alert("Nombre Obligatorio");
	        return false;
        }

        else
        return true;
        
        
    }

</script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
  });
 </script>



</head>



	<body>
	<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
<h1 class="titulo2">Insertar Juicio</h1>
   
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

<form method="post" onsubmit="return verifica ()" action="update.php" enctype="multipart/form-data">

		<div id="primerrow">
		<ul style="  list-style-type: none;">
		
			<li><label>Actor</label></li>

			<li><label>Nombres</label><input type="text" name="actor_nombres" id="actor_nombres">	</li>

			<li><label>Apellido Paterno </label><input type="text" name="actor_apellido_paterno" id="actor_apellido_paterno">	</li>

			
			<li><label>Apellido Materno </label><input type="text" name="actor_apellido_materno"    id="actor_apellido_materno">	</li>

			<br>
			<li><label>Demandado</label></li>

			<li><label>Nombre</label><input type="text" name="demandado_nombres"    id="demandado_nombres">	</li>
			<li><label>Apellido Paterno</label><input type="text" name="demandado_apellido_paterno"    id="apellido_paterno">	</li>
			<li><label>Apellido Materno </label><input type="text" name="demandado_apellido_materno"    id="apellido_materno">	</li>

			<br>
			
			<li><label>Juicio</label><input type="text" name="juicio"    id="juicio"></li>
			<li><label>expediente</label><input type="text" name="expediente"    id="expediente"></li>
			<li><label>juzgado</label><input type="text" name="juzgado"    id="juzgado"></li>
			<li><label>estatus</label><input type="text" name="estatus"    id="estatus"></li>
			<li><label>Ultima actuacion</label><input type="text" name="ultima_actuacion"    id="ultima_actuacion"></li>
			<li><label>S.Actuación</label><input type="text" name="s_actuacion_01"    id="s_actuacion_01"></li>		
			<li><label>S.Actuación</label><input type="text" name="s_actuacion_02"    id="s_actuacion_02"></li>	<br>
			<li><label>Estado Procesal y Tramite Pendiente</label>
			<br><input type="text" name="estado_procesal_tramite_pendiente"    id="estado_procesal_tramite_pendiente"></li><br><br>
			
						<li><label>Lugar</label><input type="text" name="lugar"    id="lugar"></li>		
						
									<li><label>Fecha (Año-Mes-Día)</label><input type="text" id="datepicker" name="datepicker" /></li>

			
			
			
						<li><label>Comentario</label><br><textarea rows="6" cols="35" id="comentario_01" name="comentario_01"></textarea>
			</li></ul></div>

			<div id="botonesrow">
	
<div id="modificarrow">
				<input type="submit" name="ok" value="Insertar" class="edita">
</div>
			</div>
</form>

</div>	   				</div></div></div>

	</body>

</html>