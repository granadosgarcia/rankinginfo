<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), ' Consulta VW')";
mysql_query($sqlact, $con);

$_SESSION['curp']= $_REQUEST['consulta'];
$sql="SELECT * from vw WHERE curp='".$_SESSION['curp']."'";

	$result=mysql_query($sql);
if(!($result=mysql_query($sql,$con)))
{
	die ('<br>ERROR '.mysql_error());
}	
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>
<link rel='stylesheet' href='/rankinginfo/css/jquery.dataTables.css' type='text/css' charset='utf-8'>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.js'></script>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.dataTables.js'></script>
<script type='text/javascript' charset='utf-8'>
			$(document).ready(function() {
				$('#tabla1').dataTable();
			} );
		</script>

<title> Consulta VW </title>


</head>

	<body>
        <div id="entero">
            <div id="wrapper">
                <div id="header">
<h1> Consultando a <?php echo $row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']; ?></h1>
                </div>
                <div id="inputss">
<input style="visibility:hidden; display: none;"type="text" name="consulta" value="<?php echo $row['curp']?>">
    <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query_VW.php";?>



	<div id="info_deudor">
		<ul>

		<li><label class="info_deudor">Nombres</label>
		<p><?php echo $row['nombre']?></p></li>
		
		<li><label class="info_deudor">Apellido Paterno</label>
		<p><?php echo $row['apellido_paterno']?></p></li>

		<li><label class="info_deudor">Apellido Materno</label>
		<p><?php echo $row['apellido_materno']?></p></li>

			
		<li><label class="info_deudor">CURP</label>
		<p><?php echo $row['curp'] ?></p></li>
				
		<li><label class="info_deudor">No. Cliente</label>
		<p><?php echo $row['no_cliente'] ?></p></li>
			
		<li><label class="info_deudor">Teléfono</label>
		<p><?php echo $row['telefono']?></p></li>

		<li><label class="info_deudor">Domicilio</label></li><br>
		
		<li><label class="info_deudor">Calle</label>
		<p><?php echo $row['calle']?></p></li>
		
				<li><label class="info_deudor">No. Interior</label>
		<p><?php echo $row['no_interior']?></p></li>
		
				<li><label class="info_deudor">No. Exterior</label>
		<p><?php echo $row['no_exterior']?></p></li>
		
				<li><label class="info_deudor">Colonia</label>
		<p><?php echo $row['colonia']?></p></li>
		
				<li><label class="info_deudor">Ciudad</label>
		<p><?php echo $row['ciudad']?></p></li>
		
				<li><label class="info_deudor">Municipio</label>
		<p><?php echo $row['municipio']?></p></li>
		
				<li><label class="info_deudor">Delegación</label>
		<p><?php echo $row['delegacion']?></p></li>
		
				<li><label class="info_deudor">Estado</label>
		<p><?php echo $row['estado']?></p></li>
		
				
	</ul>
	

	</div>
	<div id="botonesrow1">
	</div>
				<div id="modificarrow">


		</div>
	<div id="gestiones" >
	
	<!-- DIV DE GESTIONES -->
	<?php /* Comprobación de error y ejecución del query */
	//Query todas las actividades
$sql2= "SELECT  *
FROM gestiones 
WHERE curp='$_SESSION[curp]'";

if(!($resultado2=mysql_query($sql2,$con)))
{
	die ('<br>ERROR '.mysql_error());
}

echo '<div id="botongestion">';

 echo "<br><a class='edita' href='../../../insercion_consulta/' /> Insertar Gestion </a>";
	echo '	</div>';
	echo "	
		 <table id ='tabla1' width='100%'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>Tipo de Gestión</th>
		<th class='sorting' role='columnheader' tabindex='0'>Etapa Procesal</th>
		<th class='sorting' role='columnheader' tabindex='0'>Semanas Atraso</th>
		<th class='sorting' role='columnheader' tabindex='0'>Ultimo Abono</th>
		<th class='sorting' role='columnheader' tabindex='0'>Saldo Atrasado</th>
		<th class='sorting' role='columnheader' tabindex='0'> Monto Deuda</th>
		<th class='sorting' role='columnheader' tabindex='0'>Gestion</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha</th>

					</tr>
		</thead>
		<tbody>";


while($row2 = mysql_fetch_array($resultado2)){ 
			
		echo "<tr class='infooo'>";
			
				echo "<td>". ($row2['tipo_gestion']). "</td>";
				echo "<td>". ($row2['etapa_procesal']). "</td>";
				echo "<td>". ($row2['semanas_atraso']). "</td>";
				echo "<td>". ($row2['ultimo_abono']). "</td>";
				echo "<td>". ($row2['saldo_atrasado']). "</td>";
				echo "<td>". ($row2['monto_deuda']). "</td>";
				echo "<td>". ($row2['comentario']). "</td>";
				echo "<td>". ($row2['fecha']). "</td>";


				
		echo "</tr>";
		}


echo "</tbody>
</table>"?>

		</div>

        </div>
        </div>
    </div>
	</body>

</html>
<?php } ?>

