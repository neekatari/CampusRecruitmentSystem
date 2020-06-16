<?php
    include './committeemaster.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<style>
    .jumbotron{
        padding: 20px 20px;
    }
    .toast{
        background-color: #444 !important;
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

<div class="container" style="margin-top: 100px;">
    <h2>Evalution</h2>
    
    <div class="row justify-content-center" style="margin-top: 30px;">
                <form method="post">
                    <div class="btn-group justify-content-center">

                        <input name="cmp" type="submit" value="Company" class="btn btn-warning" style="background-color: #e0a800 !important;"/>
                        <input name="evnt" type="submit" value="Events" class="btn btn-warning"/>

                    </div>
                </form>    
    </div>
    <div class=" jumbotron">
        <?php if(isset($_POST['cmp'])){
        ?>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Round 1</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Round 2</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Round 3</a>
            </div>
        </nav>


        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="" style="margin-top: 30px;">
                    <div id="accordion">
                        <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    Company Name
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;" border="1">
                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>


                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>
                                        
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Generate attendancesheet" name="" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                            <div class="card-header" id="headingtwo">
                                <h5 class="mb-0">
                                    Company Name
                                </h5>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;" border="1" >
                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>


                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>
                                        
                                        
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Generate attendancesheet" name="" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="" style="margin-top: 30px;">
                    <div id="accordion">
                        <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    Company Name
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;" border="1" >
                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>


                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>
                                        
                                        
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Generate attendancesheet" name="" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
        <?php
        }else if(isset ($_POST['evnt'])){
        ?>
        
        <div id="accordion">
                        <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn" >
                                        Event Event (something #1)
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;" border="1" >
                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>


                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>
                                        
                                        
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Generate attendancesheet" name="" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn" >
                                        Event Event (something #2)
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;" border="1" >
                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>


                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>
                                        
                                        
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Generate attendancesheet" name="" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn" >
                                        Event Event (something #3)
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;" border="1" >
                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>


                                        <tr>
                                            <th>Enrollment No</th><th>Student name</th>
                                            
                                        </tr>
                                        
                                        
                                    </table>
                                    <hr/>
                                    <input type="submit" value="Generate attendancesheet" name="" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            
            
        
            
            
        <?php 
        }
        ?>
    </div>
</div>