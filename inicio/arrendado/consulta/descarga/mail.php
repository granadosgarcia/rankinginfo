
<?php 

$_SESSION['consultasdescarga']=$curps;

include('Mail.php'); 
include('Mail/mime.php'); 
$text = 'Consulta de Ranking Information'; 
$html = '<html><body>HTML version of <b>email</b><img src="/madcat.jpeg"/><br/>'; 
$html .='<font face="verdana" size="1">This can be used to <u>spice up</u> emails with extra goodies!</font></body></html>'; 
$file = '/madcat.jpeg'; 

$crlf = "\r\n"; 
$hdrs = array( 
        'From' => 'Ranking Information', 
        'Subject' => 'Consulta' 
        ); 
$mime = new Mail_mime($crlf); 
$mime->addHTMLImage('./madcat.jpeg', 'image/jpg'); 
$mime->setTXTBody($text); 
$mime->setHTMLBody($html); 
$mime->addAttachment($file, 'image/jpg'); 
$body = $mime->get(); 
$hdrs = $mime->headers($hdrs); 
$mail =& Mail::factory('mail'); 
$mail->send('crazymarines2@gmail.com', $hdrs, $body); 


?>
