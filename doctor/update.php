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

$conn=mysqli_connect('sql12.freemysqlhosting.net','sql12235011','CWflEeDvDX','sql12235011');
$sql="select * from doctor_mst where pk_doc_email_id='$_id'";
//$sql="select d.*,s.*,de.* from doctor_mst d,doc_specialist s,doc_degree de where s.pk_spec_id=d.fk_spec_id AND de.pk_deg_id=d.fk_deg_id AND d.pk_doc_email_id='". $_id ."'";

$result=$conn->query($sql);
$row=$result->fetch_assoc();

$_name=$row["doc_name"];
 $_mob=$row["doc_mno"];
 $_pass=$row["doc_pass"];
 $_gen=$row["doc_gen"];
 //$_pic=$row["doc_pro_pic"];
$_lic=$row["doc_lic_no"];
//$_spe=$row["fk_spec_id"];
//$_deg=$row["fk_deg_id"];
$_add=$row["doc_add"];

?>
<form action="updates.php" method="post" class="container">
<table class="table">
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Id:<td><input type="text" value="<?php echo $_id; ?>" name="txtid" class="form-control" id="text" placeholder="Enter Id" required readonly>
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Password:<td><input type="text" value="<?php echo $_pass ?>" pattern=".{6,12}" title="6 to 12 characters"  name="txtpass" class="form-control" id="text" placeholder="Enter Your Password" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter License no:<td><input type="text" value="<?php echo $_lic ?>" name="txtlic" class="form-control" id="text" placeholder="Enter License Number"  >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Doctor Name:<td><input type="text" value="<?php echo $_name ?>" name="txtname" pattern="[A-Za-z]{1,15}" title="Doctor Name should only contain Letters ex.parth" class="form-control" id="text" placeholder="Enter Your Name" required >
        </tr><br></div>
      <!-- <div class="row">
      <div class="form-group col-ld-10">
            <tr><td>Specialist:<td><disable input type="text" value="<?php echo $_spe ?>" name="txtspe" class="form-control" id="text" placeholder="Specialist" required >
        </tr><br></div>
    </div>
<!--<tr><td>Specialist:<td><select name="txtspe">
<option  ><?php echo $_spe ?></option>
<option name="1" value="1">chaild specialsit</option>
<option name="2" value="2">dentist</option>
<option name="3" value="3">surgon</option>
<option name="5" value="5">cardiologist</option>
</select>
</tr><br>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Degree:<td><disable input type="text" value="<?php echo $_deg ?>" name="txtdeg" class="form-control" id="text" placeholder="Enter Degree Id" required >
        </tr><br></div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Profile pic<td><disable input type="text" value="<?php echo $_pic ?>" name="txtpic" class="form-control" id="text" placeholder="Enter Your pic" required >
        </tr><br></div>
    </div>-->
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>Enter Address:<td><input type="text" value="<?php echo $_add ?>" name="txtadd" class="form-control" id="text" placeholder="Enter Your Address" required >
        </tr><br></div>
    </div>
    <div class="row">
    <tr><td>Gender:<td><input type="radio" name="txtgen" value="Male" checked required="required">&nbsp  Male &nbsp &nbsp &nbsp<input type="radio" name="txtgen" value="Female">&nbsp Female</tr><br>
        <!--<div class="form-group col-ld-10">
         <tr><td>Gender:<td>   <input type="radio" value="<?php echo $_gen ?>" name="txtgen" class="form-control" id="text"  required > Male <input type="radio" value="<?php echo $_gen ?>" name="txtgen" class="form-control" id="text"  required > Female
        </tr><br></div>-->
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
            <tr><td>mobile No:<td><input type="text" value="<?php echo $_mob ?>" pattern="[7|8|9]{1}[0-9]{9}" title="Enter proper Mobile Number" name="txtmob" class="form-control" id="text" placeholder="Enter your Mobile number" required >
        </tr><br></div>
    </div>
    
    </div>
    
    
    <div class="row">
      <tr><td>  <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr><br></button>
    </div>
</form>
</body>
</html>
