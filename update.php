<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=db_crs', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE tbl_event 
 SET name=:title , from_date=:start, to_date=:end 
 WHERE eid=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start' => $_POST['start'],
   ':end' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>
