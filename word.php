<?php 
// Include the PHPWord.php, all other classes were loaded by an autoloader
require_once 'PHPWord.php';


$date=date("d/m/Y");

// Create a new PHPWord Object
$PHPWord = new PHPWord();

//SECTION
$section = $PHPWord->createSection();
 
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