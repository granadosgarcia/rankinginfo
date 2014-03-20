<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios5.php";

$_SESSION['curp']= $_REQUEST['consulta'];

$sql="SELECT * from arrendado WHERE curp='".$_SESSION['curp']."'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

        <?php  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";?>


<title> Editar Arrendado </title>



<script> 

    function borrar ()
    {
	    if(confirm("Seguro que quiero borrar el registro de <?php echo $row['nombre'] ?>"))
	    return true;
	    
	    else return false;
    }
    
    function verifica (){
        if(document.getElementById("nombre").value=="")
        {
	        alert("Nombre Obligatorio");
	        return false;
        }
        
        if(document.getElementById("curp").value=="")
        {
	        alert("Curp Obligatorio");
	        return false;
        }
        
        if(!(document.getElementById("telefono_aval").value.match(/^\d+$/)) && document.getElementById("telefono_aval").value!="")
        {
	      	alert("El telefono del aval solo admite numeros");
	        return false;  
        }
        
        if(!(document.getElementById("telefono_casa").value.match(/^\d+$/)) && document.getElementById("telefono_casa").value!="")
        {
	      	alert("El telefono de Casa solo admite numeros");
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
		break;
case 'Juntada':
 var x=document.getElementById("hidden");
		x.style.visibility="visible";
		break;
case '-----':
 var x=document.getElementById("hidden");
		x.style.visibility="hidden";
		break;

default:
var x=document.getElementById("hidden");
		x.style.visibility="hidden";
		break;
	}

}

	</script>
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
		<label>Apellido Paterno</label>
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
		<select name='estado_civil' id='estado_civil' style='float:right;' onchange='conyuge(this)' onload="conyuge(this)">
		<?php switch ($row['estado_civil']) {
			case "Soltero":
				# code...
			echo "	
					<option>Soltero</option>
					<option>Soltera</option>
					<option>Casado</option>
					<option>Casada</option>
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Soltera":
				# code...
				echo "	
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Casado</option>
					<option>Casada</option>
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Casado":
				# code...
				echo "	
					<option>Casado</option>
					<option>Casada</option>					
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Casada":
				# code...
			echo "	
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Divorciado":
				# code...
				echo "	
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Divorciada":
				# code...
			echo "	
					<option>Divorciada</option>
					<option>Divorciado</option>
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Viudo":
				# code...
			echo "	
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Divorciada</option>
					<option>Divorciado</option>
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Viuda":
				# code...
				echo "	
					<option>Viuda</option>
					<option>Viudo</option>
					<option>Divorciada</option>
					<option>Divorciado</option>
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			case "Juntado":
				# code...
				echo "	
					<option>Juntado</option>
					<option>Juntada</option>
					<option>Viuda</option>
					<option>Viudo</option>
					<option>Divorciada</option>
					<option>Divorciado</option>
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					
				</select>";
				break;
			case "Juntada":
				# code...
			echo "	
					<option>Juntada</option>
					<option>Juntado</option>
					<option>Viuda</option>
					<option>Viudo</option>
					<option>Divorciada</option>
					<option>Divorciado</option>
					<option>Casada</option>					
					<option>Casado</option>
					<option>Soltera</option>
					<option>Soltero</option>
					
				</select>";
				break;
			case "-----":
				# code...
			echo "	
					<option>-----</option>
					<option>Soltero</option>
					<option>Soltera</option>
					<option>Casado</option>
					<option>Casada</option>
					<option>Divorciado</option>
					<option>Divorciada</option>
					<option>Viudo</option>
					<option>Viuda</option>
					<option>Juntado</option>
					<option>Juntada</option>
				</select>";
				break;
			
			default:
				# code...
				break;
		} ?><br>
		<div id="hidden" style="">
		<label style="float:left;">Nombre del Cónyuge</label>
		<input style="float:right;" type="text" name="nombre_conyuge"     id="nombre_conyuge"		value="<? echo $row['nombre_conyuge'] ?>" class="inputderecha">
		</div><br>
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

		<label>Teléfono del Aval</label>
		<input type="text" name="telefono_aval"      id="telefono_aval"			value="<?php echo $row['telefono_aval'] ?>" class="inputderecha">
			</br>

	</div>
	
	<div id="imagenesrow">
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
		<label>Comprobante Domiciliario</label></br>
		<?php if(!empty($row['img_comprobante_domicilio'])) {?>
		<img width=150px height=100px src='<?php echo $row['img_comprobante_domicilio'] ?>'/>
		<?php } ?>
		<input type='file' name='file[]' id='file'  />
	</div>
	<div id="botonesrow">
	<?php if($_SESSION['privilegios']>=10){ ?>
	<div id="borrado">
		<a href="delete.php" onclick="return borrar ()" class="rojo">Borrar Registro</a>
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

