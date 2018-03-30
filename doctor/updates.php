<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
 $_eid=$_POST["txtid"];
    $_name=$_POST["txtname"];
    $_mob=$_POST["txtmob"];
    $_pass=$_POST["txtpass"];
    $_gen=$_POST["txtgen"];
     $_pic=$_POST["txtpic"];
    
     $_lic=$_POST["txtlic"];
    $_spe=$_POST["txtspe"];
    $_deg=$_POST["txtdeg"];
    $_add=$_POST["txtadd"];


    
require '../shared/classdoc.php';
$conn=new doctor_all;
$result=$conn->update($_eid,$_pass,$_lic,$_name,$_spe,$_deg,$_pic,$_add,$_gen,$_mob);
if($result==true)
{
    header('location:doctor_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>