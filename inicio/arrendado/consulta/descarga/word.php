<?php
// Include the PHPWord.php, all other classes were loaded by an autoloader
require_once 'PHPWord.php';

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

//-------------
error_reporting(E_ERROR);



/* Contador para llenar el arreglo de consultas */
$i=0;
$k=0;
/* GET */
$consultas = $_SESSION['consultasdescarga'];
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
   $sql1[$j]="SELECT * from arr_calif as a, calificacion as c WHERE a.curp = '".$curp[$j]."' GROUP BY c.clave";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   $j++;
}
//Inserta Imagen _(Logo)_

$date=date("d/m/Y");

// Create a new PHPWord Object
$PHPWord = new PHPWord();

//SECTION
$section = $PHPWord->createSection(array('marginLeft'=>600, 'marginRight'=>600, 'marginTop'=>600, 'marginBottom'=>600));



 while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { 

											 echo $row["nombre"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"];
									
										 echo $row["curp"]; 
										
 if (!empty($row["domicilio_actual"])) { 

										 echo $row["domicilio_actual"]; 
 } if (!empty($row["telefono_particular"]) && !empty($row["telefono_personal"])) { 			
			 if (!empty($row["estado_civil"])) { 							
									 echo $row["telefono_personal"]; 
			 } 						
				
			 if (!empty($row["telefono_particular"])) { 		
										 echo $row["telefono_casa"]; 
										 } 
									
									
									 } if (!empty($row["estado_civil"])) { 										
									
 } if (!empty($row["nombre_conyuge"])) { 										
									
										 echo $row["nombre_conyuge"]; 
									
 } if (!empty($row["domicilio_anterior"])) { 										
									
										 echo $row["domicilio_anterior"]; 
									
										
 } if (!empty($row["nombre_aval"])) { 										
									
										 echo $row["nombre_aval"]; 
									
 } if (!empty($row["domicilio_aval"])){ 										
									
										 echo $row["domicilio_aval"]; 
									
 } if (!empty($row["telefono_aval"])){										
									
										 echo $row["telefono_aval"]; 
									
 } 

									
 if (!empty($row["img_foto"])) { 	
										 echo $row["img_foto"];
 } else {
/* 										/rankinginfo/img/default.jpg */
								
 }  
									
 if (!empty($row["img_ife"])) { 	
										 echo $row["img_ife"];
 } else {
/* 										/rankinginfo/img/default.jpg */
								
 }				
									
										 if (!empty($row["img_comprobante_domicilio"])) { 	
										 echo $row["img_comprobante_domicilio"];
 } else { 
/* 										/rankinginfo/img/default.jpg */
  }

 if (!empty($row["arrendador_actual"])) { 	
									
										 echo $row["arrendador_actual"]; 
									
 } if (!empty($row["domicilio_arrendador_actual"])) { 									
									
										 echo $row["domicilio_arrendador_actual"]; 
									
 } if (!empty($row["telefono_arrendador_actual"])) { 									
									
										 echo $row["telefono_arrendador_actual"]; 
									
 } 
	if (!empty($row["arrendador_anterior"])) { 
										
										 echo $row["arrendador_anterior"]; 
									
 } if (!empty($row["domicilio_arrendador_anterior"])) { 
									
										 echo $row["domicilio_arrendador_anterior"]; 
									
 } if (!empty($row["telefono_arrendador_anterior"])) { 
									
										 echo $row["telefono_arrendador_anterior"]; 
									
 } 
							
 while($row=mysql_fetch_array($resultado1[$k])){ 							
 if (!empty($row["fecha"])) { 
								
								  echo $row["fecha"]; 
								
 } 
								 if (!empty($row["arr_pagos"])) { 
									
										
										switch($row["arr_pagos"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 
																				
									
									
		  if (!empty($row["arr_propiedad_anterior"])) { 
							
									
										
										switch($row["arr_propiedad_anterior"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 
									
		 } if (!empty($row["arr_propiedad_actual"])) { 

									
										
										switch($row["arr_propiedad_actual"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 
									
					 } if (!empty($row["arr_general"])) { 

									
										
										switch($row["arr_general"]){
										
										case 1:
										echo "Muy Bueno";
										break;
										
										case 2:
										echo "Bueno";
										break;
										
										case 3:
										echo "Normal";
										break;
										
										case 4:
										echo "Malo";
										break;
										
										case 5:
										echo "Muy Malo";
										break;																				 
										}
										 
										
					 } 	
								 } if (!empty($row["comentario"])) { 
								
								 
										 
				
									

										 echo $row["comentario"];
								
								
								 } 
 }					
		
	
			$k++;
	}





//-------------


 
//HEADER
$header = $section->createHeader();
	//Image
	//DATE
	
	// Add table
$table = $section->addTable();


	$table->addRow();
	

		$table->addCell(7000)->addText($date, array('name'=>'Times New Roman', 'size'=>12, 'bold'=>true, 'align'=>'left'));
		$table->addCell(1750)->addImage('img/third.jpg', array('width'=>100, 'height'=>100, 'align'=>'right'));
/*
$header->
$header->
*/






$section->addText('Consulta Ranking Information', array('name'=>'Times New Roman', 'size'=>16, 'bold'=>true, 'align'=>'center'));

$PHPWord->addFontStyle('myOwnStyle', array('name'=>'Verdana', 'size'=>14, 'color'=>'1B2232'));
$section->addText('Hello world! I am formatted by a user defined style', 'myOwnStyle');

// You can also putthe appended element to local object an call functions like this:
$myTextElement = $section->addText('Hello World!');

$section->addImage('img/default.jpg', array('width'=>210, 'height'=>210, 'align'=>'center'));



// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');

header('Content-Type: application/vnd.ms-word');
header('Content-Disposition: attachment;filename="Consulta.docx"');
header('Cache-Control: max-age=0');
  $objWriter->save("php://output");

?>