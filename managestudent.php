<?php
include './committeemaster.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title> </title>
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
                            <a ><input type="submit" value="View Students" name="vs" /></a>
                        </li >
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Update Student" name="us" /></a>
                        </li>
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Delete Student" name="ds" /></a>
                        </li>
                    </ul>

                </div>
            </div>
        </form> 

    </center>
    <?php
    if (isset($_POST['vs'])) {

        echo "<div class='jumbotron'><center><br/><input type='text' class='search' placeholder=' Search Commitee-Member' name='search' style='border-radius:10px; border: 2px solid gray; width:500px; height:40px;'  />"
        . "<i class='fa fa-search' style='margin-left:-40px;'><input type='submit' name='btnsearch' value='' style='background-color:transparent; border:none;'/></i>"
        . "</center></div>";
    } 
        
    if(isset ($_POST['us'])){
    ?>
        <div class="jumbotron container-fluid">
            <div class="text-center">
                    <h3>Update Committee Member</h3>
            </div>
            <div class="row justify-content-center" style="margin-top:30px;">
                
                <div class="col-md-6 ">
                    
                <form action="/action_page.php">
                    <div class="form-group">
                        <select class="form-control" name="umail">
                            <option selected="" hidden="">Select Email id to Update</option>
                            <option>email1@gmail.com</option>
                            <option>email2@gmail.com</option>
                            <option>email3@gmail.com</option>
                            <option>email4@gmail.com</option>
                            <option>email5@gmail.com</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Username">Username:</label>
                        <input type="text" class="form-control" name="uuname" id="email">
                    </div>
                    <div class="form-group">
                        <label for="Contact No">Contact No:</label>
                        <input type="text" class="form-control" name="ucontact" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="umail" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="" id="pwd">
                    </div>
                     <div class="form-group">
                        <label for="pwd">Conform Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    
                    <input type="submit" name="btnadd" class="btn b" value="Add"/>
                </form>
                </div>        
            </div>
        </div>
    <?php 
    }
    ?>
    </body>
</html>
