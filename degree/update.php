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

$conn=new mysqli('sql12.freemysqlhosting.net','sql12235011','CWflEeDvDX','sql12235011');
$sql="select * from doc_degree where pk_deg_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_dname=$row["deg_name"];
   
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_dname=$_POST["txtdname"];
   
$id=$_id;

 
require '../shared/classdegree.php';
$conn=new degree_all;
$result=$conn->update($id,$_dname);
if($result==true)
{
   
    header('location:degree_tbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>
<form action="#" method="post" class="container" enctype="multipart/form-data">
<table class="table">
    <div class="row">
        <div class="form-group col-ld-10">
       <tr><td> Enter Id:<td>     <input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required disabled >
        </tr><br></div>
    </div>
   <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Degree:<td><input type="text" value="<?php echo $_dname ?>" name="txtdname" class="form-control" id="text" placeholder="Enter Degree " required >
        </tr></div>
    </div>
    <!--<div class="row">
    <tr><td>Degree:<td><select name="txtdname">
    <option name="4"  value="<?php echo $_dname ?>"></option>
<option name="1"  value="Mbbs">Mbbs</option>
<option name="2" value="Md">Md</option>
<option name="3" value="DMD">DMD</option>
    </div>-->
    
    <div class="row">
        <tr><td><button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr><br></button>
    </div>
</form>
</body>
</html>
