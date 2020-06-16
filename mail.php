<?php
include_once './phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "Projectotp4323@gmail.com";  // SMTP username
$mail->Password = "iamotp4323"; // SMTP password

$mail->From = "Projectoyp4332@gmail.com";
$mail->FromName = "PROJECT PHP";
//$mail->AddAddress("josh@example.net", "Josh Adams");
$mail->AddAddress("16mscit027@gmail.com");                  // name is optional
$mail->AddReplyTo("info@example.com", "Information");

/*$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);    */                              // set email format to HTML

$random=  rand(1000, 9999);


$mail->Subject = "OTP CODE";
$mail->Body    = "Your OTP is $random";
$mail->AltBody = "Enter this code and get Registered..!";

if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

