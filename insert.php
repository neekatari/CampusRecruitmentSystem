<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=db_crs', 'root', '');
$now=date("Y-m-d H-i-s");
//$data = array();

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO tbl_event 
 (name,place,speaker,topic,details,from_date,to_date,color) 
 VALUES (:title, :place, :speaker, :topic, :detail , :start, :end, :color)
 ";
 $statement = $connect->prepare($query);
$statement->execute(
   array(
   ':title'  => $_POST['title'],
   ':place' => $_POST['place'],
   ':speaker' => $_POST['speaker'],
   ':topic' => $_POST['topic'],
   ':detail' => $_POST['detail'],
   ':start' => $_POST['start'],
   ':end' => $_POST['end'],
   ':color' => $_POST['color']
   
  
  )
 );
 
 
}

//echo $connect->errorInfo();


?>