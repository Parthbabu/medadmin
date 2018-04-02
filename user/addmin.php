<?php
session_start();
?>
<?php
$_id=$_GET["id"];
//echo $_id;

   require '../shared/classuser.php';
        $conn=new user_all();
        $res=$conn->updatetype($_id);  
        if($res===true)
        {
            header("Refresh:1");
          //header('location:user_tbl.php');
          //return true;
        }
        else
        {
            echo 'error';
        }
       /* $conn=new mysqli('localhost','root','','medsky');
$sql="select * from user_mst where pk_usr_email_id='$_id'";
//echo $sql;
$res=$conn->query($sql);
if($res->num_rows==1)
{
    $sql="update user_mst set usr_type='Admin' where pk_usr_email_id='". $_id ."' ";
    $res=$conn->query($sql);
    header('location:user_tbl.php');
}
/*$row=$result->fetch_assoc();

$_name=$row["usr_name"];
    $_mob=$row["usr_mno"];
    $_pass=$row["usr_pass"];
    $_gen=$row["usr_gen"];
    $_pic=$row["usr_pro_pic"];
    $_bld=$row["blood_grp"];
    $_bdate=$row["usr_bdate"];
  
    $_type=$row["usr_type"];
    echo '<br/>';
    echo $_type; 
    echo $_name;
    require '../shared/classuser.php';
$conn=new user_all;
$res=$conn->updatetype($_id,$_type);
if($res==true)
   {
    //header('location:user_tbl.php');
   }
   else{
       echo 'erro';
   }*/
?>
