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
$sql="select * from prescription_mst where pk_pres_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_mid=$row["col_medids"];
$_mor=$row["pres_morning"];
$_noon=$row["pres_noon"];
$_night=$row["pres_night"];
$_ins=$row["pres_instr"];
    $_day=$row["pres_day"];
    $_date=$row["pres_date"];
    
?>
<form action="updates.php" method="post" class="container">
<table class="table">
    <div class="row">
        <div class="form-group col-ld-10">
          <tr><td>Enter Id:<td>  <input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required  >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Emter Medicine Id:<td><input type="text" value="<?php echo $_mid ?>" name="txtmid" class="form-control" id="text" placeholder="Enter Medicine Id" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
           <tr><td>Morning:<td> <input type="text" value="<?php echo $_mor ?>" name="txtmor" class="form-control" id="text" placeholder="Morning" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Noon:<td><input type="text" value="<?php echo $_noon ?>" name="txtnoon" class="form-control" id="text" placeholder="Noon" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
          <tr><td>Night:<td>  <input type="text" value="<?php echo $_night ?>" name="txtnight" class="form-control" id="text" placeholder="Night" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Instruction:<td><input type="text" value="<?php echo $_ins ?>" name="txtins" class="form-control" id="text" placeholder="Enter Instruction" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
          <tr><td>Days:<td>  <input type="text" value="<?php echo $_day ?>" name="txtday" class="form-control" id="text" placeholder="Enter Days" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Date:<td><input type="text" value="<?php echo $_date ?>" name="txtdate" class="form-control" id="text" placeholder="Enter Date" required >
        </tr><br></div>
    </div>
    
    
    <div class="row">
        <tr><td><button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr><br></button>
    </div>
</form>
</body>
</html>
