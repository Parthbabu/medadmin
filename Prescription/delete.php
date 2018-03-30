<?php
$id=$_GET["id"];
require '../shared/classpres.php';
$obj=new prescription_all();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:prescription_tbl.php');
}
?>