<?php

$dir2 = $_POST['curp'];
$dir3 = "/rankinginfo/uploads/img21/";

$dir = $_POST['curp']."/";

//Comprobar que el directorio no exista
if(!is_dir($_SERVER['DOCUMENT_ROOT'].$dir3.$dir2)){
//Crear directorio
mkdir($_SERVER['DOCUMENT_ROOT'].$dir3.$dir2);}



$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG" , "GIF" , "PNG");


$sql="UPDATE empleado emp,escolaridad es SET ";
$contador=0;
$contador=0;
for($i=0;$i<6;$i++){
if(!empty($_FILES["file"]["name"][$i]))
$contador++;
}

for($i=0;$i<6;$i++)
{
$extension = end(explode(".", $_FILES["file"]["name"][$i]));

	if ((($_FILES["file"]["type"][$i] == "image/gif") || 
		 ($_FILES["file"]["type"][$i] == "image/jpeg")|| 
		 ($_FILES["file"]["type"][$i] == "image/pjpeg")) && 
		 ($_FILES["file"]["size"][$i] < 20000000) && 
		  in_array($extension, $allowedExts))
	
	  {
	  	if ($_FILES["file"]["error"][$i] > 0)
	    {
	    	echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br />";
	    }
	    else
	    {
		    		if($i==0){
		      		move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."ife".".".$extension);		      		
		      		$var[$i] ="img_ife='/rankinginfo/uploads/img21/".$dir."ife".".".$extension;$contador2++;}
		      		else if ($i==1){
		      		move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."foto".".".$extension);		      		
		      		$var[$i] ="img_foto='/rankinginfo/uploads/img21/".$dir."foto".".".$extension;$contador2++;}
		      		else if ($i==2){
		      		move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."comprobante_domicilio".".".$extension);
		      		$var[$i] ="img_comprobante_domicilio='/rankinginfo/uploads/img21/".$dir."comprobante_domicilio".".".$extension;$contador2++;
		      		}
		      		else if ($i==3){
			      	move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."comprobante_trabajo".".".$extension);
		      		$var[$i] ="img_comprobante_trabajo='/rankinginfo/uploads/img21/".$dir."comprobante_trabajo".".".$extension;	$contador2++;
		      		}
		      		
		      		else if ($i==4){
			      	move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."img_cedula_profesional".".".$extension);
		      		$var[$i] ="img_cedula_profesional='/rankinginfo/uploads/img21/".$dir."img_cedula_profesional".".".$extension;$contador2++;	
		      		}
		      		
		      		else if ($i==5){
			      	move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."img_certificado_escolar".".".$extension);
		      		$var[$i] ="img_certificado_escolar='/rankinginfo/uploads/img21/".$dir."img_certificado_escolar".".".$extension;	$contador2++;
		      		}
		      		
		      		
		      			      		
	      
				      $sql.= mysql_real_escape_string($var[$i]);
				      $sql.="'";
				      

				      if($contador!=$contador2)
				     	 $sql.=", ";
					
	
			    
			}
}
}
		
				$sql.=" WHERE curp='$_POST[curp]'";

		      if (!mysql_query($sql,$con))
				  {
				  echo "<br>". $sql."<br>";
				  	die('<br>Error al insertar imagen a la base de datos' . mysql_error());
				  }
  
  
 ?>