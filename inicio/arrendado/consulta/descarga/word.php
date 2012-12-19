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
    echo '<script> window.location = "/rankinginfo/index.php"; </script>';
	}
		
	
/* Contador para llenar el arreglo de consultas */
$i=0;
$k=0;

/* GET */
$consultas = $_SESSION['consultadescarga'];
/* Llenado del arreglo */
foreach($consultas as $consulta)
{
   $curp[$i]= $consulta;
   $sql[$i]="SELECT * from arrendado WHERE curp='".$curp[$i]."' ";
   
   
   
   $resultado[$i]=mysql_query($sql[$i],$con);
   if (!$resultado[$i]) { // add this check.
    die('Invalid query: ' . mysql_error());
    }

   $i++;
}


$j=0;
foreach($consultas as $consulta)
{
   $curp[$j]= $consulta;
   $sql1[$j]="SELECT * FROM arr_calif WHERE curp = '".$curp[$j]."' GROUP BY id";
   
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


 while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) 
 { 
		$section->addText("Consulta Ranking Information",'titulo');
		$section->addTextBreak(1);
		$table = $section->addTable();

 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Nombre:",'StyleR');
 	 	$table->addCell(9000)->addText($row['nombre']." ".$row["apellido_paterno"]." ".$row["apellido_materno"],'StyleC');
 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Curp:",'StyleR');
 	 	$table->addCell(9000)->addText($row['curp'],'StyleC');
 	 	
 	 	
 	 	if (!empty($row["domicilio_actual"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Domicilio Actual:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['domicilio_actual'],'StyleC');
 	 	}
 	 	
 	 	
 	 	if (!empty($row["telefono_casa"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Telefono Personal:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['telefono_casa'],'StyleC');
 	 	}
 	 	
 	 	 	 	
 	 	if (!empty($row["estado_civil"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Estado Civil:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['estado_civil'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["nombre_conyuge"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Nombre Conyuge:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['nombre_conyuge'],'StyleC');
 	 	}
 	 	
 	 	
 	  	if (!empty($row["domicilio_anterior"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Domicilio Anterior:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['domicilio_anterior'],'StyleC');
 	 	}

 	  	if (!empty($row["nombre_aval"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Nombre del Aval:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['nombre_aval'],'StyleC');
 	 	}
 	 	
 	 	
 	 	if (!empty($row["domicilio_aval"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Domicilio del Aval:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['domicilio_aval'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["telefono_aval"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Telefono del Aval:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['telefono_aval'],'StyleC');
 	 	}
 	 	
 	 	
 	 	if(!empty($row['img_foto']) || !empty($row['img_comprobante_domicilio']) || !empty($row['img_ife']))
 	 	{
 	 		
 	 		$section->addTextBreak(2);

 	 		$section->addText("Imagenes",'titulo');
 	 		
 	 		$section->addTextBreak(1);

 	 		$table = $section->addTable();
 	 	
 	 		$table->addRow();
	
	 	 	
		 	 	$table->addCell(3000,$styleCell)->addText("Foto:",'StyleR');
	 	 	
	 	 	
	 	 	
		 	 	$table->addCell(3000,$styleCell)->addText("Comprobante Domicilio:",'StyleR');
	 	 	
	 	 	
	 	 	
		 	 	$table->addCell(3000,$styleCell)->addText("IFE:",'StyleR');
	 	 	
	 	 	
	 	 	
	 	 	
	 	 	$table->addRow();
	 	 	
	 	 	
		 	 //IMG IFE
	 	 	if(!empty($row['img_foto']))
	 	 	{
		 	 	$table->addCell(9000,$styleCell)->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_foto'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$table->addCell(9000,$styleCell)->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 //IMG COMPROBANTE Domicilio
	 	 	if(!empty($row['img_comprobante_domicilio']))
	 	 	{
		 	 	$table->addCell(9000,$styleCell)->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_comprobante_domicilio'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$table->addCell(9000,$styleCell)->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 //IMG IFE
	 	 	if(!empty($row['img_ife']))
	 	 	{
		 	 	$table->addCell(9000,$styleCell)->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_ife'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$table->addCell(9000,$styleCell)->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }

	 	 }

 
 	
 $o=0;
 	
 $section->addTextBreak(2);

 while($row=mysql_fetch_array($resultado1[$k])) 
 {

 
 	 if(!empty($row['arr_pagos'])||!empty($row['arr_propiedad_actual'])||!empty($row['arr_propiedad_anterior'])||!empty($row['arr_general'])||!empty($row['comentario']))
 	 {
 	 	 $section->addText("Calificacion",'titulo');
 	 	 $section->addTextBreak(1);
		
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



	 		switch($row["arr_pagos"])
	 		{
										
				case 1:
				$table->addCell(3000,$styleCell)->addText("Muy Bueno",'StyleC');
				break;
										
				case 2:
				$table->addCell(3000,$styleCell)->addText("Bueno",'StyleC');
				break;
										
				case 3:
				$table->addCell(3000,$styleCell)->addText("Regular",'StyleC');
				break;
										
				case 4:
				$table->addCell(3000,$styleCell)->addText("Malo",'StyleC');
				break;
										
				case 5:
				$table->addCell(3000,$styleCell)->addText("Muy Malo",'StyleC');
				break;	
				
				default:
				$table->addCell(3000,$styleCell)->addText("",'StyleC');
																	 
			}
	 	
	 	

			switch($row["arr_propiedad_anterior"])
			{
				case 1:
				$table->addCell(3000,$styleCell)->addText("Muy Bueno",'StyleC');
				break;
											
				case 2:
				$table->addCell(3000,$styleCell)->addText("Bueno",'StyleC');
				break;
											
				case 3:
				$table->addCell(3000,$styleCell)->addText("Regular",'StyleC');
				break;
											
				case 4:
				$table->addCell(3000,$styleCell)->addText("Malo",'StyleC');
				break;
											
				case 5:
				$table->addCell(3000,$styleCell)->addText("Muy Malo",'StyleC');
				break;
					
				default:
				$table->addCell(3000,$styleCell)->addText("",'StyleC');			}
		
		

			switch($row["arr_propiedad_actual"])
			{
				case 1:
				$table->addCell(3000,$styleCell)->addText("Muy Bueno",'StyleC');
				break;
										
				case 2:
				$table->addCell(3000,$styleCell)->addText("Bueno",'StyleC');
				break;
										
				case 3:
				$table->addCell(3000,$styleCell)->addText("Regular",'StyleC');
				break;
										
				case 4:
				$table->addCell(3000,$styleCell)->addText("Malo",'StyleC');
				break;
										
				case 5:
				$table->addCell(3000,$styleCell)->addText("Muy Malo",'StyleC');
				break;	
				
				default:
				$table->addCell(3000,$styleCell)->addText("",'StyleC');			
			}
	 	
		
		

			switch($row["arr_general"])
			{
				case 1:
				$table->addCell(3000,$styleCell)->addText("Muy Bueno",'StyleC');
				break;
										
				case 2:
				$table->addCell(3000,$styleCell)->addText("Bueno",'StyleC');
				break;
										
				case 3:
				$table->addCell(3000,$styleCell)->addText("Regular",'StyleC');
				break;

				case 4:
				$table->addCell(3000,$styleCell)->addText("Malo",'StyleC');
				break;
										
				case 5:
				$table->addCell(3000,$styleCell)->addText("Muy Malo",'StyleC');
				break;
				
				default:
				$table->addCell(3000,$styleCell)->addText("",'StyleC');																								 
			}
			
			if (!empty($row["fecha"])) 
			{
				$section->addTextBreak(1);
				$table = $section->addTable();
				$table->addRow();
				$table->addCell(3000,$styleCell)->addText("Comentario",'StyleC');
				$table->addRow();
				$table->addCell(9000,array('valign'=>'center'))->addText($row["comentario"],'StyleR');
			}
	 } 
	 $o++;

 }
	 $k++;


}





// Add hyperlink elements
$section->addTextBreak(2);

// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save("php://output");
?>