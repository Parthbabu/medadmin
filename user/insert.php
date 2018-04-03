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
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center>Insert Your Data</center></h1>

<tr><td>Email:<td><input type="email" class="form-control" name="txtid" placeholder="Enter User Email Id"required></tr><br>
<tr><td>Name:<td><input type="text" class="form-control" name="txtname"  pattern="[A-Za-z]{1,15}" title="Doctor Name should only contain Letters ex.parth" placeholder="Enter User Name " required></tr><br>
<tr><td>Mobile No:<td><input type="text" class="form-control" name="txtmob" pattern="[7|8|9]{1}[0-9]{9}" title="Enter proper Mobile Number" placeholder="Enter Mobile NO" required></tr><br>
<tr><td>Password:<td><input type="password" class="form-control" name="txtpass" pattern=".{6,12}" title="6 to 12 chracters" placeholder="Enter Password" required></tr><br>
<!--<tr><td>Gender:<td><input type="text" class="form-control" name="txtgen" placeholder="Gender"></tr><br>-->
<tr><td>Gender:<td><input type="radio" name="txtgen" value="Male" checked required="required">&nbsp  Male &nbsp &nbsp &nbsp<input type="radio" name="txtgen" value="Female">&nbsp Female</tr><br>
<tr><td>Profile:<td><input type="text" class="form-control" name="txtpic" placeholder="Profile pic" ></tr><br>
<tr><td>Verification:<td><disable input type="text" class="form-control" name="txtveri" placeholder="Put Verification"></tr><br>
<!--<tr><td>Blood Group:<td><input type="text" class="form-control" name="txtbld" placeholder="Enter Blood Group"></tr><br>-->
<tr><td>Blood Group:<td><select name="txtbld">
<option name="1"  value="A+">A+</option>
<option name="2" value="A-">A-</option>
<option name="3" value="B+">B+</option>
<option name="4" value="B-">B-</option>
<option name="5"  value="O+">O+</option>
<option name="6"  value="O-">O-</option>
<option name="7"  value="AB+">AB+</option>
<option name="8"  value="AB-">AB-</option>
</select>
</tr><br>
<tr><td>BirthDate:<td><input id="date" type="date" value="05-06-2018" class="form-control" name="txtbdate" placeholder="Enter User BirthDate"></tr><br>
<tr><td>Token:<td><disable input type="text" class="form-control" name="txttoken" placeholder="Token"></tr><br>
<tr><td>Type:<td><input type="text" class="form-control" name="txttype" placeholder="Enter User Type" required></tr><br>

</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_id="";
$_name="";
$_mob="";
$_pass="";
$_gen="";
$_pic="";
$_veri="";
$_token="";
$_type="";
$_bdate="";
$_bldgrp="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_id=$_POST["txtid"];
    $_name=$_POST["txtname"];
    $_mob=$_POST["txtmob"];
    $_pass=$_POST["txtpass"];
    $_gen=$_POST["txtgen"];
     $_pic=$_POST["txtpic"];
     $_veri=$_POST["txtveri"];
     $_token=$_POST["txttoken"];
     $_type=$_POST["txttype"];
     $_bdate=$_POST["txtbdate"];
     $_bldgrp=$_POST["txtbld"];


    require '../shared/classuser.php';
    $conn=new user_all;
    $result=$conn->insert($_id,$_name,$_mob,$_pass,$_gen,$_pic,$_bldgrp,$_bdate,$_veri,$_token,$_type);

    if($result===true)
    {
         header('location:user_tbl.php');
    }
    else
    {
        echo $sql;
        echo " Not Successfully Insert";
        header('location:../web/index.php');
    }

}
?>
</body>
</html>