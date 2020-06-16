<?php
require 'PHPMailerAutoload.php';
echo !extension_loaded('openssl')?"Not Available":"Available <br/>";
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';       //  ssl://smtp.gmail.com          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'someone@example.com';                      // SMTP username
$mail->Password = 'password';                           // SMTP password
$mail->SMTPSecure = 'ssl';  //TLS                      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;          //587                          // TCP port to connect to


//echo $email= $_POST['n2']."@".$_POST['n3'];
$mail->setFrom('someone@example.com', 'user name');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('someone@example.com');               // Name is optional
//$mail->addReplyTo('$email','roshan');
//$mail->addCC('passmethecode@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Booking request to PERIYAR NEST';
$mail->Body    = 
   
    '<div align="center"><div align="center" style="
    display:inline-block;
    background-color:#d48331;
    height:auto;
    width:auto;
    ">
       <div style="
       background-color:rgba(198, 52, 52, 0.95);
       display:inline-block;
       width:100%;
       height:100px;
       text-align:center;
       color:#fff;
       align-content:center;
       "><h1 style="
       margin-top:40px;
       ">Booking Details</h1>
       </div>
       <table style="background-color:rgb(255, 249, 249); color: #4a4646; margin:0px; padding:20px;">
       <tr>
       <td>Name :</td><td><h3>'.$_POST['name'].
       '</h3></td></tr><tr><td>Email :</td><td><h3 text-decoration="none">'.$_POST['email'].
       '</h3></td></tr><tr><td>Phone :</td><td><h3>'.$_POST['phone'].
       '</h3></td></tr><tr><td>Number of rooms :</td><td><h3>'.$_POST['rooms'].
       '</h3></td></tr><tr><td>Number of Adults :</td><td><h3>'.$_POST['adults'].
       
    '</h3></td></tr>
    </table>
    <div text-align="center" style="
    background-color:rgb(109, 160, 212);
    padding:5px;
    height:auto;
    overflow:hidden;
    ">
    <h4 style="color:#fff;">Powered by, <a href="https://www.youtube.com/channel/UC6Gq39yPfXn_2bhAvwL_GLQ" style="color:#ffc78e;">WIRED PROTOCOL</a></h4></div>
    </div></div>';
//file_get_contents('template-guest.php');
$mail->AltBody = 'Hello';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
header('location: thankyou.php');
}
?>
