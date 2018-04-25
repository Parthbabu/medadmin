<?php
$id=$_GET["id"];
require 'connection.php';
$obj=new emp_all();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:doctor_tbl.php');
}
?>