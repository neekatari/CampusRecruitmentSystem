<?php session_start();
include_once './phpmailer/PHPMailerAutoload.php';

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Student Registration</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/css/demo.css" rel="stylesheet" />
    </head>

    <body>


        <style>
            .switch {
                position: relative;
                display: inline-block;
                width: 100px;
                height: 44px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 36px;
                width: 36px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked+.slider {
                background-color: blueviolet;
            }

            input:focus+.slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked+.slider:before {
                -webkit-transform: translateX(54px);
                -ms-transform: translateX(54px);
                transform: translateX(54px);
            }
        </style>







        <div class="image-container set-full-height" style="background-image: url('images/4.jpg')">

            <div class="container">
                <div class="row col-md-12">
                    <div class="col-sm-10 col-sm-offset-1">
                        <!--      Wizard container        -->
                        <div class="wizard-container">
                            <div class="card wizard-card" data-color="purple" id="wizard" style="padding-bottom: 0px;">
                                <form action="#" method="post" enctype="multipart/form-data"  >
                                    <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            <img src="img/bmiit.png" height="70" width="70"/> STUDENT REGISTRATION FORM
                                        </h3>

                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>


                                            <li><a href="#location" data-toggle="tab">basic-info</a></li>

                                            <li><a href="#facilities" data-toggle="tab">Grades</a></li>

                                            <li><a href="#type" data-toggle="tab">Need Placement..?</a></li>
                                        </ul>
                                    </div>



                                    <div class="tab-content">
                                        <div class="tab-pane" id="location">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Let's start with the basic details</h4>
                                                </div>
                                                <div class="col-sm-4 col-sm-offset-1">
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="assets/img/default-avatar.png" class="picture-src"
                                                                 id="wizardPicturePreview" title="" />
                                                            <input type="file" name="file" id="wizard-picture">
                                                        </div>
                                                        <h6>Choose Picture</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-user"></i> First Name</label>
                                                        <input type="text" name="fname" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-user"></i> Last Name</label>
                                                        <input type="text" name="lname" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-id-card" aria-hidden="true"></i> Enrollment Number</label>
                                                        <input type="text" name="enno"  class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                        <input type="text" name="conno" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-envelope-open" area-hidden="true"></i> Email-id</label>
                                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-calendar" aria-hidden="true"></i> Academic year</label>
                                                        <input type="text" name="year" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                                                        <input type="password" name="password" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-lock" aria-hidden="true"></i> Confirm Password</label>
                                                        <input type="password" name="pwd" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="facilities">
                                            <h4 class="info-text">Tell us more about Grades. </h4>
                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 10th Percentage</label>
                                                        <input type="text" name="per10" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 12th Percentage</label>
                                                        <input type="text" name="per12" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 1st Semester SGPA</label>
                                                        <input type="text" name="sgpa1" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 2nd Semester SGPA</label>
                                                        <input type="text" name="sgpa2" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 3rd Semester SGPA</label>
                                                        <input type="text" name="sgpa3" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 4th Semester SGPA</label>
                                                        <input type="text" name="sgpa4" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 5th Semester SGPA</label>
                                                        <input type="text" name="sgpa5" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 6th Semester SGPA</label>
                                                        <input type="text" name="sgpa6" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 7th Semester SGPA</label>
                                                        <input type="text" name="sgpa7" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><i class="fa fa-percent"></i> 8th Semester SGPA</label>
                                                        <input type="text" name="sgpa8" class="form-control" id="exampleInputEmail1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="type">
                                            <center>
                                                <div class="row" style="font-size: 30px;">
                                                    <h4 class="info-text">Do you need placement..?</h4>

                                                    <label class="switch" style="margin-left: 50px;">
                                                        <span style="margin-left: -180px; font-size: 30px;">Yes</span>
                                                        <input type="checkbox" name="que" value="y" id="checkbox1">

                                                        <span class="slider round"></span>

                                                    </label>
                                                    <span style="color: #AAAAAA;margin-left: -10px;">No</span>
                                                </div>
                                            </center>
                                            <div class="row" id="ave">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">City Name</label>
                                                        <input type="text" name="city" class="form-control" placeholder=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="gayab">
                                                <h4 class="info-text"> Drop us a small description. </h4>
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">So what's Your plan..?</label>
                                                        <textarea name="details" class="form-control" placeholder="" rows="5"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-footer">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-primary btn-wd'
                                                   name='next' value='Next' />
                                            <input type='submit'  class='btn btn-finish btn-fill btn-primary btn-wd'
                                                   name='sub' value='Finish' />
                                        </div>
                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                                   name='previous' value='Previous' />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div style="background-color: #ccc; height: 70px; width: 100%; border-radius: 0px 0px 5px 5px;">
                                        <center>
                                            <div  style="margin-top: 10px;color: #9c27b0;font-size: 20px; padding-top: 20px;">
                                                <a href="index.php"  >Already Have An Account..?</a>
                                            </div>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- wizard container -->

                    </div>

                </div> <!-- row -->

            </div> <!--  big container -->

            <div class="footer">
                <div class="container text-center">

                </div>
            </div>
        </div>

    </body>
    <!--   Core JS Files   -->

    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //set initial state.
            $('#gayab').hide();
            $('#ave').show();
            $('input:checkbox#checkbox1').change(
                    function () {
                        if (this.checked) {
                            $('#gayab').show(500);
                            $('#ave').hide(500);
                        }
                        else {
                            $("#gayab").hide(500);
                            $('#ave').show(500);
                        }

                    });
        });
    </script>

