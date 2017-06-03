<?php
require_once('PHPMailer/PHPMailerAutoload.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents("TestTemp.php");
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.erizq.com"; // SMTP server

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
$mail->Debugoutput = 'html';

                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "mail.erizq.com";      // sets GMAIL as the SMTP server
$mail->Port       = 25;                   // set the SMTP port for the GMAIL server
$mail->Username   = "info@erizq.com";  // GMAIL username
$mail->Password   = "5410103";            // GMAIL password

$mail->SetFrom('info@erizq.com', 'Adeel Info');

$mail->AddReplyTo("info@erizq.com","Adeel Info");

$mail->Subject    = "Adeel";

$mail->AltBody    = "Adeel"; // optional, comment out and test

$mail->MsgHTML($body);

//$address = "adeel.abbasi@live.com";
$address = "adeel696@gmail.com";
//$address = "info@aahaadtravels.com";
$mail->AddAddress($address, "Adeel Abbasi");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    
?> 