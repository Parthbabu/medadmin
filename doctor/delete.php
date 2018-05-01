<?php
$id=$_GET["id"];
//require 'connection.php';
require '../Shared/classdoc.php';
$obj=new doctor_all();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:doctor_tbl.php');
}
?>