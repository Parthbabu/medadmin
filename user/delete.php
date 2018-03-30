<?php
$id=$_GET["id"];
require '../shared/classuser.php';
$obj=new user_all();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:user_tbl.php');
}
?>