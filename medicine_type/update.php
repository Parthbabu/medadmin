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
$sql="select * from medicine_type where pk_med_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_type=$row["med_type"];
   
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "hi";
$_type=$_POST["txttype"];
   
$id=$_id;
echo $id;
    
require '../shared/classmed_type.php';
$conn=new med_type;
$result=$conn->update($id,$_type);
if($result==true)
{
    
    header('location:medicine_type_tbl.php');
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
         <tr><td>Enter Id:<td>   <input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required disabled >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Type:<td><input type="text" value="<?php echo $_type ?>" name="txttype" class="form-control" id="text" placeholder="Enter Medicine Type" required >
        </tr><br></div>
    </div>
    
    
    <div class="row">
      <tr><td>  <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr><br></button>
    </div>
</form>
</body>
</html>
