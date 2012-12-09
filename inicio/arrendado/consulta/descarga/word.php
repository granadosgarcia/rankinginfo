<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/word/PHPWord.php";
header('Content-Type: application/vnd.ms-word');
header('Content-Disposition: attachment;filename="Consulta.docx"');
header('Cache-Control: max-age=0');

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

// New Word Document
$PHPWord = new PHPWord();

// New portrait section
$section = $PHPWord->createSection();
$table = $section->addTable();


 while($row=mysql_fetch_array($resultado[$k], MYSQL_BOTH)) { 
 
 	 	$table->addRow(800);
 	 	$table->addCell(300)->addText("Nombre:");
 	 	$table->addCell(500)->addText($row['nombre'].$row["apellido_paterno"].$row["apellido_materno"]);
 	 	$table->addRow(800);
 	 	$table->addCell(300)->addText("Curp:");
 	 	$table->addCell(500)->addText($row['curp']);
 	 	
 	 	
 	 	if (!empty($row["domicilio_actual"])) 
 	 	{
	 	 	$table->addRow(800);
	 	 	$table->addCell(300)->addText("Domicilio Actual:");
	 	 	$table->addCell(500)->addText($row['domicilio_actual']);
 	 	}
 	 	 	 	




}







// Add hyperlink elements
$section->addTextBreak(2);





// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');


$objWriter->save("php://output");
?>