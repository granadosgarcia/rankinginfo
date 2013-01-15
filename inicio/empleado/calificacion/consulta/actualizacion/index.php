<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$_SESSION['curp']= $_GET['consulta'];

$sql="SELECT * from empleado WHERE curp='".$_SESSION['curp']."'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)){ ?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

		<title> Calificación Arrendado </title>
<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php"; ?>		
		<script>
			function verifica()
			{
				if(document.getElementById("emp_desempeno").value==0 && document.getElementById("emp_calif_anterior").value==0 && 									   document.getElementById("coment").value=="")
				{
					alert("Todos los campos estan vacios");
					return false;
				}
				else 
				return true;
			}
		</script>

		<script type="text/javascript" src="/rankinginfo/js/fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="/rankinginfo/js/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />


<link rel="icon" href="/rankinginfo/img/favicon.ico" >

<script type="text/javascript">
		$(document).ready(function() {

			$(".imagengrande").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				// helpers : {
				// 	overlay : null
				// }
			});
		});
</script>
	</head>

	<body>
		<div id="entero">
			<div id='wrapper'>
	   			<div id='header'>
		   			<h1> Calificando </h1>
	   			</div><!-- </header> -->
	   			
	
				<p>Estas calificando a: <?php echo $row['nombres']." ".$row['apellido_paterno']." ".$row['apellido_materno'];?></p>
				<?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query.php";?>		
<?php if (!empty($row["img_foto"])) { ?>	
				<a class="imagengrande" href="<?php echo $row["img_foto"]?>"><img height="100px" width="150px" src="<?php echo $row["img_foto"]?>"/></a>
<? 		} else { ?>
				<img height="100px" width="150px" src="/rankinginfo/img/default.jpg"/>


<?php }?>				

		
		
				<form method="GET" onsubmit="return verifica ()" action="update.php">
					<div id="ca">
					<label class="lab">Desempeño</label>
					<select name="emp_desempeno" id="emp_desempeno">
						<option value="0">---</option>
						<option value="1">Muy Bueno</option>
						<option value="2">Bueno</option>
						<option value="3">Normal</option>
						<option value="4">Malo</option>
						<option value="5">Muy Malo</option>
					</select>
		
					
					
					<br>
						</div>
						<div id="co">					
							<label class="lab">Comentario</label>
						<br>
							<textarea rows="3" cols="35" name="coment" id="coment" ></textarea>
				<br><div id="ni">
							<input type="submit" name="ok" value="Enviar" class="edita">
				</div>
				
				<div id="info_calif">
					
					<p class="lab"> Evaluador </p><br>
					
					<label class="lab"> Nombre Completo </label>
		
					<input type="text" name="nombre_evaluador"   id="nombre_evaluador"><br>
					
					<label class="lab"> Empresa </label>
		
					<input type="text" name="empresa_evaluador"   id="empresa_evaluador"><br>
					
					<label class="lab"> Puesto </label>
		
					<input type="text" name="puesto_evaluador"   id="puesto_evaluador"><br>
			
				</div>
						</div>
					
				</form>
			</div><!-- </wrapper> -->
		</div><!-- </entero> -->
	</body>

</html>
<?php } ?>
<?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/close.php";?>