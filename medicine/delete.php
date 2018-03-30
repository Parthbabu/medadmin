<?php
$id=$_GET["id"];
require '../shared/classmedi.php';
$obj=new medicine_all();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:medicine_tbl.php');
}
?>