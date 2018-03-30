<?php
$id=$_GET["id"];
require '../shared/classblog.php';
$obj=new blog();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:blog_tbl.php');
}
?>