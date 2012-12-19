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
   $sql[$i]="SELECT * from empleado, escolaridad WHERE curp='".$curp[$i]."' ";
   
   
   
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
   $sql1[$j]="SELECT * FROM emp_calif WHERE curp = '".$curp[$j]."' GROUP BY id";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   $j++;
}

//WORD
$PHPWord = new PHPWord();






$PHPWord->addFontStyle('StyleR', array('bold'=>true, 'italic'=>true, 'size'=>12));
$PHPWord->addFontStyle('StyleC', array('bold'=>false, 'italic'=>false, 'size'=>13));
$PHPWord->addFontStyle('titulo', array('bold'=>true, 'italic'=>false, 'size'=>16));
$styleCell = array('valign'=>'center');


 while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) 
 { 
 	$section = $PHPWord->createSection();

		$section->addText("Consulta Ranking Information",'titulo');
		$section->addTextBreak(1);
		$table = $section->addTable();

 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Nombre:",'StyleR');
 	 	$table->addCell(9000)->addText($row['nombres']." ".$row["apellido_paterno"]." ".$row["apellido_materno"],'StyleC');
 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Curp:",'StyleR');
 	 	$table->addCell(9000)->addText($row['curp'],'StyleC');
 	 	
 	 	
 	 	if (!empty($row["domicilio"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Domicilio Actual:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['domicilio'],'StyleC');
 	 	}
 	 	
 	 	
 	 	if (!empty($row["telefono_particular"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Telefono Particular:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['telefono_particular'],'StyleC');
 	 	}
 	 	
 	 	 	 	
 	 	if (!empty($row["telefono_personal"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Telefono Personal:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['telefono_personal'],'StyleC');
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
	 	 	$table->addCell(3000)->addText("Nombre del Conyuge:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['nombre_conyuge'],'StyleC');
 	 	}

 	  	if (!empty($row["patron_anterior"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Patron Anterior:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['patron_anterior'],'StyleC');
 	 	}
 	 	
 	 	
 	 	if (!empty($row["patron_actual"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Patron Actual:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['patron_actual'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["responsable_actual"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Responsable Actual:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['responsable_actual'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["telefono_patronactual"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Telefono del Patron Actual:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['telefono_patronactual'],'StyleC');
 	 	}

 	 	if (!empty($row["domicilio_patronactual"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Domicilio del Patron Actual Actual:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['domicilio_patronactual'],'StyleC');
 	 	}
 	 	if (!empty($row["telefono_patronanterior"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Telefono del Patron Anterior:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['telefono_patronanterior'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["domicilio_patronanterior"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Domiclio del Patron Anterior:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['domicilio_patronanterior'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["empleo_anterior"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Empleo Anterior:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['empleo_anterior'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["tiempo_trabajoanterior"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Tiempo de trabajo de su ultimo empleo:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['tiempo_trabajoanterior'],'StyleC');
 	 	}
 	 	
 	 	if (!empty($row["habilidades"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Habilidades:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['habilidades'],'StyleC');
 	 	} 	 
 	 	
 	 	if (!empty($row["grado_escolar"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Grado Escolar:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['grado_escolar'],'StyleC');
 	 	} 
 	 	
 	 	
 	 	if (!empty($row["habilidades"])) 
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3000)->addText("Lugar de Estudio:",'StyleR');
	 	 	$table->addCell(9000)->addText($row['lugar_estudio'],'StyleC');
 	 	} 

 
 	
  $o=0;
 	
 $section->addTextBreak(2);

 while($row1=mysql_fetch_array($resultado1[$k])) 
 {

 
 	 if(!empty($row['emp_desempeno'])||!empty($row1['emp_calif_anterior'])||!empty($row1['comentario']))
 	 {
 	 	 $section->addText("Calificacion",'titulo');
 	 	 $section->addTextBreak(1);
		
 	 	$table = $section->addTable();
 	 	
 	 	if($o==0)
 	 	{
	 	 	$table->addRow();
	 	 	$table->addCell(3500,$styleCell)->addText("Fecha",'StyleR');
	 	 	$table->addCell(3000,$styleCell)->addText("Desempeño",'StyleR');
	 	 	$table->addCell(3000,$styleCell)->addText("Calificación Anterior",'StyleR');

 	 	}
 	 	
 	 	$table->addRow();
 	 	
 	 	$table->addCell(3000,$styleCell)->addText($row1["fecha"],'StyleR');



	 		switch($row1["emp_desempeno"])
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
	 	
	 	

			switch($row1["emp_calif_anterior"])
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
		
		

						
			if (!empty($row1["fecha"])) 
			{
				$section->addTextBreak(1);
				$table = $section->addTable();
				$table->addRow();
				$table->addCell(3000,$styleCell)->addText("Comentario",'StyleC');
				$table->addRow();
				$table->addCell(9000,array('valign'=>'center'))->addText($row1["comentario"],'StyleR');
			}
	 } 
	 $o++;

 }
 
 $section = $PHPWord->createSection();

 
   	 	if(!empty($row['img_foto']) || !empty($row['img_comprobante_domicilio']) || !empty($row['img_ife'])|| !empty($row['img_comprobante_trabajo'])|| !empty($row['img_certificado_escolar'])|| !empty($row['img_cedula_profesional']))
 	 	{
 	 		
 	 		$section->addTextBreak(2);

 	 		$section->addText("Imagenes",'titulo');
 	 		
 	 		$section->addTextBreak(1);


	 	 	
	 	 	$section->addText("Foto:",'StyleR');

		 	 //IMG IFE
	 	 	if(!empty($row['img_foto']))
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_foto'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 
		 	 $section->addText("Comprobante Domicilio:",'StyleR');

		 	 //IMG COMPROBANTE Domicilio
	 	 	if(!empty($row['img_comprobante_domicilio']))
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_comprobante_domicilio'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 
		 	 	$section->addText("IFE:",'StyleR');

		 	 //IMG IFE
	 	 	if(!empty($row['img_ife']))
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_ife'], array('width'=>100, 'height'=>150, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 
		 	 $section->addText("Cédula Profesional:",'StyleR');
		 	 
	 	 	if(!empty($row['img_cedula_profesional']))
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_cedula_profesional'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 
		 	 $section->addText("Comprobante de Trabajo:",'StyleR');
		 	 
	 	 	if(!empty($row['img_comprobante_trabajo']))
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_comprobante_trabajo'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }
		 	 
		 	 $section->addText("Certificado Escolar:",'StyleR');
		 	 	
	 	 	if(!empty($row['img_certificado_escolar']))
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT'].$row['img_certificado_escolar'], array('width'=>150, 'height'=>100, 'align'=>'center'));
	 	 	}
	 	 	else
	 	 	{
		 	 	$section->addImage($_SERVER['DOCUMENT_ROOT']."/rankinginfo/img/default.jpg", array('width'=>150, 'height'=>100, 'align'=>'center'));
		 	 }

	 	 } 
	 $k++;
	 }





// Add hyperlink elements
$section->addTextBreak(2);

// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save("php://output");
?>