<!DOCTYPE html>
<html>
    <head>
    
    <script src="../shared/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../shared/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../shared/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../shared/js/bootstrap.min.js" ></script>
</head>
<body>
<?php
if(isset($_POST["btnin"])){

    
    
    $_eid=$_POST["txtid"];
    $_pass=$_POST["txtpass"];
    $_lic=$_POST["txtlic"];
    $_name=$_POST["txtname"];
    $_spe=$_POST["txtspe"];
    $_deg=$_POST["txtdeg"];
    $_pic="null";
    $_add="null";
    $_gen=$_POST["txtgen"];
    $_mob=$_POST["txtmob"];
    $_veri=$_POST["txtveri"];
    $r=md5(rand());
    $_token=substr($r,0,10);
   
    require '../shared/classdoc.php';
    $conn=new doctor_all;
   $res=$conn->insert($_eid,$_pass,$_lic,$_name,$_spe,$_deg,$_pic,$_add,$_gen,$_mob,$_veri,$_token);
    if($res==true)
    {
        echo "<script type='text/javascript'>alert('Data Inserted Successfully');</script>";
        header('location:doctor_tbl.php');
    }
    else
    {
        echo " Not Successfully Insert";
    }

}

?>
<form method="post" action="#" enctype="multipart/form-data">
<table class="table">
<h1><center>Insert Your Data</center></h1>

<tr><td>Email:<td><input type="email" class="form-control" name="txtid" placeholder="Enter User Email Id" required></tr><br>

<tr><td>Password:<td><input type="password" class="form-control" name="txtpass" pattern=".{6,12}" title="6 to 12 characters" placeholder="Enter Password"  required></tr><br>

<tr><td>License Number:<td><input type="text" class="form-control" name="txtlic" pattern="[0-9]{1,15}" title="In Digits Only ex.1573" placeholder="Enter Lisence number" required></tr><br>

<tr><td>Name:<td><input type="text" class="form-control" name="txtname" pattern="[A-Za-z]{1,15}" title="Doctor Name should only contain Letters ex.parth" placeholder="Enter User Name "></tr><br>

<!--<tr><td>Specialist:<td><input type="text" class="form-control" name="txtspe" placeholder="Specialist"></tr><br>-->

<?php
require '../shared/classspecialist.php';
$res=specialist::select_all();
//$q=specialist::selectbyid($sid);

echo '<tr>'.'<td>'.'specialist:'.'<td>'.'<select name="txtspe">';
while($row=$res->fetch_assoc())
{
    echo $row["pk_spec_id"];
    echo '<option name=""  value=" '. $row["pk_spec_id"].' ">'.$row["spec_name"] .'</option>';
}
    echo '</select>';
?>
<br>
<?php
require '../shared/classdegree.php';
$res=degree_all::select_all();
echo '<tr>'.'<td>'.'Degree:'.'<td>'.'<select name="txtdeg">';
while($row=$res->fetch_assoc())
{
    echo $row["pk_deg_id"];
    echo '<option  name="txtdeg"  value="'. $row["pk_deg_id"] .' ">'.$row["deg_name"] .'</option>';
}

echo '</select>';

?>
<br>

<!-- <tr><td>Profile:<td><input type="text" class="form-control" name="txtpic"  placeholder="Profile pic" ></tr><br> -->
<tr><td>Address:<td><input type="text" class="form-control" name="txtadd" placeholder="Enter Address" ></tr><br>

<!--<tr><td>Gender:<td><input type="text" class="form-control" name="txtgen" placeholder="Gender"></tr><br>-->
<tr><td>Gender:<td><input type="radio" name="txtgen" value="Male" checked required="required">&nbsp  Male &nbsp &nbsp &nbsp<input type="radio" name="txtgen" value="Female">&nbsp Female</tr><br>

<tr><td>Mobile No:<td><input type="text" class="form-control" pattern="[7|8|9]{1}[0-9]{9}" title="Enter proper Mobile Number" name="txtmob" placeholder="Enter Mobile NO"></tr><br>

<tr><td>Verification:<td><input type="text" class="form-control" name="txtveri" value="0" placeholder="Put Verification" readonly></tr><br>
<tr><td>Token:<td><disable input type="text" class="form-control" name="txttoken" placeholder="Token"></tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>
</body>
</html>