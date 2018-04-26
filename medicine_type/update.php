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
$sql="select * from medicine_type where pk_med_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_type=$row["med_type"];
   
?>
<form action="updates.php" method="post" class="container">
<table class="table">
    <div class="row">
        <div class="form-group col-ld-10">
         <tr><td>Enter Id:<td>   <input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required >
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
