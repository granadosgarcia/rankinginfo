<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from relacion_juicios WHERE expediente='".$_SESSION['curp']."'";
	$result=mysql_query($sql);
	
	$sql1="SELECT * from notificacion WHERE expediente='".$_SESSION['curp']."'";
	$result1=mysql_query($sql1);
	$contador=mysql_num_rows($result1);
	
	$expediente = $_SESSION['curp'];

	$sql="SELECT DISTINCT * FROM promocion
	WHERE
	expediente='".$expediente."'";



if(!($resultado3=mysql_query($sql)))
{
	die ($sql."Error".mysql_error());
}
	
	?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>

	<link rel='stylesheet' href='/rankinginfo/css/jquery.dataTables.css' type='text/css' charset='utf-8'>
<title> Editar Juicio </title>

<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.dataTables.js'></script>
 <script>
 function popUpClosed() {
    window.location.reload();
}
 </script>
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: "dd-mm-yy" });
  });
 </script>
 
 <script type='text/javascript' charset='utf-8'>
			$(document).ready(function() {
				$('#tabla1').dataTable();
			} );
		</script>
		
		<script> 
    function verifica (){
    
         
       
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
        return true;
        
        
    }

</script>

 <script>
 
 function quitar () {
	 <?php 
	$cont =1;
			$cont2=$contador;


while($cont2>0){
	?>
	
		document.getElementById('pnotif2<?php echo $cont?>').style.display='none';


		
		
		<?php
		$cont++;
		 $cont2--;}?>
	 
 }
	<?php 
	$cont =1;
			$cont2=$contador;


while($cont2>0){
	?>
			function mostrar<?php echo $cont?>(){
				document.getElementById('notif21').style.display='block';

				document.getElementById('pnotif2<?php echo $cont?>').style.display='block';
				
			}
		<?php
		$cont++;
		 $cont2--;}?>
 </script>
</head>

	<body>
        <div id="entero">
            <div id="wrapper">

                <div id="inputss">
                
                <br>
        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query_j.php";

	while($row = mysql_fetch_array($result)){?>

<form method="POST" onsubmit="return verifica ()" action="update.php" enctype="multipart/form-data">
<input style="visibility:hidden; display: none;"type="text" name="consulta" value="<?php echo $row['expediente']?>">


	<div id="primerrowww">
	
		
		<label>Expediente: </label>
		<p><?php echo $row['expediente']?></p>
		</br>
		<label class="titulo_label2">Actor</label>
		<br>
		<label>Nombres</label>
		<p><?php echo $row['actor_nombres']?></p>
		</br>
		<label>Apellido Paterno</label>
		<p><?php echo $row['actor_apellido_paterno']?> </p>
		</br>
		<label>Apellido Materno</label>
		<p><?php echo $row['actor_apellido_materno']?></p>
		</br></br>
			
		<label class="titulo_label">Demandado</label>
		<br>
		<label>Nombres</label>
		<p><?php echo $row['demandado_nombres']?></p>
		</br>
		<label>Apellido Paterno</label>
		<p><?php echo $row['demandado_apellido_paterno']?> </p>
		</br>
		<label>Apellido Materno</label>
		<p><?php echo $row['demandado_apellido_materno']?></p>
		</br></br>
		<label>Juicio</label>
		<p><?php echo $row['juicio']?></p>
		</br>
		<label>Juzgado</label>
		<p><?php echo $row['juzgado']?></p>
		</br><br>
		<label>Distrito Judicial</label>
		<input type="text" name="distrito_juidicial"    id="distrito_juidicial"		value="<?php echo $row['distrito_juidicial']?>" class="inputderecha">
		<br>
		<label>Ultima Actuación</label>
		<input type="text" name="utlima_actuacion"    id="utlima_actuacion"		value="<?php echo $row['ultima_actuacion']?>" class="inputderecha">
		<label>S.Actuación</label>
		<input type="text" name="s_actuacion_01"    id="s_actuacion_01"		value="<?php echo $row['s_actuacion_01']?>" class="inputderecha">
		<label>S.Actuación</label>
		<input type="text" name="s_actuacion_02"    id="s_actuacion_02"		value="<?php echo $row['s_actuacion_02']?>" class="inputderecha">
		</br>
		<label>Estado Procesal</label><br>
		<input type="text" name="estado_procesal"    id="estado_procesal"		value="<?php echo $row['estado_procesal']?>" class="inputderecha">
		<label>Fecha de Vencimiento de Termino (Día-Mes-Año)</label>
		<input type="text" id="datepicker" name="datepicker" value="<?php $originalDate = $row['fecha'] ;
					$newDate = date("d-m-Y", strtotime($originalDate));
							echo $newDate;
?>" />
		</br><br>
		<label>Comentario</label>
		<textarea  name="comentario_01"    id="comentario_01"		 rows="6" cols="42"><?php echo $row['comentario_01']?></textarea>
		<br><br>
		<input type="submit" name="ok" value="Modificar" class="inserta2">
<?php } ?>
	</div>
</form>



<div id = "tabla_promocion">
		 			<INPUT class="inserta3" type="button" value="Insertar Promoción" onClick="window.open('promocion.php','mywindow','width=400,height=430')"> 

		<table id ='tabla1'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha de Promoción</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha de Notificación</th>
		<th class='sorting' role='columnheader' tabindex='0'>Comentario</th>
					</tr>
		</thead>
		<tbody>


<?php while($row = mysql_fetch_array($resultado3)){   ?>
			
		<tr class='infooo'>
				<td><?php 
				if(!empty($row['fecha_promocion'])){

				 $originalDate=$row['fecha_promocion'] ;
							$newDate = date("d-m-Y", strtotime($originalDate));
							echo $newDate;
							}												?></td>
				<td><?php 
				if(!empty($row['fecha_notificacion'])){
				$originalDate = $row['fecha_notificacion'] ;
					$newDate = date("d-m-Y", strtotime($originalDate));
							echo $newDate;
						}
				?></td>
				<td><?php echo $row['comentario'] ?></td>

			
		</tr>
	<?php	} ?>

		</tbody>
</table>

</div>	
<div id="notif_wrap">
<div id="notificaciones">
		 			<INPUT  class="inserta4" type="button" value="Insertar Notificación" onClick="window.open('notificacion.php','mywindow','width=500,height=740')"> 

<ul style="list-style:none">
<?php
$cont = 1;
while ($contador>0){
	echo "<li><input id='notif".$cont."' type='button' onClick='quitar(); mostrar".$cont."(); ' value='Notificación ".$cont++."'/></li>";
	$contador--;
}
?>

</ul>

	</div>

			<div style="display:none" id="notif21" >
<h1>Notificación:</h1>
	<?php
	
			$cont=1;
			 while($row1 = mysql_fetch_array($result1)){

	?>
				<p id="pnotif2<?php echo $cont ?>"><?php echo $row1['comentario']; ?></p>
		<?php
		$cont++;
		 }?>


						</div>

</div>
		<div id="botonesrow">
		

		
		
		
		

		</div>
        </div>
        </div>
    </div>
	</body>

</html>

