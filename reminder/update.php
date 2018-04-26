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
$sql="select * from reminder_tbl where pk_rem_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_rtitle=$row["rem_title"];
    $_rdesc=$row["rem_desc"];
    $_sdate=$row["start_date"];
    $_edate=$row["end_date"];
    $_rid=$row["pk_rem_id"];
?>
<form action="updates.php" method="post" class="container">
    <div class="row">
    <table class="table">
        <div class="form-group col-ld-10">
            <tr><td>Enter ID :<td><input type="text" value="<?php echo $_rid; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required  ></tr><br>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
       <tr><td>Enter Title :     <td><input type="text" value="<?php echo $_rtitle ?>" name="txttitle" class="form-control" id="text" placeholder="Enter Questions" required >
       </tr><br> </div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
          <tr><td>Enter Description:<td>  <input type="text" value="<?php echo $_rdesc ?>" name="txtdesc" class="form-control" id="text" placeholder="Enter Answers" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter StartDate:<td><input type="date" value="<?php echo $_sdate ?>" name="txtsdate" class="form-control" id="text" placeholder="Enter Dates" required >
        </tr><br></div>
    </div>
    
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter EndDate:<td><input type="date" value="<?php echo $_edate ?>" name="txtedate" class="form-control" id="text" placeholder="Enter Dates" required >
        </tr><br></div>
    </div>
    
    <div class="row">
        <tr><td><button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr></button>
    </div>
</form>
</body>
</html>
