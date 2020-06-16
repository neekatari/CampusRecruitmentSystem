<?php
session_start();
include './master.php';
include './database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tname=null;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
        <link rel="stylesheet" href="mycss/style.css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
        
        <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        </script>
    </head>
    <body>
        <style>
            input[type='search']{
                border: 1px solid #FF8C00 !important;
                border-radius: 10px !important;
                outline: none !important;
                width: 500px;
                
            }
            select{
                font-size: 20px !important;
                border-radius: 10px;
                outline: none !important;
            }
            .next,.previous{
                border-radius: 20px !important;
                
            }
            
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
            .btn b{
                background-color: #ff0066;
                width: 100%;
                color:white;
            }
            .btn b:hover{
                background-color: transparent;
                border: 2px solid #ff0066;
            }
            .rowe{
                display: inline-block;
            }
            
            .bb{
                 border: none !important;
                height: 40px !important;
                background-color: #ff0066 !important;
                width: 100% !important;
                color:white !important;
            }
            .bb:hover{
                 background-color: transparent !important;
                border: 2px solid #ff0066 !important;
                color: black !important;
            }
            
        
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
                background-color: #ff0066;
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
    <center>
        <form method="post">
            <div class="" style="margin-top:100px;">
                <div class="up">
                    <ul class="row">
                        <li class="col-md-2">
                            <a ><input type="submit" value="View Company-details" name="vc" /></a>
                        </li >
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="add Company-details" name="ac" /></a>
                        </li>
