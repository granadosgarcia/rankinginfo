<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/word/PHPWord.php";
header('Content-Type: application/vnd.ms-word');
header('Content-Disposition: attachment;filename="Consulta.docx"');
header('Cache-Control: max-age=0');

error_reporting(E_ERROR);

$con = mysql_connect("localhost","root","crazyMarines910208");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$database=mysql_select_db("rankinginfo") ;
if (!$database)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  session_start();
  if(!isset($_SESSION['nombreusuario'])){
     '<script> window.location = "/rankinginfo/index.php"; </script>';
	}
		

/* Contador para llenar el arreglo de consultas */
$i=0;
$k=0;
/* GET */
$consultas = $_GET['consulta'];


/* Llenado del arreglo */
foreach($consultas as $consulta)
{
   $curp[$i]= $consulta;
   $sql[$i]="SELECT DISTINCT * from empleado,escolaridad WHERE curp='".$curp[$i]."' GROUP BY curp";
   
   
   
   $resultado[$i]=mysql_query($sql[$i],$con);
   if (!$resultado[$i]) { // add this check.
    die('Invalid query: ' . mysql_error());
    }
htmlentities($resultado[$i]);
   $i++;
}


$j=0;
foreach($consultas as $consulta)
{
   $curp[$j]= $consulta;
   $sql1[$j]="SELECT * from emp_calif WHERE curp = '".$curp[$j]."' GROUP BY id";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   
   $j++;
}

//WORD
$PHPWord = new PHPWord();



$section = $PHPWord->createSection();



$PHPWord->addFontStyle('StyleR', array('bold'=>true, 'italic'=>true, 'size'=>12));
$PHPWord->addFontStyle('StyleC', array('bold'=>false, 'italic'=>false, 'size'=>13));
$PHPWord->addFontStyle('titulo', array('bold'=>true, 'italic'=>false, 'size'=>16));
$styleCell = array('valign'=>'center');


