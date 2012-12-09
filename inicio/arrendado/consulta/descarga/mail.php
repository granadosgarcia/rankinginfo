
<?php 
include('Mail.php'); 
include('Mail/mime.php'); 
$text = 'Text version of email'; 
$html = '<html><body>HTML version of <b>email</b><img src="http://25.media.tumblr.com/tumblr_mdug4aAfUc1qg33rgo1_500.jpg"/><br/>'; 
$html .='<font face="verdana" size="1">This can be used to <u>spice up</u> emails with extra goodies!</font></body></html>'; 
$file = 'http://i.qkme.me/3r4p9l.jpg'; 
$crlf = "\r\n"; 
$hdrs = array( 
        'From' => 'tuculo@email.org', 
        'Subject' => 'Testeamesta' 
        ); 
$mime = new Mail_mime($crlf); 
$mime->addHTMLImage('http://25.media.tumblr.com/tumblr_mdug4aAfUc1qg33rgo1_500.jpg', 'image/jpg'); 
$mime->setTXTBody($text); 
$mime->setHTMLBody($html); 
$mime->addAttachment($file, 'image/jpg'); 
$body = $mime->get(); 
$hdrs = $mime->headers($hdrs); 
$mail =& Mail::factory('mail'); 
$mail->send('crazymarines2@gmail.com', $hdrs, $body); 


?>
