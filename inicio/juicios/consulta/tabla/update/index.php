<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from relacion_juicios WHERE expediente='".$_SESSION['curp']."'";
	$result=mysql_query($sql);
	
	$sql1="SELECT * from notificacion WHERE expediente='".$_SESSION['curp']."'";
	$result1=mysql_query($sql1);
	$expediente = $_SESSION['curp'];

	$sql="SELECT DISTINCT * FROM promocion
	WHERE
	expediente='".$expediente."'";



if(!($resultado3=mysql_query($sql)))
{
	die ($sql."Error".mysql_error());
}


$sql="SELECT DISTINCT * FROM promocion
	WHERE
	expediente='".$expediente."'";



if(!($resultado4=mysql_query($sql)))
{
	die ($sql."Error".mysql_error());
}

 $pot = mysql_num_rows($resultado4); ?>
	
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
        
       else return true;
        
        
    }

</script>

<!-- MAGI STARTS HERE -->
<script>
$(document).ready(function() {  
<?php

$gor=0;
 while ($gor!=$pot) { ?>
 
 
 $("#bot<?php echo $gor ?>").click(function() {
	 
	 	$("#notif21").css('display','block');

	 for(var i=1; i<=<?php echo $pot ?>;i++)
	 $("#com"+i).css('display','none');

	 $("#com<?php echo $gor ?>").css('display','block');
	
  });
		
<?php
$gor++; } ?>

});

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
		 			<INPUT class="inserta3" type="button" value="+ Promoción" onClick="window.open('promocion.php','mywindow','width=400,height=430')"> 
		 			
		 					 			<INPUT class="inserta3" type="button" value="+ Notificación" onClick="window.open('notificacion.php','mywindow','width=400,height=430')"> 
<br>
<br>

		<table id ='tabla1'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>Tipo</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha</th>
		<th class='sorting' role='columnheader' tabindex='0'>Comentario</th>
					</tr>
		</thead>
		<tbody>


<?php 
$fot = 1;
while($row = mysql_fetch_array($resultado3)){   ?>
			
		<tr class='infooo'>
				
				<td><?php echo $row['tipo'] ?></td>

				
				<td><?php 
				if(!empty($row['fecha_notificacion'])){
				$originalDate = $row['fecha_notificacion'] ;
					$newDate = date("d-m-Y", strtotime($originalDate));
							echo $newDate;
						}
				?></td>
				<? 	if(!empty($row['comentario'])){ ?>

				<td><input type="button" action="mostrar<?php echo $fot?>()" value="Ver" id="bot<?php echo $fot?>" name="bot<?php echo $fot?>"</td>
				
				<?php $fot++;
				}
					else { echo "<td></td>";}
				?>
		</tr>
		
		

<?php } ?>
		</tbody>
</table>

</div>	
<div id="notif_wrap">
<div id="notif21" style="display:none;">

<?php   
$fot = 1;
while($row = mysql_fetch_array($resultado4)){   

		 echo "<div style='display:none;' name='com".$fot."' id='com".$fot."'>";
		 $fot++;
		 echo "<h2>Comentario</h2>";
		 echo $row['comentario'] ;
		 echo "<br><br></div>";
}
?>

</div>
</div>
		<div id="botonesrow">
		

		
		
		
		

		</div>
        </div>
        </div>
    </div>
	</body>

</html>

