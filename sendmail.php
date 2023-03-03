<?php
//require 'PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try
{
require 'C:\Users\Kristijan\Downloads\PHPMailer\src\Exception.php';
require 'C:\Users\Kristijan\Downloads\PHPMailer\src\PHPMailer.php';
require 'C:\Users\Kristijan\Downloads\PHPMailer\src\SMTP.php';

//$email = new PHPMailer(TRUE);

$mail = new PHPMailer();
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testtest787@outlook.com';                 // SMTP username
$mail->Password = 'Testmail787';                           // SMTP password
$mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'testtest787@outlook.com';
$mail->FromName = 'Test';
$mail->addAddress('testtest787@outlook.com', 'Test Test');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
catch (Exception $ex)
{
	echo $ex;
}
?>