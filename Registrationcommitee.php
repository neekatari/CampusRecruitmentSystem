<?php
session_start();
include 'master.php';
include_once './database.php';
include_once './phpmailer/PHPMailerAutoload.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="mycss/style.css">

    </head>
    <body>
        <style>
            .search:focus{
                outline: 0 !important;
                border: 2px solid #ff0066 !important;
                transition: 0.6s !important;
                transform-origin: left !important;
            }
            .fa:hover{
                color: #ff0066 !important;
            }
            .jumbotron{
                padding-top: 20px !important; 
            }
            .form-control{
                outline: none !important;
            }
            .input:focus{
                outline: 0 !important;
            }
            input{
                height:40px !important;
            }
            .btn{
                height:50px !important;
            }
            .btn,.b{
                background-color: #ff0066 !important;
                width: 100% !important;
                color:white !important;
            }
            .b:hover{
                background-color: transparent !important;
                color:black !important;
                border: 2px solid #ff0066 !important;


            }
        </style>
    <center>
        <form method="post">
            <div class="" style="margin-top:100px;">
                <div class="up">
                    <ul class="row">
                        <li class="col-md-2">
                            <a ><input type="submit" value="View Commitee-Member" name="vcm" /></a>
                        </li >
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="add Commitee-Member" name="acm" /></a>
                        </li>

                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Delete Commitee-Member" name="dcm" /></a>
                        </li>
                    </ul>

                </div>
            </div>
        </form> 

    </center>
    <?php
    if (isset($_POST['vcm'])) {

        echo "<div class='jumbotron'><center><br/><input type='text' class='search' placeholder=' Search Commitee-Member' name='search' style='border-radius:10px; border: 2px solid gray; width:500px; height:40px;'  />"
        . "<i class='fa fa-search' style='margin-left:-40px;'><input type='submit' name='btnsearch' value='' style='background-color:transparent; border:none;'/></i>"
        . "</center></div>";
    } else if (isset($_POST['acm'])) {
        ?>
        <div class="jumbotron container-fluid">
            <div class="text-center">
                <h3>Add new Committee Member</h3>
            </div>
            <form action="#" method="post">
                <div class="row justify-content-center" style="margin-top:30px;">
                    <div class="col-md-3">

                        <div class="form-group ">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" name="fname"id="email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="Lname">Last Name:</label>
                            <input type="text" class="form-control" name="lname"id="email">
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center" >
                    <div class="col-md-6">


                        <div class="form-group">
                            <label for="Contact No">Contact No:</label>
                            <input type="text" class="form-control" name="contact" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" name="mail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" disabled="" class="form-control" value="1234" name="password" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Conform Password:</label>
                            <input type="password" disabled="" class="form-control" value="1234" name="pwd"id="pwd">
                        </div>

                        <input type="submit" name="btnadd" class="btn b" value="Add"/>

                    </div>        
                </div>
            </form>
        </div>
    <?php }
    ?>

</body>
</html>
<?php
if (isset($_POST['btnadd'])) {




    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $conno = $_POST['contact'];
    $email = $_POST['mail'];
    // dyanamic Academic year 
    $curdate = date('Y');
    $a = $curdate - 5;
    $b = $a + 1;
    $b = substr($b, 2, 3);
    $ac = $a . "-" . "$b";
    $status = "Active";
    $da = date('Y-m-d-h-i-s');


    //Random password
    $strpass = md5(microtime());
    $strpass = substr($strpass, 0, 8);

    $encpas = md5($strpass);


    $insertmember = "INSERT INTO `tbl_committeemember`( `first_name`, `last_name`, `email`, `contactno`, `password`, `academic_year`, `isActive`, `created_at`, `modiified_at`) VALUES ('$fname','$lname','$email','$conno','$encpas','$ac','$status','$da','$da');";
    $exe = mysqli_query($con, $insertmember);
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }
    
    if ($exe) {
        echo $fname;

        $mail = new PHPMailer();

        $mail->IsSMTP();                                      // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";  // specify main and backup server
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->Username = "Projectotp4323@gmail.com";  // SMTP username
        $mail->Password = "iamotp4323"; // SMTP password

        $mail->From = "Projectoyp4332@gmail.com";
        $mail->FromName = "PROJECT PHP";
//$mail->AddAddress("josh@example.net", "Josh Adams");
        $mail->AddAddress($email);                  // name is optional
        $mail->AddReplyTo("info@example.com", "Information");

        /* $mail->WordWrap = 50;                                 // set word wrap to 50 characters
          $mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
          $mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
          $mail->IsHTML(true); */                              // set email format to HTML
//        $random = rand(1000, 9999);


        $mail->Subject = "OTP CODE";
        $mail->Body = "Congratulation You are selected as a Placement Comiitee member.<br>Your password is ".$strpass;
        $mail->AltBody = "Enter this code and get Registered..!";

        if (!$mail->Send()) {
            echo "Message could not be sent.";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }



        echo "<script type='text/javascript'>alert('member inserted');  </script>";
    }
}