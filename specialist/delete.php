<?php
$id=$_GET["id"];
require '../shared/classspecialist.php';
$obj=new specialist();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:specialist_tbl.php');
}
?>