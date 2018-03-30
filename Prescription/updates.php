<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_mid=$_POST["txtmid"];
    $_id=$_POST["txtid"];
    $_mor=$_POST["txtmor"];
    $_noon=$_POST["txtnoon"];
    $_night=$_POST["txtnight"];
$_ins=$_POST["txtins"];    
$_day=$_POST["txtday"];
$_date=$_POST["txtdate"];


    
require '../shared/classpres.php';
$conn=new prescription_all;
$result=$conn->update($_id,$_mid,$_mor,$_noon,$_night,$_ins,$_day,$_date);
if($result==true)
{
    header('location:prescription_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>