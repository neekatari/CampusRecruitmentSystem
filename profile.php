<?php 
    include_once './master.php';
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
    </head>
    <body>
        <style>
            body{
                background-image: url('img/bg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
               
            }
            .jumbotron{
                border-radius: 20px 20px 0px 0px !important;
                background: rgba(0,0,0,.6);
                margin-top: 200px;
                padding: 20px;
                
            }
            th,td{
                color: white;
                padding: 10px 10px;
            }
            .img{
                transition: 0.3s !important;
            }
            .img{
                margin-bottom: -90px !important;
            }
            .img:hover{
                margin-top: -10px;
                border: none !important;
                padding: 22px 22px;
                border-bottom: 3px solid #ff0066 !important;
                transform: scale(1.03);
                border-radius: 10px;
            }
            
            
        </style>
    <center>
        <div class="container">
            
            <div class="jumbotron">
                <div class="row ">
                    <div class="col-md-3 justify-content-center">
                        <img src="img/woman.jpg" class="img" style="border: 2px solid #ff0066;padding: 10px 10px;"/>
                    </div>
                    <div class="col-md-8 " >
                        <table class="text-left"  style="width: 80%; font-family: sans-serif; font-size: 22px; margin: 40px 40px !important;">
                            <tr>
                                <th>
                                    Enrollment No
                                </th>
                                <td>
                                    : 201606100110027
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    : Jesica Bantai
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    E-mail
                                </th>
                                <td>
                                    : JesicaBantai@gmail.com
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Phone No
                                </th>
                                <td>
                                    : +917574975789
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Academic Year
                                </th>
                                <td>
                                    : 2016-17
                                </td>
                            </tr>
                            
                           
                        </table>
                    </div>
                </div>
                
            </div>
      
            <div class="container" style="background-color: white;padding-top: 100px;margin-top: -40px;">
                <div class="row">
                    <div class="col-md-12" style="margin-top: -90px;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link home-tab active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link profile-tab " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Grades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link contact-tab " id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div style="padding: 100px;">
                                    <h3>About me</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                
                               

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div style="padding: 100px;">
                                    <h3>Grades</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>

                                
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        </div>
                        <div class="justify-content-center" style="padding-bottom: 50px;">
                        
                        <input type="submit" class="btn btn-danger" value="Modify" />
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </center>
    </body>
</html>
