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


<tr><td>User Email:<td><input type="email" class="form-control" name="txtuid" placeholder="Enter User Id "required></tr><br>
<tr><td>Doctor Email:<td><input type="email" class="form-control" name="txtdid" placeholder="Enter Doctor Id"required></tr><br>
<tr><td>Medicine Id:<td><input type="text" class="form-control" name="txtmid" placeholder="Enater Medicine Id" required></tr><br>
<tr><td>Morning:<td><input type="text" class="form-control" name="txtmor" placeholder="Morning"required></tr><br>
<tr><td>Noon:<td><input type="text" class="form-control" name="txtnoon" placeholder="Noon"required></tr><br>
<tr><td>Night:<td><input type="text" class="form-control" name="txtnight" placeholder="Night"required></tr><br>
<tr><td>Instruction:<td><input type="text" class="form-control" name="txtins" placeholder="Any Instruction" required></tr><br>
<tr><td>Day:<td><input type="text" class="form-control" name="txtday" pattern="[0-9]{1,2}" title="In Digits Only ex.5" placeholder="Enater Days"></tr><br>
<tr><td>Date:<td><input id="date" type="date" value="05-06-2018" class="form-control" name="txtdate" placeholder="Enter Datetime" required></tr><br>

</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php

$_fuid="";
$_fdid="";
$_mid="";
$_mor="";
$_noon="";
$_night="";
$_ins="";
$_day="";
$_date="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_fuid=$_POST["txtuid"];
    $_fdid=$_POST["txtdid"];
    $_mid=$_POST["txtmid"];
    $_mor=$_POST["txtmor"];
    $_noon=$_POST["txtnoon"];
    $_night=$_POST["txtnight"];
    $_ins=$_POST["txtins"];
    $_day=$_POST["txtday"];
    $_date=$_POST["txtdate"];

    require '../shared/classpres.php';
    $conn=new prescription_all;
    $result=$conn->insert($_fuid,$_fdid,$_mid,$_mor,$_noon,$_night,$_ins,$_day,$_date);

    if($result===true)
    {
         header('location:prescription_tbl.php');
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