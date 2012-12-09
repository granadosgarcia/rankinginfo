
<?php 
       include('Mail.php');
        include('Mail/mime.php');

        // Constructing the email
        $sender = " Ranking info";                              // Your name and email address
        $recipient = "crazymarines2@gmail.com";                           // The Recipients name and email address
        $subject = "Consulta Ranking Information";                                            // Subject for the email
        $text = 'This is a text message.';   
        $message->addHTMLImage("button.png");
                               
        $html = '<html><body><p><IMG SRC="button.png" /></p></body></html>';  // HTML version of the email
        $crlf = "\n";
        $headers = array(
                        'From'          => $sender,
                        'Return-Path'   => $sender,
                        'Subject'       => $subject
                        );

        // Creating the Mime message
        $mime = new Mail_mime($crlf);

        // Setting the body of the email
        $mime->setTXTBody($text);
        $mime->setHTMLBody($html);

        $body = $mime->get();
        $headers = $mime->headers($headers);

        // Sending the email
        $mail =& Mail::factory('mail');
        $mail->send($recipient, $headers, $body);
?>
