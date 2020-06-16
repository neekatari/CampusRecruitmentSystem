<?php
include './studentmaster.php';
include_once './database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>title</title>
        <link href="my.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <style>
            .jumbotron{
                padding: 20px 20px !important;
            }
            .col-md-4{
                padding-top: 20px !important;
            }
            .btn-primary{
                background-color: #ffc107 !important;
                border: none !important;
                color: black !important;
            }
            .btn-primary:hover{
                background-color: #ff0066 !important;
                color:white !important;
            }
            
           
            
            

        </style>

        
        
        
        <div class="container-fluid" style="margin-top:100px;">

            
            
            
            <div class="row justify-content-center" style="margin-top: 30px;">
                <form method="post">
                    <div class="btn-group justify-content-center">

                        <input name="all" type="submit" value="ALL" class="btn btn-warning" style="background-color: #e0a800 !important;"/>
                        <input name="android" type="submit" value="ANDROID" class="btn btn-warning"/>
                        <input name="php" type="submit" value="PHP" class="btn btn-warning"/>
                        <input name="asp" type="submit" value="ASP.NET" class="btn btn-warning"/>
                        <input name="ios" type="submit" value="IOS" class="btn btn-warning"/>
                        <input name="react" type="submit" value="REACT" class="btn btn-warning"/>

                    </div>
                </form>    
            </div>
            <?php
            if (isset($_POST['all'])){
                ?>
                <div class="row jumbotron" style="margin-top: 10px;">
<!--                    <div class="col-md-4 justify-content-center">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/amazon.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/infosys.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/google.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/microsoft_PNG20.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/vision.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/Reliance-Industries-Logo1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/nasa.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/whatsapp.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>-->

                   <?php 
                   $now=date('Y-m-d h-i-s');
                    $query="select * from tbl_company_notification where company_date > '$now'";
                    $result=mysqli_query($con, $query);
                    while ($row=  mysqli_fetch_assoc($result)){
                   
                   ?>


                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img src="<?php $qq="select * from tbl_company where cid='$row[cid]';";
                                            
                                                $res=mysqli_query($con, $qq);
                                                $img_row=  mysqli_fetch_assoc($res);
                                                echo $img_row['img'];
                                                ?>"/>
                                            <h4 class="card-title" ><?php echo $img_row['company']; ?></h4>
                                            <p class="card-text"> <b>Technology:</b> <?php $gettech="select technology from tbl_technology where tid = '$row[tid]';"; $exetech = mysqli_query($con, $gettech); $tech = mysqli_fetch_assoc($exetech); echo $tech['technology'];    ?>  </p>
                                            
                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;margin-bottom: -30px;">
                                    <div class="card">
                                        <div class="card-body text-center mt-4 table-responsive">
                                            <h4 class="card-title" style="margin-top:-30px;"></h4>
                                            <table class="table table-sm text-left" style="font-size: 14px;">
                                                <tr>
                                                    <th>No of Student :</th><td><?php echo $row['no_of_student'];   ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Stipend :</th><td><?php echo $row['stipend'];  ?></td>
                                                </tr>
                                                <tr>
                                                    <th> CTC:</th><td><?php echo $row['ctc'];  ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Recruitment Date:</th><td><?php echo $row['company_date']  ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Address :</th><td><?php echo $img_row['address']; ?></td>
                                                </tr>
                                                 <tr>
                                                    <th>Contact No :</th><td><?php echo $img_row['contactno']; ?></td>
                                                </tr>
                                                 <tr>
                                                    <th>E-mail :</th><td><?php echo $img_row['mail']; ?></td>
                                                </tr>
                                            </table>
                                            <input type="submit" class="btn btn-warning" name="apply" value="Apply" style="width: 100%;"/>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
                <?php
            }
            if (isset($_POST['android'])) {
                ?>

                <div class="row jumbotron" style="margin-top: 30px;">
                    <div class="col-md-4 justify-content-center">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/google.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/whatsapp.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                </div>




                <?php
            } else if (isset($_POST['php'])) {
                ?>


                <div class="row jumbotron" style="margin-top: 30px;">
                    <div class="col-md-4 justify-content-center">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/facebook.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/infosys.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
            } else if (isset($_POST['asp'])) {
                ?>

                <div class="row jumbotron" style="margin-top: 30px;">
                    <div class="col-md-4 justify-content-center">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/microsoft_PNG20.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-bottom" src="cmpimg/vision.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#test-modal" >Apply</a>
                            </div>
                        </div>
                    </div>
                </div>



                <?php
            }
            ?>





            <!-- ---------------------modal start-----------------------------  -->

            <div class="modal fade bd-example-modal-lg " id="test-modal" data-modal-index="1">
                <div class="modal-dialog modal-lg text-center">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title">Apply For Company</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        </div>
                        <div class="modal-body">

                            <div class="form">
                                <form class="login-form" method="POST">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="txttechnology" placeholder="Company Name" required="required"/>
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="txtyear" placeholder="Enrollment No" required="required"/>
                                    </div>
                                    <input type="submit" name="btn" class="btn btn-warning" value="Apply" style="width: 100%;"/>

                                </form>
                            </div>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->




        </div>

        
    </body>
</html>
