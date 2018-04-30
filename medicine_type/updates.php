<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "hi";
$_type=$_POST["txttype"];
   
$_id=$_POST["txtid"];
echo $_id;
    
require '../shared/classmed_type.php';
$conn=new med_type;
$result=$conn->update($_id,$_type);
if($result==true)
{
   // header('location:medicine_type_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>