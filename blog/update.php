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
$sql="select * from blog_tbl where blog_id=".$_id;
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_bque=$row["blog_title"];
    $_bans=$row["blog_desc"];
    $_bdate=$row["blog_date"];
    $_bid=$row["blog_id"];
?>
<form action="updates.php" method="post" class="container">
    <div class="row">
    <table class="table">
        <div class="form-group col-ld-10">
            <tr><td>Enter ID :<td><input type="text" value="<?php echo $_bid; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required  ></tr><br>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
       <tr><td>Enter Quetions :     <td><input type="text" value="<?php echo $_bque ?>" name="txtque" class="form-control" id="text" placeholder="Enter Questions" required >
       </tr><br> </div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
          <tr><td>Enter Answers:<td>  <input type="text" value="<?php echo $_bans ?>" name="txtans" class="form-control" id="text" placeholder="Enter Answers" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Date:<td><input type="text" value="<?php echo $_bdate ?>" name="txtdate" class="form-control" id="text" placeholder="Enter Dates" required >
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
