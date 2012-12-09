<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from arrendado WHERE curp='".$_SESSION['curp']."'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>


<title> Editar Arrendado </title>
<script> 
    
    function borrar (){
    if(confirm("Seguro que quiero borrar el registro de <?php echo $row['nombre'] ?>"))
    return true;
    
    else return false;
    }

    function verifica (){
        if(document.getElementById("nombre").value==""){
        alert("Nombre Obligatorio");
        return false;}
        
        if(document.getElementById("curp").value=="")
        {
        	alert("Curp Obligatorio");
        	return false;
        }
        
        else
        return true;
    }
</script>
<meta charset="utf-8"> 
</head>

	<body>
        <div id="entero">
            <div id="wrapper">
                <div id="header">
<h1> Editando a <?php echo $row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']; ?></h1>
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

		<label>Domicilio Actual</label>
		<input type="text" name="domicilio_actual"    id="domicilio_actual"		value="<?php echo $row['domicilio_actual']?>" class="inputderecha">
			</br>

		<label>Telefono de casa</label>
		<input type="text" name="telefono_casa"       id="telefono_casa"		value="<?php echo $row['telefono_casa']?>" class="inputderecha"> 
			</br>

		<label>Estado Civil</label>
		<input type="text" name="estado_civil"        id="estado_civil"			value="<?php echo $row['estado_civil']?>" class="inputderecha">
			</div>
			<div id="arrendadorrow">
		<label>Arrendador Actual</label>
		<input type="text" name="arrendador_actual"   id="arrendador_actual"	value="<?php echo $row['arrendador_actual']?>" class="inputderecha">
			</br>

		<label>Arrendador Anterior</label>
		<input type="text" name="arrendador_anterior" id="arrendador_anterior"	value="<?php echo $row['arrendador_anterior'] ?>" class="inputderecha">
			</br>

		<label>Domicilio Anterior</label>
		<input type="text" name="domicilio_anterior" id="domicilio_anterior" 	value="<?php echo $row['domicilio_anterior'] ?>" class="inputderecha">
			</br>

		<br><label>CURP</label>
		<input type="text" name="curp"               id="curp"					value="<?php echo $row['curp'] ?>" class="inputderecha">
			</br>

		<label>Nombre del Aval</label>
		<input type="text" name="nombre_aval"        id="nombre_aval"			value="<?php echo $row['nombre_aval'] ?>" class="inputderecha">
			</br>

		<label>Domicilio del Aval</label>
		<input type="text" name="domicilio_aval"     id="domicilio_aval"		value="<?php echo $row['domicilio_aval'] ?>" class="inputderecha">
			</br>

		<label>Télefono del Aval</label>
		<input type="text" name="telefono_aval"      id="telefono_aval"			value="<?php echo $row['telefono_aval'] ?>" class="inputderecha">
			</br>

		<label>Nombre del Conyuge</label>
		<input type="text" name="nombre_conyuge"     id="nombre_conyuge"		value="<? $row['nombre_conyuge'] ?>" class="inputderecha">
	</div>
	
	<div id="imagenesrow">
		<label>IFE</label></br>
		<?php if(!empty($row['img_ife'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_ife'] ?>'/></br>
		<?php } ?>
		<input type='file' name='file[]' id='file' /></br>
		<label>Foto</label></br>
		<?php if(!empty($row['img_foto'])) {?>
		<img width=150px height=100px src='<?php $row['img_foto'] ?>'/></br>
		<?php } ?>
		<input type='file' name='file[]' id='file' /></br>
		<label>Comprobante Domiciliario</label></br>
		<?php if(!empty($row['img_comprobante_domicilio'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_comprobante_domicilio'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  />
	</div>
	<div id="botonesrow">
	
	<div id="borrado">
		<a href="delete.php" onclick="return borrar ()" class="rojo">Borrar Registro</a>
	</div>
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

