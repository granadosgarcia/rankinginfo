<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios.php";


$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from empleado, escolaridad WHERE curp='".$_SESSION['curp']."' GROUP BY curp";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>


<title> Editar Empleado </title>
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
<h1> Editando a <?php echo $row['nombres']." ".$row['apellido_paterno']." ".$row['apellido_materno']; ?></h1>
                </div>
                <div id="inputss">



    <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query.php";?>

<form method="POST" onsubmit="return verifica ()" action="update.php" enctype="multipart/form-data">
<input style="visibility:hidden; display: none;"type="text" name="clave" value="<?php echo $row['clave']?>">

	<div id="primerrow">
		<label>Nombres</label><input type="text" name="nombres" id="nombres"				value="<?php echo $row['nombres']?>" class="inputderecha">
	</br>
		<labe>Apellido Paterno</label>
		<input type="text" name="apellido_paterno"    id="apellido_paterno"		value="<?php echo $row['apellido_paterno']?>" class="inputderecha">
			</br>

		<label>Apellido Materno</label>
		<input type="text" name="apellido_materno"    id="apellido_materno"		value="<?php echo $row['apellido_materno']?>" class="inputderecha">
			</br>

		<label>Domicilio</label>
		<input type="text" name="domicilio"    id="domicilio"		value="<?php echo $row['domicilio']?>" class="inputderecha">
			</br>

		<label>Telefono Particular</label>
		<input type="text" name="telefono_particular"       id="telefono_particular"		value="<?php echo $row['telefono_particular']?>" class="inputderecha"> 
			</br>

		<label>Telefono Personal</label>
		<input type="text" name="telefono_personal"        id="telefono_personal"			value="<?php echo $row['telefono_personal']?>" class="inputderecha">
			</br>
		<label>Estado Civil</label>
		<input type="text" name="estado_civil"        id="estado_civil"			value="<?php echo $row['estado_civil']?>" class="inputderecha">
		</br>
		<label>Nombre del Conyugue</label>
		<input type="text" name="nombre_conyuge"        id="nombre_conyuge"			value="<?php echo $row['nombre_conyuge']?>" class="inputderecha">		
		</br>
		<label>Responsable Actual</label>
		<input type="text" name="responsable_actual"        id="responsable_actual"			value="<?php echo $row['responsable_actual']?>" class="inputderecha">			
		</br>
		<label>Empleo Anteriorl</label>
		<input type="text" name="empleo_anterior"        id="empleo_anterior"			value="<?php echo $row['empleo_anterior']?>" class="inputderecha">
		</br>
		<label>Tiempo Empleo Anterior</label>
		<input type="text" name="tiempo_trabajoanterior"        id="tiempo_trabajoanterior"			value="<?php echo $row['tiempo_trabajoanterior']?>" class="inputderecha">	
		</br>
		<label>Habilidades</label>
		<input type="text" name="habilidades"        id="habilidades"			value="<?php echo $row['habilidades']?>" class="inputderecha">
		</br>
		</div>
			<div id="patronrow">
		<label>Patron Actual</label>
		<input type="text" name="patron_actual"   id="patron_actual"	value="<?php echo $row['patron_actual']?>" class="inputderecha">
			</br>

		<label>Patron Anterior</label>
		<input type="text" name="patron_anterior" id="patron_anterior"	value="<?php echo $row['patron_anterior'] ?>" class="inputderecha">
			</br>

		<label>Telefono Patron Actual</label>
		<input type="text" name="telefono_patronactual" id="telefono_patronactual" 	value="<?php echo $row['telefono_patronactual'] ?>" class="inputderecha">
			</br>

		<br><label>CURP</label>
		<input type="text" name="curp"               id="curp"					value="<?php echo $row['curp'] ?>" class="inputderecha">
			</br>

		<label>Domicilio Patron Actual</label>
		<input type="text" name="domicilio_patronactual"        id="domicilio_patronactual"			value="<?php echo $row['domicilio_patronactual'] ?>" class="inputderecha">
			</br>

		<label>Telefono Patron Anterior</label>
		<input type="text" name="telefono_patronanterior"     id="telefono_patronanterior"		value="<?php echo $row['telefono_patronanterior'] ?>" class="inputderecha">
			</br>

		<label>Domicilio Patron Anterior</label>
		<input type="text" name="domicilio_patronanterior"      id="domicilio_patronanterior"			value="<?php echo $row['domicilio_patronanterior'] ?>" class="inputderecha">
			</br>

		
	</div>
	
	<div id="imagenesrow">
		<p>Detalles Personales</p>
		<label>IFE</label></br>
		<?php if(!empty($row['img_ife'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_ife'] ?>'/></br>
		<?php } ?>
		<input type='file' name='file[]' id='file' /></br>
		<label>Foto</label></br>
		<?php if(!empty($row['img_foto'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_foto'] ?>'/></br>
		<?php } ?>
		<input type='file' name='file[]' id='file' /></br>
		<label>Comprobante Domiciliario</label>
		<?php if(!empty($row['img_comprobante_domicilio'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_comprobante_domicilio'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>
		<label>Comprobante Trabajo</label></br>
		<?php if(!empty($row['img_comprobante_trabajo'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_comprobante_trabajo'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>
		
		<Label>Escolaridad</label>
		<label>Cedula Profesional </label>
		<?php if(!empty($row['img_cedula_profesional'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_cedula_profesional'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>
		<label> Certificado Escolar </label>
		<?php if(!empty($row['img_certificado_escolar'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_certificado_escolar'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>

		
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

