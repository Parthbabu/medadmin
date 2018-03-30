<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_rid=$_POST["txtid"];
    $_rtitle=$_POST["txttitle"];
    
$_rdesc=$_POST["txtdesc"];
$_sdate=$_POST["txtsdate"];
$_edate=$_POST["txtedate"];


    
require '../shared/classrem.php';
$conn=new reminder;
$result=$conn->update($_rid,$_rtitle,$_rdesc,$_sdate,$_edate);
if($result==true)
{
    header('location:reminder_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>