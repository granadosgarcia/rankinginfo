<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Juicio </title>
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/header_juicios.php";
?>

  <script> 
    function verifica (){
    
        if(document.getElementById("actor_nombres").value=="")
        {
	        alert("Nombre Actor Obligatorio");
	        return false;
        }
        if(document.getElementById("actor_apellido_paterno").value=="")
        {
	        alert("Apellido Actor Paterno Obligatorio");
	        return false;
        }
        if(document.getElementById("actor_apellido_materno").value=="")
        {
	        alert("Apellido Actor Materno Obligatorio");
	        return false;
        }
        if(document.getElementById("demandado_nombres").value=="")
        {
	        alert("Nombre Demandado Obligatorio");
	        return false;
        }
        if(document.getElementById("demandado_apellido_paterno").value=="")
        {
	        alert("Apellido Demandado Paterno Obligatorio");
	        return false;
        }
        if(document.getElementById("demandado_apellido_materno").value=="")
        {
	        alert("Apellido Demandado Materno Obligatorio");
	        return false;
        }

        if(document.getElementById("actor_apellido_materno").value=="")
        {
	        alert("Apellido Paterno Obligatorio");
	        return false;
        }
        if(document.getElementById("juicio").value=="")
        {
	        alert("Juicio Obligatorio");
	        return false;
        }    
        if(document.getElementById("expediente").value=="")
        {
	        alert("Expediente Obligatorio");
	        return false;
        }    
        if(document.getElementById("juzgado").value=="")
        {
	        alert("Juzgado Obligatorio");
	        return false;
        }
        if(document.getElementById("estado_procesal").value=="")
        {
	        alert("Estado Procesal Obligatorio");
	        return false;
        }
        if(document.getElementById("datepicker").value=="")
        {
	        alert("Fecha Obligatoria");
	        return false;
        }
       

        
        else
		{
         var string1 = document.getElementById("expediente").value;
        var patt1 = /[A-z]|[;:{}^*?¿'¡!"·$%&()#]/g;
        var result =patt1.test(string1);

        if(result)
        {
        	alert("Expediente solo acepta números o '-' '/' ");
	        return false;

        }
        return true;
        }
        
    }

</script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: "dd-mm-yy" });
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
<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query_j.php";?>


<p name="alerta"></p>

<div id="inputss">

<form method="post" onsubmit="return verifica ()" action="update.php" enctype="multipart/form-data">

	<div id ="izquierdaJuicios" >
			<div id="Actor" class="seccion">

				<ul style="  list-style-type: none;">
				
					<li class="actor"><label  style="margin-left:70px;text-decoration:underline ">Actor</label></li>
					<li class="actor"><br></li>
					<li class="actor"><label>Nombres</label><input type="text" name="actor_nombres" id="actor_nombres">	</li>
					<li class="actor"><label>Apellido Paterno </label>
							<input  type="text" name="actor_apellido_paterno" id="actor_apellido_paterno">	</li>
					<li class="actor"><label>Apellido Materno </label>
					<input type="text" name="actor_apellido_materno"    id="actor_apellido_materno">	</li>
					
					<li class="moral hidden"><label style="margin-left:70px;text-decoration:underline ">Representante Legal</label><br></li>
					<li class="moral hidden"><br></li>
					<li class="moral hidden"><label>Nombres R.L</label><input type="text" name="persona_moral_nombres" id="persona_moral_nombres">	</li>
					<li class="moral hidden">
						<label>Apellido Paterno R.L </label><input type="text" name="persona_moral_apellido_paterno" id="persona_moral_apellido_paterno">	
					</li>
					<li class="moral hidden">
					<label>Apellido Materno R.L </label>
					<input class="moral hidden" type="text" name="persona_moral_apellido_materno"    id="persona_moral_apellido_materno">	
					</li>
					<li class="patrono hidden"><br></li>
					
						<li class="patrono hidden"><label style="margin-left:70px;text-decoration:underline ">Abogado Patrono</label><br></li>
					<li class="patrono hidden"><br></li>
					<li class="patrono hidden"><label>Nombres</label><input type="text" name="abogado_patrono_nombres" id="abogado_patrono_nombres">	</li>
					<li class="patrono hidden">
						<label>Apellido Paterno </label><input type="text" name="abogado_patrono_apellido_paterno" id="abogado_patrono_apellido_paterno">	
					</li>
					<li class="patrono hidden">
					<label>Apellido Materno </label>
					<input class="patrono hidden" type="text" name="abogado_patrono_apellido_materno"    id="abogado_patrono_apellido_materno">	
					</li>
					
					
					<br>

				</ul>
							<input id="mora" type="button" name="ok" value="Persona Moral" class="inserta3" style="float:left;" onclick="moral();">
							<input id="patro" type="button" name="ok" value="Abogado Patrono" class="inserta3" style="float:right;" onclick="patrono();">
							
							<script>
							var mor = true;
							var pat = true;
							
							function moral()
							{
								if(mor)
								{
									$(".moral").removeClass("hidden");
									$(".actor").addClass("hidden");
									mor = false;
								}
								else
								{
									$(".actor").removeClass("hidden");
									$(".moral").addClass("hidden");
									mor = true;
								}
								
							}
							
							function patrono(){
								if(pat)
								{
									$(".patrono").removeClass("hidden");
									pat = false;
								}
								else
								{
									$(".patrono").addClass("hidden");
									pat = true;
								}
							}
								
							</script>



			</div>

				<div id="Demandado" class="seccion">
					<ul style="  list-style-type: none;">
						<li><label style="margin-left:70px; text-decoration:underline">Demandado</label></li><br>

						<li><label>Nombres</label><input type="text" name="demandado_nombres"    id="demandado_nombres">	</li>
						<li><label>Apellido Paterno</label><input type="text" name="demandado_apellido_paterno"    id="demandado_apellido_paterno">	</li>
						<li><label>Apellido Materno </label><input type="text" name="demandado_apellido_materno"    id="demandado_apellido_materno">	</li>

						<br>
					</ul>
				</div>
			</div>
			<div id="idJuicio" class="seccion">
		<ul style="  list-style-type: none;">
					<li><label style="margin-left:70px; text-decoration:underline">Juicio</label></li><br>

			<li><label>Tipo de Juicio</label><input type="text" name="juicio"    id="juicio"></li>
			<li><label style=" float: left;">Número de Expediente</label><input type="text" name="expediente"    id="expediente" class="expParte1"><label style=" float: left;">/</label><input type="text" name="expediente2"  class="expParte2"  id="expediente2"> <br></li>
			<li><label>Juzgado</label><input type="text" name="juzgado"    id="juzgado"></li>
			
			<li><label>Distrito Judicial</label><input type="text" name="distrito_juidicial"    id="distrito_juidicial"></li>	
									
			<li><label>Ultima actuación</label><input type="text" name="ultima_actuacion"    id="ultima_actuacion"></li>
			<li><label>Estado Procesal</label>
			<input type="text" name="estado_procesal"    id="estado_procesal"></li><br><br>
			
		
						
									<li><label>Fecha de Vencimiento de Término</label><input type="text" id="datepicker" name="datepicker" /></li>
<br>
			
			
			
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