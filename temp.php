<?php
session_start();;
if(isset($_GET['cid'])){
$cid=$_GET['cid'];

$_SESSION['cid']=$cid;
//echo $cid;
}

