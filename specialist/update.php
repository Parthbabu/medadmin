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
<div class="jumbotron">
  <div class="container">
    <h1>Update Your Data</h1>
  </div>
</div>
<?php

$_id=$_GET["id"];

$conn=new mysqli('localhost','root','','medsky');
$sql="select * from doc_specialist where pk_spec_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_sname=$row["spec_name"];
echo $_sname;
   
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //echo "hii";
$sname=$_POST["txtsname"];
   
$id=$_id;

    
require '../shared/classspecialist.php';
$conn=new specialist;
$result=$conn->update($id,$sname);
if($result==true)
{
    //echo "done";
        header('location:specialist_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>
<form action="#" method="post" class="container">
    <table class="table">
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter ID:<td><input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required  disabled >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Specialist:<td><input type="text" value="<?php echo $_sname ?>" name="txtsname" class="form-control" id="text" placeholder="Enter Specialist Name" required >
        </tr><br></div>
    </div>
   <!-- <div class="row">
    <tr><td>Specialist:<td><select name="txtsname">
    <option name="1"  value="<?php echo $_sname ?>"></option>
<option name="1"  value="child specialist">chaild specialist</option>
<option name="2" value="dentist">dentist</option>
<option name="3" value="surgon">surgon</option>
<option name="5" value="cardiologist">cardiologist</option>
</select>
    </div>-->
    <div class="row">
       <tr><td> <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
       <td></tr><br> </button>
    </div>
</form>
</body>
</html>
