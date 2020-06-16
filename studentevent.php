<?php
include './studentmaster.php';
include './database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <style>
            .jumbotron{
                padding: 20px 20px !important;
            }
        </style>
        
        
        
        
        <div class="container" style="margin-top:100px;">
            <div class="row jumbotron justify-content-center" style="margin-top: 30px;" >
                
                <h3>Event List</h3>
                
                <div class="col-md-12">
                    <div id="accordion">
                        <?php   
                            $now=  date('Y-m-d h:i:s');
                            //echo $now;
                            $query="select * from tbl_event where from_date < '$now' and isActive = '1' ";
                            $result =  mysqli_query($con, $query);
                            while ($row =  mysqli_fetch_assoc($result)){
                        ?>
                            
                        <div class="card" data-toggle="collapse" data-target="#collapse<?php echo $row['eid'];?>" aria-expanded="true" aria-controls="collapse<?php echo $row['eid'];?>">
                            <div class="card-header" id="heading<?php echo $row['eid'];?>">
                                <h5 class="mb-0">
                                    <button class="btn text-left" style="width:100%;" data-toggle="collapse" data-target="#collapse<?php echo $row['eid'];?>" aria-expanded="true" aria-controls="collapse<?php echo $row['eid'];?>"  >
                                        <?php echo "$row[name] &nbsp( $row[topic])"; ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse<?php echo $row['eid'];?>" class="collapse" aria-labelledby="heading<?php echo $row['eid'];?>" data-parent="#accordion">
                                <div class="card-body">
                                    <center>
                                        <table style="width: 100%;">
                                        <tr>
                                            <th>Event Name </th><td>:</td>
                                            <td><?php echo $row['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Place </th><td>:</td>
                                            <td><?php echo $row['place']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Speaker </th><td>:</td>
                                            <td><?php echo $row['speaker']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Topic </th><td>:</td>
                                            <td><?php echo $row['topic']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>From Date </th><td>:</td>
                                            <td>22-02-2019</td>
                                        </tr>
                                        <tr>
                                            <th>To Date </th><td>:</td>
                                            <td>22-02-2019</td>
                                        </tr>
                                        <tr>
                                            <th>From Time </th><td>:</td>
                                            <td>10:30AM - 2:30PM</td>
                                        </tr>
                                        <tr>
                                        <form method="get" >
                                            <td colspan="2"><input type="submit" value="Register" class="btn btn-warning" name="register" /></td>
                                        </form>
                                        </tr>
                                    </table>
                                    </center>
                                </div>
                            </div>
                        </div>
<!--                        <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn" >
                                        Event Event (something #2)
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <center>
                                        <table style="width: 100%;">
                                        <tr>
                                            <th>Event Name </th><td>:</td>
                                            <td>Pre-placement Session</td>
                                        </tr>
                                        <tr>
                                            <th>Place </th><td>:</td>
                                            <td>Manjula Hall</td>
                                        </tr>
                                        <tr>
                                            <th>Speaker </th><td>:</td>
                                            <td>Dr Mahendra V Joshi</td>
                                        </tr>
                                        <tr>
                                            <th>Topic </th><td>:</td>
                                            <td>How to be leader..!</td>
                                        </tr>
                                        <tr>
                                            <th>From Date </th><td>:</td>
                                            <td>22-02-2019</td>
                                        </tr>
                                        <tr>
                                            <th>To Date </th><td>:</td>
                                            <td>22-02-2019</td>
                                        </tr>
                                        <tr>
                                            <th>From Time </th><td>:</td>
                                            <td>10:30AM - 2:30PM</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" value="Register" class="btn btn-warning" name="register" /></td>
                                        </tr>
                                    </table>
                                    </center>
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
                                    <center>
                                        <table style="width: 100%;">
                                        <tr>
                                            <th>Event Name </th><td>:</td>
                                            <td>Pre-placement Session</td>
                                        </tr>
                                        <tr>
                                            <th>Place </th><td>:</td>
                                            <td>Manjula Hall</td>
                                        </tr>
                                        <tr>
                                            <th>Speaker </th><td>:</td>
                                            <td>Dr Mahendra V Joshi</td>
                                        </tr>
                                        <tr>
                                            <th>Topic </th><td>:</td>
                                            <td>How to be leader..!</td>
                                        </tr>
                                        <tr>
                                            <th>From Date </th><td>:</td>
                                            <td>22-02-2019</td>
                                        </tr>
                                        <tr>
                                            <th>To Date </th><td>:</td>
                                            <td>22-02-2019</td>
                                        </tr>
                                        <tr>
                                            <th>From Time </th><td>:</td>
                                            <td>10:30AM - 2:30PM</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" value="Register" class="btn btn-warning" name="register" /></td>
                                        </tr>
                                    </table>
                                    </center>
                                </div>
                            </div>
                        </div>--> 
                            
                            
                        <?php
                            }
                            
                        ?>
                        

                        
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>
