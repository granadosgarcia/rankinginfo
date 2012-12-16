<?php

$dir2 = $_POST['curp'];
$dir3 = "/rankinginfo/uploads/img12/";

$dir = $_POST['curp']."/";

//Comprobar que el directorio no exista
if(!is_dir($_SERVER['DOCUMENT_ROOT'].$dir3.$dir2)){
//Crear directorio
mkdir($_SERVER['DOCUMENT_ROOT'].$dir3.$dir2);}



$allowedExts = array("jpg", "jpeg", "gif", "png","JPG", "JPEG", "GIF", "PNG");


$sql="UPDATE arrendado SET ";
$contador=0;
$contador=0;

for($i=0;$i<3;$i++){
if(!empty($_FILES["file"]["name"][$i]))
$contador++;
}

for($i=0;$i<3;$i++)
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

		    if(!empty($_FILES["file"]["name"][$i])){
		    
		    	$contador2++;
		      		if($i==0){
		      		move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."ife".".".$extension);		      		
		      		$var[$i] ="img_ife='/rankinginfo/uploads/img12/".$dir."ife".".".$extension;}
		      		else if ($i==1){
		      		move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."foto".".".$extension);		      		
		      		$var[$i] ="img_foto='/rankinginfo/uploads/img12/".$dir."foto".".".$extension;}
		      		else if ($i==2){
		      		move_uploaded_file($_FILES["file"]["tmp_name"][$i],
		      		$_SERVER['DOCUMENT_ROOT'].$dir3.$dir."comprobante_domicilio".".".$extension);
		      		$var[$i] ="img_comprobante_domicilio='/rankinginfo/uploads/img12/".$dir."comprobante_domicilio".".".$extension;
		      		}
				      
				      $sql.= $var[$i];
				      $sql.="'";
				      
				      if(($contador)!=($contador2))
				     	 $sql.=", ";
				     	 
/* 				     	 echo "contador1:".$contador."  contador2:".$contador2; */
				    
	
			
				      	}
		}
}
}
		
				$sql.=" WHERE curp='$_POST[curp]'";
/* 						echo "<br><br>".$sql."<br><br>"; */

		      if (!mysql_query($sql,$con))
				  {
				  	die('Error al insertar imagen a la base de datos' . mysql_error());
				  }
  
  
 ?>