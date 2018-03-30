<?php
$id=$_GET["id"];
require '../shared/classdegree.php';
$obj=new degree_all();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:degree_tbl.php');
}
?>