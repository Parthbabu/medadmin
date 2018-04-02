<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <script src="../shared/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../shared/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../shared/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../shared/js/bootstrap.min.js" ></script>
</head>
<body  >

<!--<div class="page-header">
  <h1><center>Doctor Details</center></h1>
</div>-->
<div class="panel panel-success">
      <div class="panel-heading"  >User details</div>
     
    </div>
  </div>

<?php
$_id=$_GET["id"];
$conn=new mysqli("localhost","root","","medsky");
$sql="select * from user_mst where pk_usr_email_id='". $_id ."'";
$result=$conn->query($sql);

  while($row=$result->fetch_assoc())
  {
       echo '<div class="row">';
  echo '<div class="col-xs-3">';
    echo '<a href="#" class="thumbnail">';
      echo "<img src='". $row["usr_pro_pic"] ."'>";
   echo ' </a>';

 echo ' </div>';
 
 echo "       <b>  Name        :       </b>   ".$row["usr_name"]."<br><br>";

 
 echo "       <b>  Paaword        :       </b>   ".$row["usr_pass"]."<br><br>";
 echo "       <b>  Email        :       </b>   ".$row["pk_usr_email_id"]."<br><br>";
 
 echo "<b>  Gender         :       </b>    ".$row["usr_gen"]."<br><br>";
 echo "<b>  Blood group         :       </b>    ".$row["blood_grp"]."<br><br>";
 echo "<b>  Birth Date         :       </b>    ".$row["usr_bdate"]."<br><br>";
 
echo "<b>   Mobile Number  :       </b>    ".$row["usr_mno"]."<br><br>";
echo "<b>   Verification   :       </b>    ".$row["usr_verify"]."<br><br>";
echo "<b>   Token          :        </b>    ".$row["usr_token"]."<br><br>";
echo "<b>   Type          :        </b>    ".$row["usr_type"]."<br><br>";
 echo '<a href="update.php?id='.$row["pk_usr_email_id"].'"><input type="submit" value="update" class="btn btn-success" name="btnupdate"></a>';


  echo '</div>';
  }
  $_SESSION['type']=$row['usr_type'];
  ?>

</body>
</html>