<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_bid=$_POST["txtid"];
    $_bque=$_POST["txtque"];
    
$_bans=$_POST["txtans"];
$_bdate=$_POST["txtdate"];


    
require '../shared/classblog.php';
$conn=new blog;
$result=$conn->update($_bid,$_bque,$_bans,$_bdate);
if($result==true)
{
    header('location:blog_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>