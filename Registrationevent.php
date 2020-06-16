<?php
include 'master.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>title</title>
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

            .b{
                border: none !important;
                height: 40px !important;
                background-color: #ff0066 !important;
                width: 100% !important;
                color:white !important;
            }
            .b:hover{
                background-color: transparent !important;
                border: 2px solid #ff0066 !important;
                color: black !important;
            }
        </style>
    <center>
        <form method="post">
            <div class="" style="margin-top:100px;">
                <div class="up">
                    <ul class="row">
                        <li class="col-md-2">
                            <a ><input type="submit" value="View Event" name="ve" /></a>
                        </li >
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="add Event" name="ae" /></a>
                        </li>
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Update Event" name="ue" /></a>
                        </li>
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Delete Event" name="de" /></a>
                        </li>
                    </ul>

                </div>
            </div>
        </form> 

    </center>
    <?php
    if (isset($_POST['ve'])) {

        echo "<div class='jumbotron'><center><br/><input type='text' class='search' placeholder=' Search Events' name='search' style='border-radius:10px; border: 2px solid gray; width:500px; height:40px;'  />"
        . "<i class='fa fa-search' style='margin-left:-40px;'><input type='submit' name='btnsearch' value='' style='background-color:transparent; border:none;'/></i>"
        . "</center></div>";
    } else if (isset($_POST['ae'])) {
        ?>
        <div class="jumbotron container-fluid">
            <div class="text-center">
                <h3>Add new Event</h3>
            </div>
            <form action="/action_page.php">
                <div class="row justify-content-center" style="margin-top:30px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Username">Event Name:</label>
                            <input type="text" class="form-control" name="event" id="email">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">


                    <div class="col-md-3 ">



                        <div class="form-group"  style="margin-top: 34px;">
                            <select class="form-control" name="place">
                                <option selected="" hidden="">Select Place</option>
                                <option>Manjula Hall</option>
                                <option>Pushpam Hall</option>
                                <option>JD Hall</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic:</label>
                            <input type="text" class="form-control"name="topic" id="email">
                        </div>
                        <div class="form-group">
                            <label for="fromdate">From Date:</label>
                            <input type="date" class="form-control" name="fromdate" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="fromtime">From Time:</label>
                            <input type="text" class="form-control" name="fromtime" id="pwd">
                        </div>



                    </div>
                    <div class="col-md-3 ">



                        <div class="form-group " >
                            <label for="spekar">Speaker:</label>
                            <input type="text" class="form-control" name ="speaker" id="email">
                        </div>
                        <div class="form-group">
                            <label for="acdamicyear">Academic Year:</label>
                            <input type="text" class="form-control" name="year" id="email">
                        </div>
                        <div class="form-group">
                            <label for="todate">To Date:</label>
                            <input type="date" class="form-control" name="todate" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="totime">To Time:</label>
                            <input type="text" class="form-control" name="totime" id="pwd">
                        </div>



                    </div> 

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="submit" name="btnadd" class="b" value="Add"/>
                    </div>
                </div>
            </form>
        </div>
        <?php
    } else if (isset($_POST['ue'])) {
        ?>
        <div class="jumbotron container-fluid">
            <div class="text-center">
                <h3>Update Event Details</h3>
            </div>
            <form action="/action_page.php">
                <div class="row justify-content-center" style="margin-top:30px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="uevent" >
                                <option selected="" hidden="" >Select Event</option>
                                <option>Event(2015)</option>
                                <option>Event(2016)</option>
                                <option>Event(2017)</option>
                                <option>Event(2018)</option>
                                    
                            </select>    
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">


                    <div class="col-md-3 ">



                        <div class="form-group"  style="margin-top: 34px;">
                            <select class="form-control" name="uplace">
                                <option selected="" hidden="" >Select Place</option>
                                <option>Manjula Hall</option>
                                <option>Pushpam Hall</option>
                                <option>JD Hall</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic:</label>
                            <input type="text" class="form-control" name="utopic" id="email">
                        </div>
                        <div class="form-group">
                            <label for="fromdate">From Date:</label>
                            <input type="date" class="form-control" name="ufromdate" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="fromtime">From Time:</label>
                            <input type="text" class="form-control" name="ufromtime" id="pwd">
                        </div>



                    </div>
                    <div class="col-md-3 ">



                        <div class="form-group " >
                            <label for="speaker">Speaker:</label>
                            <input type="text" class="form-control" name="uspeaker" id="email">
                        </div>
                        <div class="form-group">
                            <label for="acadamicyear">Academic Year:</label>
                            <input type="text" class="form-control" name="uyear" id="email">
                        </div>
                        <div class="form-group">
                            <label for="todate">To Date:</label>
                            <input type="date" class="form-control" name="utodate" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="totime">To Time:</label>
                            <input type="text" class="form-control" name="utotime" id="pwd">
                        </div>



                    </div> 

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="submit" name="btnupdate" class="b" value="Update"/>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }
    ?>
</body>
</html>