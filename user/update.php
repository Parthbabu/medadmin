<?php
session_start();
?>
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

<script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />



    </script>
</head>
<body>
<div class="jumbotron">
  <div class="container">
    <h1>Update Your Data</h1>
  </div>
</div>
<?php

$_id=$_GET["id"];

$_SESSION["id"]=$_id;

$conn=mysqli_connect('sql12.freemysqlhosting.net','sql12235011','CWflEeDvDX','sql12235011');
$sql="select * from user_mst where pk_usr_email_id='$_id'";
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$_name=$row["usr_name"];
    $_mob=$row["usr_mno"];
    $_pass=$row["usr_pass"];
    $_gen=$row["usr_gen"];
    $_pic=$row["usr_pro_pic"];
    $_bld=$row["blood_grp"];
    $_bdate=$row["usr_bdate"];
  
    $_type=$row["usr_type"];
    
?>
<form action="updates.php" method="post" class="container" enctype="multipart/form-data">
<table class="table">

    <div class="row">
        <div class="form-group col-ld-10">
         <tr><td>Enter Id:<td>   <input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required readonly  >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
           <tr><td>Enter name:<td> <input type="text" value="<?php echo $_name ?>" name="txtname" class="form-control" id="text" placeholder="Enter User Name" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
           <tr><td>Mobile No:<td> <input type="text" value="<?php echo $_mob ?>" name="txtmno" class="form-control" id="text" placeholder="Enter Mobile No" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Password:<td><input type="text" value="<?php echo $_pass ?>" name="txtpass" class="form-control" id="text" placeholder="Enter Passsword" required >
        </tr><br></div>
    </div>
    
    <div class="row">
    <tr><td>Gender:<td><input type="radio" name="txtgen" value="Male" checked required="required">&nbsp  Male &nbsp &nbsp &nbsp<input type="radio" name="txtgen" value="Female">&nbsp Female</tr><br>
       <!-- <div class="form-group col-ld-10">
            <tr><td>Gender:<td><input type="text" value="<?php echo $_gen ?>" name="txtgen" class="form-control" id="text" placeholder="Enter Profile Pic" required >
        </tr><br></div>-->
    </div>
       <!-- <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Profile Pic:<td><input type="text" value="<?php echo $_pic ?>" name="txtpic" class="form-control" id="text" placeholder="Enter profile pic">
        </tr><br></div>
    </div>
     -->
       <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Blood Group:</td>
                <td size="100"><select name="txtbld" value="<?php echo $_bld ?>">
                <option name="1"  value="<?php echo $_bld ?>"> <?php echo $_bld ?> </option>
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

        </tr><br></div>
    </div>
    
       <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Birth Date:<td><input type="text" id="datepicker"  value="<?php echo $_bdate ?>" name="txtbdate" class="form-control" id="text" placeholder="Enter Birthdate" required >
        </tr><br></div>
    </div>
    
    <div class="row">
        <div class="form-group col-ld-10">
         <tr><td>Type:<td>   <input type="text" value="<?php echo $_type ?>" name="txttype" class="form-control" id="text" placeholder="Enter User Type" required >
        </tr><br></div>
    </div>
    
    <div class="row">
        <tr><td><button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr><br></button>
    </div>
</form>
<script>
$(document).ready(function () {
    $('#datepicker').datepicker({
      uiLibrary: 'bootstrap'
    });
});
</script>

</body>
</html>
