<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_dname=$_POST["txtdname"];
   
$_id=$_POST["txtid"];

    
require '../shared/classdegree.php';
$conn=new degree_all;
$result=$conn->update($_id,$_dname);
if($result==true)
{
    echo "done";
   // header('location:degree_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>