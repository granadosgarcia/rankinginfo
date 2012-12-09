<?php
require_once '../PHPWord.php';

// New Word Document
$PHPWord = new PHPWord();

// New portrait section
$section = $PHPWord->createSection();

// Add image elements
$section->addImage('_mars.jpg');
$section->addTextBreak(2);

$section->addImage('_earth.JPG', array('width'=>210, 'height'=>210, 'align'=>'center'));
$section->addTextBreak(2);

$section->addImage('_mars.jpg', array('width'=>100, 'height'=>100, 'align'=>'right'));



// Save File
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('Image.docx');



?>


<!--
// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');

header('Content-Type: application/vnd.ms-word');
header('Content-Disposition: attachment;filename="Consulta.docx"');
header('Cache-Control: max-age=0');
$objWriter->save("php://output");
-->