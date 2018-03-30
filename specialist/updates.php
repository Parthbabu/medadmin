<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_sname=$_POST["txtsname"];
   
$_id=$_POST["txtid"];

    
require '../shared/classspecialist.php';
$conn=new specialist;
$result=$conn->update($_id,$_sname);
if($result==true)
{
    header('location:specialist_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>