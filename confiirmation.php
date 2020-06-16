<?php session_start();
echo $_SESSION['fname'];echo $_SESSION['email'];
echo $_SESSION["email"];

include './database.php';







?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Material Bootstrap Wizard by Creative Tim</title>

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











        <div class="image-container set-full-height" style="background-image: url('images/4.jpg')">

            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <!--      Wizard container        -->
                        <div class="wizard-container">
                            <div class="card wizard-card" data-color="purple" id="wizard">
                                <form action="#" method="post">
                                    <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

                                    <div class="wizard-header">
                                        <img src="img/bmiit.png" height="70" width="70"/>
                                        <h3 class="wizard-title">
                                            Campus Recruitment System | BMIIT
                                        </h3>

                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#location" data-toggle="tab">Confirmation With OTP</a></li>

                                            
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane" id="location">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Enter Your Verification Code</h4>
                                                </div>
                                                    
                                                <div class="col-sm-4 col-sm-offset-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">otp</label>
                                                        
                                                        <input type="number" name="code" class="form-control" required="" id="exampleInputEmail1"/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        
                                    <div class="wizard-footer">
                                        <center>
                                        <div class="">
                                            
                                            <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd'
                                                   name='very' value='Finish' />
                                        </div>
                                        </center>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- wizard container -->
                    </div>
                </div> <!-- row -->
            </div> <!--  big container -->

            <div class="footer">
                
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
    

</html>
<?php 












if(isset($_POST['very'])){
  
  if($_SESSION['random']==$_POST['code']){

     $fname=   $_SESSION['fname'];
     $lname=   $_SESSION['lname'];
     $enno=   $_SESSION['enno'];
        $conno=$_SESSION['conno'];
      $email=  $_SESSION['email'];
      $per10=  $_SESSION['per10'];
      $per12=  $_SESSION['per12'];
      $sgpa1 = $_SESSION['sgpa1'];
      $sgpa2=  $_SESSION['sgpa2'];
      $sgpa3=  $_SESSION['sgpa3'];
      $sgpa4=  $_SESSION['sgpa4'];
      $sgpa5 = $_SESSION['sgpa5'];
      $sgpa6 = $_SESSION['sgpa6'];
      $sgpa7=  $_SESSION['sgpa7'];
      $sgpa8=  $_SESSION['sgpa8'];
      $password =  $_SESSION['password'];
      $pwd= $_SESSION['pwd'];
      $target=$_SESSION['path'];
       echo "$fname $email";
      $curdate=date('Y');
      $a=$curdate - 5;
      $b=$a+1;
      $b=  substr($b,2,3);
      $ac=$a."-"."$b";
      echo "$ac";
      $que= $_SESSION['que'];
     $encpas=md5($password);
      if(isset( $_SESSION['que']))
      {
          $que= $_SESSION['que'];
        $details=$_SESSION['details'];
      }
      else{
          $city=$_SESSION['city'];
      }      

      
        //$year=$_POST['year'];
        $status="Active";
        $da=date('Y-m-d-h-i-s');
        

        
        if($password == $pwd)
      {
          //$sql="insert into tbl_student (enno,fname,lname,contactno,email,per10,per12,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,password,city,Acadamic_year,profile_pic,Question,details,created_at,updated_at,status)"
               // . " values ('$enno','$fname','$lname','$conno','$email','$per10','$per12','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$encpas','$city','$ac','$target','$que','$details','$da','$da','$status'); ";
      
          if(isset($_SESSION['que'])){
          $sql1="INSERT INTO `tbl_student`(`enno`, `fname`, `lname`, `contactno`, `email`, `per10`, `per12`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `password`, `city`, `Acadamic_year`, `profile_pic`, `Question`, `details`, `created_at`, `updated_at`, `status`) VALUES "
                  . "('$enno','$fname','$lname','$conno','$email','$per10','$per12','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$encpas','','$ac','$target','$que','$details','$da','$da','$status');";
          }
          else{
              $sql1="INSERT INTO `tbl_student`(`enno`, `fname`, `lname`, `contactno`, `email`, `per10`, `per12`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `password`, `city`, `Acadamic_year`, `profile_pic`, `Question`, `details`, `created_at`, `updated_at`, `status`) VALUES "
                  . "('$enno','$fname','$lname','$conno','$email','$per10','$per12','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$encpas','$city','$ac','$target','$que','','$da','$da','$status');";
          
          }
          $exe=  mysqli_query($con, $sql1);
          if($exe)
          {
              echo "<script>window.location.href='studenthome.php';</script>";
          }
         else{
          echo mysqli_error($con);
          }
      }
      else{
         
      }
      
}
else{
    echo "set hi nahi hua bhai email check kar";
}
}else{
    echo "last set hi nahi hua bhai email check kar";
   
}
        
?>