</html>
//<?php
include './database.php';
if (isset($_POST['sub'])) {


    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['enno'] = $_POST['enno'];
    $_SESSION['conno'] = $_POST['conno'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['per10'] = $_POST['per10'];
    $_SESSION['per12'] = $_POST['per12'];
    $_SESSION['sgpa1'] = $_POST['sgpa1'];
    $_SESSION['sgpa2'] = $_POST['sgpa2'];
    $_SESSION['sgpa3'] = $_POST['sgpa3'];
    $_SESSION['sgpa4'] = $_POST['sgpa4'];
    $_SESSION['sgpa5'] = $_POST['sgpa5'];
    $_SESSION['sgpa6'] = $_POST['sgpa6'];
    $_SESSION['sgpa7'] = $_POST['sgpa7'];
    $_SESSION['sgpa8'] = $_POST['sgpa8'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['pwd'] = $_POST['pwd'];
    $password = $_POST['password'];
    $_SESSION['que'] = $_POST['que'];
    $pwd = $_POST['pwd'];
    echo $_POST['fname'];
    echo $_POST['email'];
    //$year=$_POST['year'];
    $status = "Active";
    $da = date('Y-m-d-h-i-s');
    if (isset($_POST['que'])) {
        $_SESSION['que'] = $_POST['que'];
        $_SESSION['details'] = $_POST['details'];
        //$encpass= md5($password);
    } else {
        $_SESSION['city'] = $_POST['city'];
    }


    //echo "$fname"."$lname"."$city"."$conno"."$enno"."$password"."$per10"."$per12"."$sgpa1"."$sgpa2"."$sgpa3"."$sgpa4"."$sgpa5"."$sgpa6"."$sgpa7"."$sgpa8"."$status";    


    $path = "./Profile/$_POST[fname]";

    $file_tmp = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    $target = "$path/" . basename($_FILES["file"]["name"]);
    $extension = array("jpeg", "jpg", "png");
    $error = array();
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        move_uploaded_file($file_tmp, $path . "/$name");
        if (!in_array($ext, $extension) === FALSE) {
            move_uploaded_file($file_tmp, $path . "/$name");
        } else {
            die("Allow only .jpg, .jpeg and .png Files are allowed");
        }
    }
    if (file_exists($path)) {
        if (!in_array($ext, $extension) === FALSE) {
            move_uploaded_file($file_tmp, $path . "/$name");
        } else {
            die("Allow only .jpg, .jpeg and .png Files are allowed");
        }
    } else {
        die("failed to create folders");
    }
    if ($password == $pwd) {
        // $sql="insert into tbl_student (fname,lname,contactno,per10,per12,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,password,city,Acadamic_year,profile_pic,created_at,updated_at,status)"
        //     . " values ('$fname','$lname','$conno','$per10','$per12','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$password','$city','$year','$target','$da','$da','$status') ";


        $_SESSION['path'] = $target;
        

        $mail = new PHPMailer();

        $mail->IsSMTP();                                      // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";  // specify main and backup server
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->Username = "Projectotp4323@gmail.com";  // SMTP username
        $mail->Password = "iamotp4323"; // SMTP password

        $mail->From = "Projectoyp4332@gmail.com";
        $mail->FromName = "PROJECT PHP";
//$mail->AddAddress("josh@example.net", "Josh Adams");
        $mail->AddAddress($_SESSION["email"]);                  // name is optional
        $mail->AddReplyTo("info@example.com", "Information");

        /* $mail->WordWrap = 50;                                 // set word wrap to 50 characters
          $mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
          $mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
          $mail->IsHTML(true); */                              // set email format to HTML

        $random = rand(1000, 9999);


        $mail->Subject = "OTP CODE";
        $mail->Body = "Your OTP is $random";
        $mail->AltBody = "Enter this code and get Registered..!";

        if (!$mail->Send()) {
            echo "Message could not be sent.";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }
        $_SESSION['random']=$random;
        echo "<script> window.location.href='confiirmation.php'; </script>";
    } else {
        die('please check your password');
    }
} 
    