<!--                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Update Company-details" name="uc" /></a>
                        </li>
                        <li class="col-md-2">
                            <a href="#"><input type="submit" value="Delete Company" name="dc" /></a>
                        </li>-->
                    </ul>

                </div>
            </div>
        </form> 

    </center>
    <?php
        if(isset($_POST['vc'])){

        echo "<div class='jumbotron'>"
        . "<div class='row'>";
    ?>
            <div class="col-md-1">


                <div class="col-md-1 justify-content-left" style="margin-top: 50px;" >

                            <div class="btn-group-vertical">
                                <?php
                                    $query="select * from tbl_technology;";
                                    $sql=  mysqli_query($con, $query);
                                    while ($row= mysqli_fetch_assoc($sql)){
                                        
                                        echo "<button type='button' class='btn btn-warning'> $row[technology]</button>";
                                    }
                                ?>
                                
                                
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#test-modal" ><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#test-modal-del" ><i class="fa fa-minus"></i></button>






                                <div class="modal fade" id="test-modal" data-modal-index="1">
                                    <div class="modal-dialog text-center">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h4 class="modal-title">Add Technology</h4>
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form">
                                                    <form class="login-form"  action="#" method="POST">
                                                        <div class="form-group">

                                                            <input type="text" class="form-control" name="txttechnology" placeholder="Tehnology name" required="required"/>
                                                        </div>
<!--                                                        <div class="form-group">

                                                            <input type="text" class="form-control" name="txtyear" placeholder="Academic Year" required="required"/>
                                                        </div>-->
                                                        <input type="submit" name="btn" class="btn btn-warning" value="Add" style="width: 100%;"/>
                                                        
                                                    </form>
                                                </div>
                                                <?php 
                                                    ?>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                
                                <!-- delete technology modal -->
                                <div class="modal fade" id="test-modal-del" data-modal-index="1">
                                    <div class="modal-dialog text-center">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h4 class="modal-title">Remove Technology</h4>
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form">
                                                    <form class="login-form"  action="#" method="POST">
                                                        <div class="form-group">

                                                            <!--<input type="text" class="form-control" name="txttechnology" placeholder="Tehnology name" required="required"/>-->
                                                            <select name="removetech">
                                                                <option selected hidden >Select Technology</option>
                                                                <?php
                                                                    $getcompany = "select * from tbl_technology";
                                                                    $exe = mysqli_query($con, $getcompany);
                                                                    while ($rowcompany = mysqli_fetch_array($exe)) {
                                                                        ?>
                                                                <option value="<?php echo $rowcompany['tid'] ?>"><?php echo $rowcompany['technology'] ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                            </select>
                                                            
                                                        </div>
<!--                                                        <div class="form-group">

                                                            <input type="text" class="form-control" name="txtyear" placeholder="Academic Year" required="required"/>
                                                        </div>-->
                                                        <input type="submit" name="del" class="btn btn-warning" value="Delete" style="width: 100%;"/>
                                                        
                                                    </form>
                                                </div>
                                                <?php 
                                                    ?>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                
                                
                                
                                
                                
                                

                            </div>

                        </div>
                    </div>
                
    
    
    
    
    
    <div class="col-md-11 table-responsive">
    <table id="example" class="table table-bordered table-hover table-striped" style="">
        <thead>
            <tr class="">
                <th>Company</th>
                <th>address</th>
                <th>company_city</th>
                <th>mail</th>
                <th>contactno</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            
                <?php
                
                $query="select * from tbl_company;";
                $sql=  mysqli_query($con, $query);
                
                while($row=  mysqli_fetch_assoc($sql))
                {
                    echo "<tr><td> $row[company] </td>";
                    echo "<td> $row[address] </td>";
                    echo "<td> $row[company_city] </td>";
                    echo "<td> $row[mail] </td>";
                    echo "<td> $row[contactno] </td>";
                    
                    echo "<td> <a href='updatecompany.php' ><i class='fa fa-trash' style='font-size:30px; margin-left:20px;color:#696969;' ></i></a> "
                    . " <a href='updatecompany.php' ><i class='fa fa-edit' style='font-size:30px;margin-left:30px;color:#696969;' ></i></a> "
                    . " <a href='#cid'  data-toggle='modal' data-target='.bd-example-modal-lg$row[cid]' ><i class='fa fa-paper-plane' style='font-size:30px;margin-left:20px;color:#696969;' ></i></a> </td></tr>";
                    
                
                    
                    
                    ?>
            
            
        <div class="modal fade bd-example-modal-lg<?php echo $row['cid'];  //$cid =$row['cid'];  ?>"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" id="cid">
                       
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h4> Add company details </h4>
                            </div>
                            <form action="noti.php" id="myform" method="post">
                            <div class="form-group">
                                     
                                <label>Company Date:</label>
                                <input type="hidden" value="<?php echo $row['cid'];  //$cid =$row['cid'];  ?>" id="cid" name="cid"/>
                                <input type="date" name="cdate"  id="cdate" >
                                <input type="number" class="form-control" id="total"  name="total" placeholder="No of Student"><br>
                            </div>
                            <center>
                                <div class="col-md-6">
                                    <h6 class="info-text">Provide Stipend.?</h6>


                                    <div class="form-group" style="font-size: 30px;">
                                        <label class="switch" style="margin-left: 50px;">
                                            <span style="margin-left: -180px; font-size: 30px;color:#AAAAAA;">No</span>
                                            <input type="checkbox" name="que" id="que" value="y" id="checkbox1">

                                            <span class="slider round"></span>

                                        </label>
                                        <span style="color: #AAAAAA;margin-left: 20px;">Yes</span>
                                    </div>



                                    <div class="form-group " >
                                        <label for="city" id="stipendlabel" >Stipend:</label>
                                        <input type="text" class="form-control" id="stipend" name="stipend"  id="stipend">
                                    </div>
                                </div>  
                            </center>
                            <input type="number" name="ctc" id="ctc" placeholder="CTC" />
                            <select name="technology" id="tech" >
                                <option selected hidden>Select Technology</option>
                                <?php $gettechnology = "select * from tbl_technology";
                                $exequery = mysqli_query($con, $gettechnology);
                                while ($row = mysqli_fetch_array($exequery)) {
                                    ?>
                                    <option value="<?php echo $row['tid'] ?>" ><?php echo $row['technology'] ?>  </option>
            <?php }
        ?>
                            </select>

                            <input type="submit" onclick="sendnoti()" name="add" id="add" value="Add"/>
                           </form> 
                        </div>

                    </div>
                </div>
            <?php
            
            //$i++;
            
            
             }
              
              
               
                
    ?>
            
        </tbody>
    </table>
    </div>
    <script type="text/javascript">
        
        
//        $(document).on('click','#add',function(){
//           var ctc = $('#ctc').val();
//           var cdate = $('#cdate').val();
//           var que = $('#que').val();
//           var tech = $('#tech').val();
//           var total = $('#total').val();
//           var sti = $('#stipend').val();
//           var cid = $('#cid').val();
//           
//           $.ajax({
//                                url: "noti.php",
//                                type: "POST",
//                                data: {tech:tech, ctc:ctc, que:que, total:total,sti:sti, cid:cid,cdate:cdate},
//                                success: function ()
//                                {
//                                    alert("Insert Done..!");
//                                }
//                            });
//        });
    </script>
    

    
    
    
    
    <?php
        
        
        } else if (isset($_POST['ac'])) {
        ?>
        <div class="jumbotron container-fluid">
            <div class="text-center">
                <h3>Add Company Details</h3>
            </div>
            
            
                
                
                    
                
            
            
            <form action="#" method="post" enctype="multipart/form-data" >
                <div class="row justify-content-center" style="margin-top:30px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Companyname">Company Name:</label> <!-- style="margin-top:30px;" -->
                            <input type="text" class="form-control" name="cname" id="email">
                        </div>
                        <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="cmail" id="email">
                </div>
                        
                    <div class="form-group">
                            <div class="custom-file">
                                
                                <input type="file" class="custom-file-input" name="file" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose Logo</label>
                              </div>
                        </div>
                    
                    </div>
                </div>
                
                <div class="row justify-content-center">


                    <div class="col-md-3 ">



                        <div class="form-group" >
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="caddress" id="email">
                        </div>
<!--                        <div class="form-group">
                            <label for="ctc">CTC:</label>
                            <input type="number" class="form-control" name="ctc" id="pwd">
                        </div>-->
                        
                        
<!--                        <div class="form-group">
                            <label for="pwd">Provide Stipend ?</label>
                            <input type="checkbox" class="form-control" id="checkbox1" name="que" value="y" >Yes
                        </div>-->
                        
                        



                    </div>
                    
                    <div class="col-md-3 ">

                       
                            
                        <div class="form-group " >
                            <label for="city">Company City:</label>
                            <input type="text" class="form-control" name="city" id="email">
                        </div>
                        <div class="form-group">
                            <label for="contactnumber">Contact Number:</label>
                            <input type="text" class="form-control" name="contact" id="email">
                        </div>
                        
<!--                        <div class="form-group">
                            <label for="pwd">Stipend:</label>
                            <input type="number" class="form-control" id="pwd">
                        </div>-->



                    </div> 

                </div>
<!--                 <center>
                <div class="col-md-6">
                <h6 class="info-text">Provide Stipend.?</h6>
                       
                             
                                <div class="form-group" style="font-size: 30px;">
                                    <label class="switch" style="margin-left: 50px;">
                                        <span style="margin-left: -180px; font-size: 30px;color:#AAAAAA;">No</span>
                                        <input type="checkbox" name="que" value="y" id="checkbox1">

                                        <span class="slider round"></span>

                                    </label>
                                    <span style="color: #AAAAAA;margin-left: 20px;">Yes</span>
                                </div>
                            
                        
                      
                         <div class="form-group " >
                            <label for="city" id="stipendlabel" >Stipend:</label>
                            <input type="text" class="form-control" name="stipend"  id="stipend">
                        </div>
                </div>  
                </center>-->
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="submit" name="btnadd" class="bb" value="Add"/>
                    </div>
                </div>
                </div>
            </form>
            

        <?php
    } else if (isset($_POST['uc'])) {
        ?>
        <div class="jumbotron container-fluid">
            <div class="text-center">
                <h3>Update Company Details</h3>
            </div>
            <form action="/action_page.php">

                  
                    

                
                    


                    <div class="row justify-content-center " style="margin-top:30px;"  >     
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="updatecname">Company Name:</label>
                                <input type="text" class="form-control" name="ucname"  id="email">  
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">


                        <div class="col-md-3 ">



                            <div class="form-group"  >
                                 <label for="updateaddress">Address:</label>
                                <input type="text" class="form-control" name="uaddress" id="email">
                            </div>
                            <div class="form-group">
                                <label for="updateemail">E-mail:</label>
                                 <input type="email" class="form-control" name="uemail" id="email">
                            </div>
                            <div class="form-group">
                               <label for="updateacadamicyear">Acadamic year:</label>
                              <input type="text" class="form-control" name="uyear" id="pwd">
                            </div>
<!--                            <div class="form-group">
                                <label for="pwd">From Time:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>-->



                        </div>
                        <div class="col-md-3 ">



                            <div class="form-group " >
                                 <label for="updatecity ">Company City:</label>
                              <input type="text" class="form-control" name="ucity" id="email">
                            </div>
                            <div class="form-group">
                                 <label for="updatecontact">Contact Number:</label>
                            <input type="text" class="form-control" name="ucontact" id="email">
                            </div>
                            <div class="form-group">
                                <label for="updatectc">CTC:</label>
                                 <input type="number" class="form-control" name="uctc" id="pwd">
                            </div>
<!--                            <div class="form-group">
                                <label for="pwd">To Time:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>-->



                        </div> 

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <input type="submit" name="btnupdate" class="bb" value="Update"/>
                        </div>
                    </div>
                 

            </form>
        </div>
    
    <?php
}
?>
</body>
  <script type="text/javascript">
        $(document).ready(function () {
            //set initial state.
            $('#stipend').hide();
           $('#stipendlabel').hide();
            $('input:checkbox#checkbox1').change(
                    function () {
                        if (this.checked) {
                            $('#stipend').show(500);
                            $('#stipendlabel').show(500);
                        }
                        else {
                            $("#stipend").hide(500);
                            $('#stipendlabel').hide();
                        }

                    });
        });
    </script>
</html>

<?php 

    if(isset($_POST['btnadd']))
    {
        $cname = $_POST['cname'];
        $address = $_POST['caddress'];
        $mail =$_POST['cmail'];
        $que = null;
//        if(isset($_POST['que'])){
//            $que=$_POST['que'];
//          
//        }
//        else
//        {
//            $que='n';
//        }
//        $stipend = $_POST['stipend'];
        $contact=$_POST['contact'];
//        $ctc=$_POST['ctc'];
        $city=$_POST['city'];
        
     
       
        
//        if($stipend == null)
//        {
//            $stipend=0;
//            $que = 'n';
//        }
        
        $path = "./company/$_POST[cname]";

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
        
    
        $da=  date('Y-m-d-h-i-s');
        $curdate=  date('Y');
        $a=$curdate-5;
        $b=$a+1;
        $b=  substr($b,2,3);
        $ac=$a."-".$b;
        $status='Active';
        
        
       
        $addcompany = "INSERT INTO `tbl_company`( `company`, `address`, `company_city`, `mail`, `contactno`, `img`, `academic_year`, `isActive`, `createdAt`, `modifiedAt`) VALUES ('$cname','$address','$city','$mail','$contact','$target','$ac','$status','$da','$da');";
        $exe=  mysqli_query($con, $addcompany);
        
        if($exe)
        {
            echo "<script>alert('Company Added Succesfully')</script>";
        }
 else {
     echo mysqli_error($con);
 }
            
        
    }

if (isset($_POST['btn'])) {
         $da=  date('Y-m-d-h-i-s');
        $curdate=  date('Y');
        $a=$curdate-5;
        $b=$a+1;
        $b=  substr($b,2,3);
        $ac=$a."-".$b;
    $tname = $_POST['txttechnology'];
    $addtechnology = "insert into tbl_technology (technology,Academic_year) values ('$tname','$ac');";
$exe = mysqli_query($con, $addtechnology);
if ($exe) {
    echo "<script>alert('A new Technology $tname is added succesfully. ' )</script>";
} else {
    echo mysqli_error($con);
}   
    
}

if (isset($_POST['del'])) {
        
    $remove = $_POST['removetech'];
    $removetechnology = "delete from tbl_technology   where tid='$remove';";
$exeremove = mysqli_query($con, $removetechnology);
if ($exeremove) {
    echo "<script>alert('A  Technology $tname is Removed succesfully. ' )</script>";
} else {
    echo mysqli_error($con);
}   
    
}