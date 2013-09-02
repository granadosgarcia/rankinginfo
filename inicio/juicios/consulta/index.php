<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	
	<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/header_juicios.php";
?>



  
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

    <h1 class="titulo2">Consulta de Juicios</h1>

<img src='/rankinginfo/img/third1.jpg' height='150' width='150' style='float: left;
margin: -130px 0px 0px -160px;'>
    </div>
	   				<div id="calificacion">
 <h3 style="color: #808080; margin: -30px 0px 20px 30px;"> Estás en <?php 
                          $imprim = str_replace('rankinginfo/inicio/', "", $_SERVER["REQUEST_URI"]);
                        $imprim = str_replace(' /', "",$imprim);
                                          echo $imprim; ?></h3>
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_j.php";?>


<br>
		<div id="busqueda">
		<form action="tabla/" onsubmit="return verifica();" method="GET">
			<label>Búsqueda Por Palabra Clave:</label>
			<br>
			<input type="text" name="query" id="query" class="busquedatexto">
			<br><br>
									<label>Búsqueda Por Mes y Año (Si desea buscar por año deje mes vacío)</label><br>
			<label>Mes</label><select name="mes" id="mes" onchange="" size="1">
			    <option value="">-</option>
			    <option value="01">Enero</option>
			    <option value="02">Febrero</option>
			    <option value="03">Marzo</option>
			    <option value="04">Abril</option>
			    <option value="05">Mayo</option>
			    <option value="06">Junio</option>
			    <option value="07">Julio</option>
			    <option value="08">Agosto</option>
			    <option value="09">Septiembre</option>
			    <option value="10">Octubre</option>
			    <option value="11">Noviembre</option>
			    <option value="12">Diciembre</option>
			</select>
			
			<label>Año</label><input type="text" value="<?php echo date("Y") ?>" name="ano" id="ano"
 onblur="if (this.value == '') {this.value = '<?php echo date("Y") ?>';}"
 onfocus="if (this.value == '<?php echo date("Y") ?>') {this.value = '';}" />


			<div class="submitquery">
			<br>
			<input type="submit" value="Buscar" class="logout">
			</div>
		</form>

		</div>


					</div>
   			</div>
   			
   </div>
</body>
		</html>
