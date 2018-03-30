<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
    $_id=$_POST["txtid"];
$_name=$_POST["txtname"];

    $_mob=$_POST["txtmno"];
    $_pass=$_POST["txtpass"];
    $_gen=$_POST["txtgen"];
    $_pic=$_POST["txtpic"];
    $_bld=$_POST["txtbld"];
    $_bdate=$_POST["txtbdate"];
   
    $_type=$_POST["txttype"];


    
require '../shared/classuser.php';
$conn=new user_all;
$result=$conn->update($_id,$_name,$_mob,$_pass,$_gen,$_pic,$_bld,$_bdate,$_type);
if($result==true)
{
    header('location:user_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>