<?php
$email = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$subject = $_REQUEST['subject'] ;
$content = $_REQUEST['content'] ;

require("../PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "example.example.com";
$mail->Port = 465;
$mail->Username = "example@example.com";
$mail->Password = "password";
$mail->SetFrom('example@example.com','Zapytanie - formularz kontaktowy');
$mail->SMTPDebug = 2;
$mail->From = 'example@example.com';
$mail->AddAddress('another@example.com', "Zapytanie - formularz kontaktowy");
$mail->Subject = $subject;

$mail->Body    = 'Od: '.$name.' e-mail: '.$email.' Tresc wiadomosci: '.$content;
$mail->AltBody = 'Od: '.$name.' e-mail: '.$email.' Tresc wiadomosci: '.$content;
$mail->IsHTML(true);
if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo "Message has been sent";
?>
<meta http-equiv="Refresh" content="0; URL=http://example.com">
