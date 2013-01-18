<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$sql2= "SELECT  monto_deuda
FROM gestiones 
WHERE curp='$_SESSION[curp]'";

if(!($resultado2=mysql_query($sql2,$con)))
{
	die ('<br>ERROR '.mysql_error());
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Arrendado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
<script>
 function conyuge(tipo_gestion){
//run some code when "onchange" event fires
 

    var conesposo = tipo_gestion.options[tipo_gestion.selectedIndex].value;


switch(conesposo)
{
case 'Juicio':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Telefonica':
 var x=document.getElementById("hidden");
		x.style.visibility="hidden";
  break;
  
  case 'Presencial':
 var x=document.getElementById("hidden");
		x.style.visibility="hidden";
  break;
  
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
			<h1 class="titulo2">Consulta de Gestiones</h1>

		</div>
	   	
	   	<div id="calificacion">
	   				
	   		<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_gestion_VW.php";?>


	   		<p name="alerta"></p>

	   		<div id="inputss">

		   		<form method="post" onsubmit="return verifica ()" action="update/" enctype="multipart/form-data">

				<div id="primerrow">
					<label>Tipo</label><br>
					<select name="tipo_gestion" id="tipo_gestion" onchange="conyuge(this)">
					<option value="" >---</option>
					<option >Telefonica</option>
					<option >Presencial</option>
					<option >Juicio</option>
					</select>
					<br>
						<div id="hidden" style=" visibility:hidden;">

						<label>Etapa Procesal</label>
					<input name="etapa_procesal" id="etapa_procesal" type="text"><br>
						</div>
		
					<?php
					$contador ==1;
					if(mysql_num_rows ($resultado2 )>0){
					 while($row2 = mysql_fetch_array($resultado2)){ 
					 ?>
					 					<label>Monto de Deuda</label>

					 <input name="monto_deuda" id="monto_deuda" type="text" value="<?php echo $row2['monto_deuda']?>"><br>
					
				<?php	break;}}
					else {
?>
					<label>Monto de Deuda</label>
					 <input name="monto_deuda" id="monto_deuda" type="text"><br>
					<?php } ?>
					<label>Saldo Atrasado</label>
					 <input name="saldo_atrasado" id="saldo_atrasado" type="text"><br>
					 
					 <label>Semanas de Atraso</label>
					 <input name="semanas_atraso" id="semanas_atraso" type="text">	<br>
					 
					 <label>Ultimo Abono</label>
					 <input name="ultimo_abono" id="ultimo_abono" type="text">	<br><br>
					 	
					<label>Gestion</label><br>
					<textarea rows="3" cols="35" name="comentario" id="comentario" ></textarea>

				
					
					
					
				</div>
		

				<div id="botonesrow">
	
					<div id="modificarrow">
						<input type="submit" name="ok" value="Insertar" class="edita">
					</div>
			</div>
				</form>

			</div>	   				
		</div>
	</div>
</div>

	</body>

</html>