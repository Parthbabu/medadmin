<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "hii";
$_sname=$_POST["txttype"];
   
$_id=$_POST["txtid"];

    
require '../shared/classspecialist.php';
$conn=new specialist;
$result=$conn->update($_id,$_sname);
if($result==true)
{
    //header('location:specialist_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>