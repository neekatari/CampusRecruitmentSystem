<?php



include_once './database.php';

$date=$_POST['cdate'];
                    $total = $_POST['total'];
                    
                    $stipend=$_POST['stipend'];
                    $ctc=$_POST['ctc'];
                    $tech=$_POST['technology'];
                    $com=$_POST['cid'];
                    $da=  date('Y-m-d h:i:s');
                    
                     if (isset($_POST['que'])) {
                        $que = $_POST['que'];
                        } else {
                        $que = 'n';
                        }
                
    if($stipend == null)
        {
            $stipend=0;
            $que = 'n';
        }
                        
$send  = "insert into tbl_company_notification  ( `tid`, `cid`, `no_of_student`, `company_date`, `provide_stipend`, `stipend`, `ctc`, `createdAt`)  values ('$tech','$com','$total','$date','$que','$stipend','$ctc','$da');";

$exesql=  mysqli_query($con,$send);
                    
                    if($exesql)
                    {
                        echo "done";
                        echo "<script>alert('Notificatin send Succesfully')</script>";
                        header("Location:Registrationcompany.php");
                    }
                    else{
                        echo mysqli_error($con);
                        echo "<script>alert('hello')</script>";
                    }

//$connect = new PDO('mysql:host=localhost;dbname=db_crs', 'root', '');
//$now=date("Y-m-d H-i-s");
//
//
//if(isset($_POST['add']))
//                {
//                    
//                    $date=$_POST['cdate'];
//                    $total = $_POST['total'];
//                    $que=$_POST['que'];
//                    $stipend=$_POST['stipend'];
//                    $ctc=$_POST['ctc'];
//                    $tech=$_POST['technology'];
//                    $com=$_POST['cid'];
//                    $da=  date('Y-m-d h:i:s');
//                    
////                    $send  = "insert into tbl_company_notification   values ('$tech','$com','$total','$date','$que','$stipend','$ctc','$da');";
////                    $exesql=  mysqli_query($con,$send);
////                    
////                    if($exesql)
////                    {
////                        echo "done";
////                        echo "<script>alert('hello')</script>";
////                    }
////                    else{
////                        echo mysqli_error($con);
////                        echo "<script>alert('hello')</script>";
////                    }
//                    
//                
//
// $query = "
// INSERT INTO tbl_company_notification
// (tid,cid,no_of_student,company_date,provide_stipend,stipend,ctc,createdAt) 
// VALUES (:tech,:cid, :total, :cdate, :que, :sti,:ctc ,:now)
// ";
// $statement = $connect->prepare($query);
//$statement->execute(
//  array(
//      ':tech' => $tech,
//      ':ctc' => $ctc,
//      ':que' => $que,
//      ':total' => $total,
//      ':sti' => $stipend,
//      ':cid' => $com,
//      ':cdate'=>$date,
//      ':now' => $now
//   
//  
//  )
// );
// 
// 
//}

//echo $connect->errorInfo();


