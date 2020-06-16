<?php 
 
// $data = array();
// 
// $query="select * from tbl_event order by id";
// 
// $result=mysqli_query($con, $query);
// 
// while($row =  mysqli_fetch_assoc($result)){
//     $data[]=array(
//         'id' => $row["eid"],
//         'title' => $row["name"].$row["topic"],
//         'start' => $row["form_date"],
//         'end' => $row["to_date"],
//     );
// }
// 
// echo json_encode($data);





//load.php

$connect = new PDO('mysql:host=localhost;dbname=db_crs', 'root', '');

$data = array();

$query = "SELECT * FROM tbl_event ORDER BY eid";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["eid"],
  'title'   => $row["name"],
  'start'   => $row["from_date"],
  'end'   => $row["to_date"],
  'color' => $row["color"]
  );
}
echo json_encode($data);

?>
 
 


