<?php
$id=$_GET["id"];
require '../shared/classrem.php';
$obj=new reminder();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:reminder_tbl.php');
}
?>