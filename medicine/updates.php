<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_mname=$_POST["txtmname"];
    $_mcname=$_POST["txtcname"];
    
$_use=$_POST["txtuse"];
$_type=$_POST["txttype"];
$_id=$_POST["txtid"];

    
require '../shared/classmedi.php';
$conn=new medicine_all;
$result=$conn->update($_id,$_mname,$_mcname,$_use,$_type);
if($result==true)
{
    header('location:medicine_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>