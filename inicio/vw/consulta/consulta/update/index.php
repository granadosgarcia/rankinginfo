<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from vw WHERE curp='".$_SESSION['curp']."'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>


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

<form method="POST" onsubmit="return verifica ()" action="update.php" enctype="multipart/form-data">


	<div id="primerrow">
		<label>Nombres</label><input type="text" name="nombre" id="nombre"				value="<?php echo $row['nombre']?>" class="inputderecha">
	<br>
		<labe>Apellido Paterno</label>
		<input type="text" name="apellido_paterno"    id="apellido_paterno"		value="<?php echo $row['apellido_paterno']?>" class="inputderecha">
			</br>

		<label>Apellido Materno</label>
		<input type="text" name="apellido_materno"    id="apellido_materno"		value="<?php echo $row['apellido_materno']?>" class="inputderecha">
			</br>

			
		<br><label>CURP</label>
		<input type="text" name="curp"           id="curp"					value="<?php echo $row['curp'] ?>" class="inputderecha">
			</br>
			
			<label>Telefono</label>
		<input type="text" name="telefono"       id="telefono"		value="<?php echo $row['telefono_casa']?>" class="inputderecha"> 
			</br>

		<label>Domicilio</label>
		<input type="text" name="domicilio"    id="domilicio"		value="<?php echo $row['domicilio']?>" class="inputderecha">
			</br>

	
	
	<div id="imagenesrow">
	
	<!-- DIV DE GESTIONES -->
	
		
		<?php
		/*
<label>Saldo Atrasado</label>
		<input type="text" name="saldo_atrasado"        id="saldo_atrasado"			value="<?php echo $row['saldo_atrasado']?>" class="inputderecha">
			</div>
			<div id="arrendadorrow">
		<label>Semanas de atraso</label>
		<input type="text" name="semanas_atraso"   id="semanas_atraso"	value="<?php echo $row['semanas_atraso']?>" class="inputderecha">
			</br>

		<label>Último Abono</label>
		<input type="text" name="ultimo_abono" id="ultimo_abono"	value="<?php echo $row['ultimo_abono'] ?>" class="inputderecha">
			</br>
*/
?>		
	</div>
	<div id="botonesrow">
	
				<div id="modificarrow">
		<input type="submit" name="ok" value="Modificar" class="inserta">
		</div></form>

		</div>
        </div>
        </div>
    </div>
	</body>

</html>
<?php } ?>

