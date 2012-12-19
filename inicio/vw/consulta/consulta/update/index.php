<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";

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
    <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query.php";?>



	<div id="primerrow">
		<label>Nombres</label>
		<p><?php echo $row['nombre']?></p>
	<br>
		<labe>Apellido Paterno</label>
		<p><?php echo $row['apellido_paterno']?></p>
			</br>

		<label>Apellido Materno</label>
		<p><?php echo $row['apellido_materno']?></p>
			</br>

			
		<br><label>CURP</label>
		<p><?php echo $row['curp'] ?></p>
			</br>
			
			<label>Telefono</label>
		<p><?php echo $row['telefono_casa']?></p> 
			</br>

		<label>Domicilio</label>
		<p><?php echo $row['domicilio']?></p>
			</br>

	
	

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
	echo "	
		 <table id ='tabla1'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>Tipo de Gestión</th>
		<th class='sorting' role='columnheader' tabindex='0'>Etapa Procesal</th>
		<th class='sorting' role='columnheader' tabindex='0'>Etapa Juicio</th>
		<th class='sorting' role='columnheader' tabindex='0'>Semanas Atraso</th>
		<th class='sorting' role='columnheader' tabindex='0'>Ultimo Abono</th>
		<th class='sorting' role='columnheader' tabindex='0'>Saldo Atrasado</th>
		<th class='sorting' role='columnheader' tabindex='0'>Comentario</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha</th>

					</tr>
		</thead>
		<tbody>";


while($row2 = mysql_fetch_array($resultado2)){ 
			
		echo "<tr class='infooo'>";
			
				echo "<td>". htmlentities($row2['tipo_gestion']). "</td>";
				echo "<td>". htmlentities($row2['etapa_procesal']). "</td>";
				echo "<td>". htmlentities($row2['etapa_juicio']). "</td>";
				echo "<td>". htmlentities($row2['semanas_atraso']). "</td>";
				echo "<td>". htmlentities($row2['ultimo_abono']). "</td>";
				echo "<td>". htmlentities($row2['saldo_atrasado']). "</td>";
				echo "<td>". htmlentities($row2['comentario']). "</td>";
				echo "<td>". htmlentities($row2['fecha']). "</td>";

				
		echo "</tr>";
		}


echo "</tbody>
</table>"?>
<div id="botonesrow">

<?php echo "<br><a class='boton' href='../../../insercion_consulta/' /> Insertar Gestion </a>" ?>
		</div>
		</div>

        </div>
        </div>
    </div>
	</body>

</html>
<?php } ?>