while($row=mysql_fetch_array($resultado[$k]) {


$section->addText("Consulta Ranking Information",'titulo');
		$section->addTextBreak(1);
		$table = $section->addTable();

 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Nombre:",'StyleR');
 	 	$table->addCell(9000)->addText($row['nombres'].$row["apellido_paterno"].$row["apellido_materno"],'StyleC');
 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Curp:",'StyleR');
 	 	$table->addCell(9000)->addText($row['curp'],'StyleC');

									
if (!empty($row["domicilio_actual"])) 
{ 
	$table->addRow();
	$table->addCell(3000)->addText("Domicilio Actual:",'StyleR');
	$table->addCell(9000)->addText($row["domicilio"],'StyleC');
} 

if (!empty($row["telefono_particular"]) && !empty($row["telefono_personal"])) 
{ 		
	if (!empty($row["telefono_personal"])) 
	{ 
		$table->addRow();
		$table->addCell(3000)->addText("Telefono Personal:",'StyleR');
		$table->addCell(9000)->addText($row["telefono_personal"],'StyleC');
		
	}				
	if (!empty($row["telefono_particular"])) 
	{ 
		$table->addRow();
		$table->addCell(3000)->addText("Telefono Particular:",'StyleR');
		$table->addCell(9000)->addText($row["telefono_particular"],'StyleC');	
	}									
}

if (!empty($row["estado_civil"])) 
{		
		$table->addRow();
		$table->addCell(3000)->addText("Estado :",'StyleR');
		$table->addCell(9000)->addText( $row["estado_civil"],'StyleC');							
} 

if (!empty($row["nombre_conyuge"])) 
{ 		
		$table->addRow();
		$table->addCell(3000)->addText("Nombre del Conyuge:",'StyleR');
		$table->addCell(9000)->addText( $row["nombre_conyuge"],'StyleC');										
	
} 
if (!empty($row["responsable_actual"])) 
{		
		$table->addRow();
		$table->addCell(3000)->addText("Responsable Actual:",'StyleR');
		$table->addCell(9000)->addText( $row["responsable_actual"],'StyleC');							
 	
} 
if (!empty($row["empleo_anterior"])) 
{ 	
		$table->addRow();
		$table->addCell(3000)->addText("Empleo Anterior:",'StyleR');
		$table->addCell(9000)->addText( $row["empleo_anterior"],'StyleC');										
 	
} 
if (!empty($row["tiempo_trabajoanterior"]))
{ 	
		$table->addRow();
		$table->addCell(3000)->addText("Tiempo Trabajo Anterior",'StyleR');
		$table->addCell(9000)->addText(htmlentities($row["tiempo_trabajoanterior"]),'StyleC');								
 	
} 
if (!empty($row["habilidades"]))
{	
		$table->addRow();
		$table->addCell(3000)->addText("Habilidades:",'StyleR');
		$table->addCell(9000)->addText($row["habilidades"],'StyleC');									
 	
}

if (!empty($row["patron_actual"])) 
{ 	
		$table->addRow();
		$table->addCell(3000)->addText("Patron Actual:",'StyleR');
		$table->addCell(9000)->addText($row["patron_actual"],'StyleC');	
} 
if (!empty($row["domicilio_patronactual"])) 
{ 									
		$table->addRow();
		$table->addCell(3000)->addText("Domicilio Patron Actual:",'StyleR');
		$table->addCell(9000)->addText($row["domicilio_patronactual"],'StyleC');	
} 
if (!empty($row["domicilio_patronactual"])) 
{ 									
		$table->addRow();
		$table->addCell(3000)->addText("Domicilio Patron Actual:",'StyleR');
		$table->addCell(9000)->addText($row["domicilio_patronactual"],'StyleC');	
} 
if (!empty($row["patron_anterior"])) 
{ 
		$table->addRow();
		$table->addCell(3000)->addText("Patron Anterior:",'StyleR');
		$table->addCell(9000)->addText($row["patron_anterior"],'StyleC');	
}
if (!empty($row["domicilio_patronanterior"])) 
{ 
		$table->addRow();
		$table->addCell(3000)->addText("Domicilio Patron Anterior:",'StyleR');
		$table->addCell(9000)->addText($row["domicilio_patronanterior"],'StyleC');	
} 
if (!empty($row["telefono_patronanterior"])) 
{ 
		$table->addRow();
		$table->addCell(3000)->addText("Telefono Patron Anterior:",'StyleR');
		$table->addCell(9000)->addText($row["telefono_patronanterior"],'StyleC');	
} 

//IMG	
if(!empty($row["img_foto"])||!empty($row["img_ife"])||!empty($row["img_comprobante_domicilio"])||!empty($row["img_comprobante_trabajo"])||!empty($row["img_cedula_profesional"])||!empty($row["img_certificado_escolar"]))
{
	$section->addTextBreak(2);

 	$section->addText("Imagenes",'titulo');
 	 		
 	$section->addTextBreak(1);

 	$table = $section->addTable();
 	 	
 	$table->addRow();
 	
	$table->addCell(3000)->addText("Foto",'StyleR');
	$table->addCell(3000)->addText("IFE",'StyleR');
	$table->addCell(3000)->addText("Comprobante Domicilio",'StyleR');
	$table->addCell(3000)->addText("Comprobante Trabajo",'StyleR');
	$table->addCell(3000)->addText("Cedula Profesional",'StyleR');
	$table->addCell(3000)->addText("Certificado Escolar",'StyleR');
	
	$table->addRow();
	
if (!empty($row["img_foto"])) 
{
	$table->addCell(9000)->addText($row["img_foto"],'StyleC');	
}
else 
{
	$table->addCell(9000)->addText($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg",'StyleC');	
if (!empty($row["img_ife"])) 
{ 	
	$table->addCell(9000)->addText($row["img_ife"],'StyleC');	} 
else 
{
	$table->addCell(9000)->addText($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg",'StyleC');	
if (!empty($row["img_comprobante_domicilio"])) 
{ 
	$table->addCell(9000)->addText($row["img_comprobante_domicilio"],'StyleC');	}
else 
{ 
	$table->addCell(9000)->addText($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg",'StyleC');	
if (!empty($row["img_comprobante_trabajo"])) 
{ 
	$table->addCell(9000)->addText($row["img_comprobante_trabajo"],'StyleC');	} 
else 
{ 
	$table->addCell(9000)->addText($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg",'StyleC');	
}

if (!empty($row["img_cedula_profesional"])) 
{ 
	$table->addCell(9000)->addText($row["img_cedula_profesional"],'StyleC');	} 
else 
{ 
	$table->addCell(9000)->addText($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg",'StyleC');	
}

if (!empty($row["img_certificado_escolar"])) 
{ 
	$table->addCell(9000)->addText($row["img_certificado_escolar"],'StyleC');	} 
else 
{ 
	$table->addCell(9000)->addText($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg",'StyleC');	
}



}
									
 $k=0; $o=0;
 	
 $section->addTextBreak(2);
 $section->addText("Calificacion",'titulo');
 $section->addTextBreak(1);
 while($row=mysql_fetch_array($resultado1[$k])) 
 {

 
 	 if(!empty($row['emp_desempeno '])||!empty($row['emp_calif_anterior ']))
 	 {
		
 	 	$table = $section->addTable();
 	 	
 	 	if($o==0)
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3500,$styleCell)->addText("Fecha",'StyleR');
	 	 	$table->addCell(3000,$styleCell)->addText("Pagos",'StyleR');
	 	 	$table->addCell(3000,$styleCell)->addText("Propiedad Anterior",'StyleR');
	 	 	$table->addCell(3000,$styleCell)->addText("Propiedad Actual",'StyleR');
	 	 	$table->addCell(3000,$styleCell)->addText("Calificacion General",'StyleR');
 	 	}
 	 	
 	 	$table->addRow();
 	 	
 	 	$table->addCell(3000,$styleCell)->addText($row["fecha"],'StyleR');



	 		switch($row["emp_desempeno "])
	 		{
										
				case 1:
				$table->addCell(3000,$styleCell)->addText("MuyBueno",'StyleR');
				break;
										
				case 2:
				$table->addCell(3000,$styleCell)->addText("Bueno",'StyleR');
				break;
										
				case 3:
				$table->addCell(3000,$styleCell)->addText("Regular",'StyleR');
				break;
										
				case 4:
				$table->addCell(3000,$styleCell)->addText("Malo",'StyleR');
				break;
										
				case 5:
				$table->addCell(3000,$styleCell)->addText("Muy Malo",'StyleR');
				break;	
				
				default:
				$table->addCell(3000,$styleCell)->addText("",'StyleR');
																	 
			}
	 	
	 	

			switch($row["emp_calif_anterior "])
			{
				case 1:
				$table->addCell(3000,$styleCell)->addText("MuyBueno",'StyleR');
				break;
											
				case 2:
				$table->addCell(3000,$styleCell)->addText("Bueno",'StyleR');
				break;
											
				case 3:
				$table->addCell(3000,$styleCell)->addText("Regular",'StyleR');
				break;
											
				case 4:
				$table->addCell(3000,$styleCell)->addText("Malo",'StyleR');
				break;
											
				case 5:
				$table->addCell(3000,$styleCell)->addText("Muy Malo",'StyleR');
				break;
					
				default:
				$table->addCell(3000,$styleCell)->addText("",'StyleR');			
			}

			
			if (!empty($row["fecha"])) 
			{
				$section->addTextBreak(1);
				$table = $section->addTable();
				$table->addRow();
				$table->addCell(3000,$styleCell)->addText("Comentario",'StyleR');
				$table->addRow();
				$table->addCell(9000,array('valign'=>'center'))->addText($row["comentario"],'StyleR');
			}
	 } 
	 $o++;
	 $k++;

 }
// Add hyperlink elements
$section->addTextBreak(2);

// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save("php://output");
?>

