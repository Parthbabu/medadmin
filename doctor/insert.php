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
//$nameerrshow=$mobileerrshow=$emailshow=$genderErr=$passshow=$licerrshow=$adderrshow=$gendererrshow="hidden ";
//$nameErr=$name=$mobile=$mobileErr=$email=$emailErr=$gender=$pass=$passErr=$licErr=$lic=$adderr=$add=$genderErr=$gender=" ";

/*if($_SERVER["REQUEST_METHOD"]=="POST"){


        if(empty($_POST["txtname"])){

            $nameErr="Please Enter Your Name";
            $nameerrshow=" ";
        }
        else
        {
            if(preg_match("/^[0-9]*$/",$_POST["txtname"])){
            
            $nameErr=" Enter Your Name In Letters";
            $nameerrshow=" ";

            }
            else
            {
            $name=$_POST["txtname"];
             $nameErr=" ";
            $nameerrshow="hidden ";
            }
        }
                if(empty($_POST["txtmob"])){

            $mobileErr="Enter Your Number";
            $mobileerrshow=" ";
        }
        else
        {
            if(!preg_match("/^[0-9]*$/",$_POST["txtmbo"]))
            {
            $mobileErr=" Enter Your Number In Digits Only";
            $mobileerrshow=" ";
            }
            else
            {
            if (!preg_match('/^\d{10}$/', $_POST["txtmbo"]) ) 
            {
	            $mobileErr="10 Digit Is Compulsory";
            $mobileerrshow=" ";
           
             }
             else
             {
                 $mobile=$_POST["txtmbo"];
             $mobileErr=" ";
            $$mobileerrshow="hidden ";
           
             }
           
            }
          }
            if (empty($_POST["txtid"])) {
        $emailErr = "Enter Your Id"; 
        $emailshow=" ";
    }
    else
    {
       
        if (!filter_var($_POST["txtid"], FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Enter Proper Email Id";
          $emailshow=" ";
        }
        else
        {
            $email = $_POST["txtid"];
  $emailErr=" ";
  $emailshow="hidden ";
        }

    }
    if (empty($_POST["txtgen"])) {
    $genderErr = "Select Your Gender";
  } else {
    $gender = $_POST["txtgen"];
  }
    if(empty($_POST["txtpass"])){

            $passErr="Enter Your Password";
            $passshow=" ";
        }
            else
            {
            $pass=$_POST["txtpass"];
             $passErr=" ";
            $passshow="hidden ";
            }
          if(empty($_POST["txtadd"])){

            $adderr="Enter Your Address";
            $adderrshow=" ";
        }
            else
            {
            $add=$_POST["txtadd"];
             $adderr=" ";
            $adderrshow="hidden ";
            }
            if(empty($_POST["txtlic"])){

            $licErr="Please Enter Your License number";
            $licerrshow=" ";
        }
        else
        {
            if(!preg_match("/^[0-9]*$/",$_POST["txtlic"])){
            
            $licErr=" Enter Your Licence No In Digits";
            $licerrshow=" ";

            }
            else
            {
            $lic=$_POST["txtlic"];
             $licErr=" ";
            $licerrshow="hidden ";
            }
        }
        

      
    

}*/

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
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
echo '<tr>'.'<td>'.'specialist:'.'<td>'.'<select name="txtspe">';
while($row=$res->fetch_assoc())
{
//<tr><td>Specialist:<td><select name="txtspe">

echo '<option name="1"  value="<?php echo $row["spec_name"] ?>'.$row["spec_name"] .'</option>';
//<option name="2" value="2">dentist</option>
//<option name="3" value="3">surgon</option>
//<option name="5" value="5">cardiologist</option>
//</select>
//</tr>
}
echo '</select>';
?>
<br>
<!--<tr><td>Degree Id:<td><input type="text" class="form-control" name="txtdeg" placeholder="Enter Degree Id"></tr><br>-->
<?php
require '../shared/classspecialist.php';
$res=specialist::select_all();
echo '<tr>'.'<td>'.'specialist:'.'<td>'.'<select name="txtspe">';
while($row=$res->fetch_assoc())
{

<tr><td>Degree:<td><select name="txtdeg" >
<option name="1"  value="1">Mbbs</option>
<option name="2" value="2">Md</option>
<option name="3" value="3">DMD</option>

</select>
</tr>
?>
<br>

<tr><td>Profile:<td><input type="text" class="form-control" name="txtpic"  placeholder="Profile pic" ></tr><br>
<tr><td>Address:<td><input type="text" class="form-control" name="txtadd" placeholder="Enter Address" ></tr><br>

<!--<tr><td>Gender:<td><input type="text" class="form-control" name="txtgen" placeholder="Gender"></tr><br>-->
<tr><td>Gender:<td><input type="radio" name="txtgen" value="Male" checked required="required">&nbsp  Male &nbsp &nbsp &nbsp<input type="radio" name="txtgen" value="Female">&nbsp Female</tr><br>

<tr><td>Mobile No:<td><input type="text" class="form-control" pattern="[7|8|9]{1}[0-9]{9}" title="Enter proper Mobile Number" name="txtmob" placeholder="Enter Mobile NO"></tr><br>

<tr><td>Verification:<td><disable input type="text" class="form-control" name="txtveri" placeholder="Put Verification"></tr><br>
<tr><td>Token:<td><disable input type="text" class="form-control" name="txttoken" placeholder="Token"></tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php

$_eid="";
$_name="";
$_mob="";
$_pass="";
$_gen="";
$_pic="";
$_veri="";
$_token="";
$_lic="";
$_spe="";
$_deg="";
$_add="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    
    $_eid=$_POST["txtid"];
    $_name=$_POST["txtname"];
    $_mob=$_POST["txtmob"];
    $_pass=$_POST["txtpass"];
    $_gen=$_POST["txtgen"];
     $_pic=$_POST["txtpic"];
     $_veri=$_POST["txtveri"];
   //  $_token=$_POST["txttoken"];
     $_lic=$_POST["txtlic"];
    $_spe=$_POST["txtspe"];
    $_deg=$_POST["txtdeg"];
    $_add=$_POST["txtadd"];
    $r=md5(rand());
    $_token=substr($r,0,10);
   

    require '../shared/classdoc.php';
    $conn=new doctor_all;
    $result=$conn->insert($_eid,$_pass,$_lic,$_name,$_spe,$_deg,$_pic,$_add,$_gen,$_mob,$_veri,$_token);

    if($result===true)
    {
         header('location:doctor_tbl.php');
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