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
   $sql1[$j]="SELECT * from arr_calif as a, calificacion as c WHERE a.curp = '".$curp[$j]."' GROUP BY c.clave";
   
   $resultado1[$j]=mysql_query($sql1[$j], $con); 
   $j++;
}

//WORD
$PHPWord = new PHPWord();

$section = $PHPWord->createSection();
$table = $section->addTable();


$PHPWord->addFontStyle('StyleR', array('bold'=>true, 'italic'=>true, 'size'=>12));
$PHPWord->addFontStyle('StyleC', array('bold'=>false, 'italic'=>false, 'size'=>13));


 while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { 


 	 	$table->addRow();
 	 	$table->addCell(3000)->addText("Nombre:",'StyleR');
 	 	$table->addCell(9000)->addText($row['nombre'].$row["apellido_paterno"].$row["apellido_materno"],'StyleC');
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
 	 
 	 
 	  		$k++;
 	}







// Add hyperlink elements
$section->addTextBreak(2);





// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');


$objWriter->save("php://output");
?>