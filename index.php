<?php 
    session_start();
    include 'database.php';
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>
        <style>
            body{
                background: url(images/4.jpg) no-repeat 0px 0px;
                background-size: cover;
                
            }
            .btn:hover{
                border: 1px solid #ff0066 !important;
                background-color: transparent !important;
                color: #ff0066 !important;
            }
            input{
                border: 2px solid lightgray;
                background-color: transparent !important;
                font-size: 18px;
                border-radius: 10px;
                
                
            }
            .form-group{
                position: relative;
                display: block;
                margin:20px 0;
            }
            
            .form-group label{
                position: absolute;
                left:0px;
                top:10px;
                transition: all ease 0.2s;
                -webkit-transition: all ease 0.2s;
                -moz-transition: all ease 0.2s;
                font-size: 18px;
                background-color: #e9ecef;
                
            }
            input:focus ~ label,
            input:valid ~ label{
                top:-12px;
                font-size: 14px;
                margin-left: 20px;
                color: #ff0066;
            }
            input:focus,
            input:valid{
                outline:none !important;
                border: 2px solid #ff0066 !important;
                border-radius: 10px; 
            }
            input{
                width: 100%;
                height:50px;
                margin-bottom: 20px;
                transition: 0.2s;
            }
            
            
            
            
         
            
        </style>
        
        <div class="container" style="margin-top:100px;">
            <div class="jumbotron row justify-content-center text-center">
                <div class="col-md-12">
                    <img src="img/bmm.jpg" height="300" width="450" class="mx-auto d-block" style="margin-top: -40px;" />
                </div>
              
                
                <div class="col-md-5">
                    <form action="#" method="post">
                    <div class="form-group">
                        
                        <input type="email"  name="email" required="" >
                        <label for="exampleInputEmail1">&nbsp;&nbsp;Email address &nbsp;</label>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="password"  name="pass" required="" >
                        
                        <label for="exampleInputPassword1">&nbsp;&nbsp;Password &nbsp;</label>
                    </div>
                        <input type="submit" value="Login" name="sub" class="btn" style="background-color: #ff0066 !important; color: white; width: 100%;"/>
                    <a href="registration.php" >Don't have an account..?</a><br/>
                    <a href="#" >Forgot Password..?</a>
                </form>
                </div>
            </div>

        </div>
        <script type="text/javascript">
        </script>
        <?php
           
            if(isset($_POST['sub'])){
                 $uname=$_POST['email'];
            $pass=$_POST['pass'];
            
                    $encrypt=md5($pass);
                    $confirmcomittee = "select * from tbl_committeemember where email ='$uname' and password='$encrypt' ";
                    $confirmstudent = "select * from tbl_student where email ='$uname' and password='$encrypt' ";
                    $execute1 = mysqli_query($con, $confirmcomittee);
                    $execute2 = mysqli_query($con, $confirmstudent);
                    $countcomittee= mysqli_num_rows($execute1);
                    $countstudent=  mysqli_num_rows($execute2);
                    
                    
                        if($countcomittee == "1")
                        {
                            $_SESSION['uname']=$uname;
                            echo $uname;
                             echo "<script type='text/javascript'> window.location.href='home.php' </script>";
                        }
                        if($countstudent == "1")
                        {
                            $_SESSION['uname']=$uname;
                            echo "<script type='text/javascript'> window.location.href='studenthome.php' </script>";
                        }
                        else{
                            echo "<script type='text/javascript'> alert('Invalid Details..!\n Please try Again..!') </script>";
                            
                        }
                        if($uname == "Admin@jaba.com" && $pass == "jaba"){
                   $_SESSION['uname']=$uname;
                    //header_remove('Location: home.php');
                 echo "<script type='text/javascript'> window.location.href='home.php' </script>";
              }
            
//                if($uname == "Admin@jaba.com" && $pass == "jaba"){
//                    $_SESSION['uname']=$uname;
//                    //header_remove('Location: home.php');
//                    echo "<script type='text/javascript'> window.location.href='home.php' </script>";
//                }
//                else if($uname == "user@user.com" && $pass == "baje")
//                {
//                    $_SESSION['uname']=$uname;
//                    //header_remove('Location: home.php');
//                    echo "<script type='text/javascript'> window.location.href='studenthome.php' </script>";
//                }
//                else{
//                    echo "<script type='text/javascript'> alert('Invalid Details..!\n Please try Again..!') </script>";
//                }
                
            }
        ?>
    </body>
</html>
