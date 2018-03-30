<?php
$id=$_GET["id"];
require '../shared/classmed_type.php';
$obj=new med_type();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:medicine_type_tbl.php');
}
?>