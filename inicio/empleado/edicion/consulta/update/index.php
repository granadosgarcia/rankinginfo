<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios5.php";


$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from empleado, escolaridad WHERE curp='".$_SESSION['curp']."' GROUP BY curp";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>


<title> Editar Empleado </title>
<script> 
    
    function borrar (){
    if(confirm("Seguro que quiero borrar el registro de <?php echo $row['nombres'] ?>"))
    return true;
    
    else return false;
    }

    function verifica ()
{
        if(document.getElementById("nombres").value=="")
        {
	        alert("Nombre Obligatorio");
	        return false;
        }
        
        if(document.getElementById("curp").value=="")
        {
	        alert("Curp Obligatorio");
	        return false;
        }
        
        if(!(document.getElementById("telefono_particular").value.match(/^\d+$/)) && document.getElementById("telefono_particular").value!="")
        {
	      	alert("El telefono Particular solo admite numeros");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_personal").value.match(/^\d+$/)) && document.getElementById("telefono_personal").value!="")
        {
	      	alert("El telefono personal de Casa solo admite numeros");
	        return false;  
        }
       
        if(!(document.getElementById("telefono_patronactual").value.match(/^\d+$/)) && document.getElementById("telefono_patronactual").value!="")
        {
	      	alert("El telefono del patron actual de Casa solo admite numeros");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_patronanterior").value.match(/^\d+$/)) && document.getElementById("telefono_patronanterior").value!="")
        {
	      	alert("El telefono del patron anterior de Casa solo admite numeros");
	        return false;  
        }
               
        else
        return true;
        
        
}
</script>

<script>
 function conyuge(estado_civil){
//run some code when "onchange" event fires
 

    var conesposo = estado_civil.options[estado_civil.selectedIndex].value;


switch(conesposo)
{
case 'Soltero':
  var x=document.getElementById("hidden");
		x.style.visibility="hidden";
  break;
case 'Soltera':
 var x=document.getElementById("hidden");
		x.style.visibility="hidden";
  break;
case 'Casado':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Casada':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case 'Casado':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Divorciado':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case 'Divorciada':
  var x=document.getElementById("hidden");
		x.style.visibility="visible";
  break;
case 'Juntado':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case 'Juntada':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
case '-----':
 var x=document.getElementById("hidden");
		x.style.visibility="hidden";

default:
var x=document.getElementById("hidden");
		x.style.visibility="hidden";
	}

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



    <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_query_e.php";?>

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
			</br>
			
		<label>Calle</label>
		<input type="text" name="calle"    id="calle"		value="<?php echo $row['calle']?>" class="inputderecha">
			</br>
		<label>No. Interior</label>
		<input type="text" name="no_interior"    id="no_interior"		value="<?php echo $row['no_interior']?>" class="inputderecha">
			</br>
		<label>No. Exterior</label>
		<input type="text" name="no_exterior"    id="no_exterior"		value="<?php echo $row['no_exterior']?>" class="inputderecha">
			</br>
		<label>Colonia</label>
		<input type="text" name="colonia"    id="colonia"		value="<?php echo $row['colonia']?>" class="inputderecha">
			</br>
		<label>Ciudad</label>
		<input type="text" name="Ciudad"    id="ciudad"		value="<?php echo $row['ciudad']?>" class="inputderecha">
			</br>
		<label>Estado</label>
		<input type="text" name="estado"    id="estado"		value="<?php echo $row['estado']?>" class="inputderecha">
			</br>
		<label>Codigo Postal</label>
		<input type="text" name="codigo_postal"    id="codigo_postal"		value="<?php echo $row['codigo_postal']?>" class="inputderecha">
			</br>
		<label>Municipio</label>
		<input type="text" name="municipio"    id="municipio"		value="<?php echo $row['municipio']?>" class="inputderecha">
			</br>
		<label>Delegación</label>
		<input type="text" name="delegacion"    id="delegacion"		value="<?php echo $row['delegacion']?>" class="inputderecha">
			</br>

		<label>Telefono Particular</label>
		<input type="text" name="telefono_particular"       id="telefono_particular"		value="<?php echo $row['telefono_particular']?>" class="inputderecha"> 
			</br>

		<label>Telefono de Casa</label>
		<input type="text" name="telefono_personal"        id="telefono_personal"			value="<?php echo $row['telefono_personal']?>" class="inputderecha">
			</br>
				
				<label>Estado Civil</label>

				<select name="estado_civil" id="estado_civil" style="float:right;" onchange="conyuge(this)">
					<?php if(!empty($row['estado_civil']) && $row['estado_civil'] != '-----') {?>
					<option><?php echo $row['estado_civil']?></option><?php } 
						else 
						{ ?>
							<option>-----</option>

					<?php } ?>
					<?php if($row['estado_civil']!='Soltero'){ ?>
					<option>Soltero</option> <?php } ?>
					<?php if($row['estado_civil']!='Soltera'){ ?>
					<option>Soltera</option><?php } ?>
					<?php if($row['estado_civil']!='Casado'){ ?>
					<option>Casado</option><?php } ?>
					<?php if($row['estado_civil']!='Casada'){ ?>
					<option>Casada</option><?php } ?>
					<?php if($row['estado_civil']!='Divorciado'){ ?>
					<option>Divorciado</option><?php } ?>
					<?php if($row['estado_civil']!='Divorciada'){ ?>
					<option>Divorciada</option><?php } ?>
					<?php if($row['estado_civil']!='Viudo'){ ?>
					<option>Viudo</option><?php } ?>
					<?php if($row['estado_civil']!='Viuda'){ ?>
					<option>Viuda</option><?php } ?>
					<?php if($row['estado_civil']!='Juntado'){ ?>
					<option>Juntado</option><?php } ?>
					<?php if($row['estado_civil']!='Juntada'){ ?>
					<option>Juntada</option><?php } ?>
					<?php if(!empty($row['estado_civil']) && $row['estado_civil'] != '-----') {?>
					<option>-----</option>
					<?php } ?>				
</select>
		
		
		
		</br>
		<div id='hidden'>
		<label>Nombre del Conyuge</label>
		<input type="text" name="nombre_conyuge"        id="nombre_conyuge"			value="<?php echo $row['nombre_conyuge']?>" class="inputderecha">		
		</div>

		</br>
		<label>Responsable Actual</label>
		<input type="text" name="responsable_actual"        id="responsable_actual"			value="<?php echo $row['responsable_actual']?>" class="inputderecha">			
		</br>
		<label>Empleo Anterior</label>
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

		<label>CURP</label>

		<input type="text" name="curp"               id="curp"					value="<?php echo $row['curp'] ?>" class="inputderecha">
			</br>			

		<label>Clave de Elector (IFE)</label>

		<input type="text" name="clave_ife"               id="clave_ife"					value="<?php echo $row['clave_ife'] ?>" class="inputderecha">
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

		<label>Grado Escolar</label>
		<input type="text" name="grado_escolar"      id="grado_escolar"			value="<?php echo $row['grado_escolar'] ?>" class="inputderecha">
						</br>			

		<label>Lugar de Estudio 1</label>
		<input type="text" name="lugar_estudio"      id="lugar_estudio"			value="<?php echo $row['lugar_estudio'] ?>" class="inputderecha">
		</br>
		<label>Lugar de Estudio 2</label>
		<input type="text" name="lugar_estudio2"      id="lugar_estudio2"			value="<?php echo $row['lugar_estudio2'] ?>" class="inputderecha">
			</br>	
		<label>Lugar de Estudio 3</label>
		<input type="text" name="lugar_estudio3"      id="lugar_estudio3"			value="<?php echo $row['lugar_estudio3'] ?>" class="inputderecha">
			</br>
		<label>Lugar de Estudio 4</label>
		<input type="text" name="lugar_estudio4"      id="lugar_estudio4"			value="<?php echo $row['lugar_estudio4'] ?>" class="inputderecha">
			</br>
		<label>Lugar de Estudio 5</label>
		<input type="text" name="lugar_estudio5"      id="lugar_estudio5"			value="<?php echo $row['lugar_estudio5'] ?>" class="inputderecha">
			</br>	</div>
	
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
		<label>Comprobante Domiciliario</label><br>
		<?php if(!empty($row['img_comprobante_domicilio'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_comprobante_domicilio'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>
		<label>Comprobante Trabajo</label></br>
		<?php if(!empty($row['img_comprobante_trabajo'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_comprobante_trabajo'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>
		
		<Label>Escolaridad</label><br>
		<label>Cedula Profesional </label><br>
		<?php if(!empty($row['img_cedula_profesional'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_cedula_profesional'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br>
		<label> Certificado Escolar </label><br>
		<?php if(!empty($row['img_certificado_escolar'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_certificado_escolar'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  /></br><br>

		
	</div>
	<div id="botonesrow">
		<?php if($_SESSION['privilegios']>=10){ ?>
	<div id="borrado">
		<a href="delete.php" onclick="return borrar()" class="rojo">Borrar Registro</a>
	</div>
	<?php } ?>
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

