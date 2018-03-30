<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <script src="../../jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<!-- jQuery library -->
<script src="../../jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../../js/bootstrap.min.js"></script>
</head>
<body  >

<!--<div class="page-header">
  <h1><center>Doctor Details</center></h1>
</div>-->
<div class="panel panel-success">
      <div class="panel-heading"  >Doctor details</div>
     
    </div>
  </div>

<?php
$_id=$_GET["id"];
$conn=new mysqli("localhost","root","","medsky");
$sql="select d.*,s.*,de.* from doctor_mst d,doc_specialist s,doc_degree de where pk_spec_id=fk_spec_id AND pk_deg_id=fk_deg_id AND doc_sr_no='". $_id ."'";
$result=$conn->query($sql);

  while($row=$result->fetch_assoc())
  {
       echo '<div class="row">';
  echo '<div class="col-xs-3">';
    echo '<a href="#" class="thumbnail">';
      echo "<img src='". $row["doc_pro_pic"] ."'>";
   echo ' </a>';

 echo ' </div>';
 
 echo "       <b>  Name        :       </b>   ".$row["doc_name"]."<br><br>";

 echo "       <b>  Email          :       </b>     ".$row["pk_doc_email_id"]."<br><br>";
 echo "       <b>  Paaword        :       </b>   ".$row["doc_pass"]."<br><br>";
 echo "<b>  License Number :       </b>    ".$row["doc_lic_no"]."<br><br>";
 echo "<b>  Specialist     :       </b>    ".$row["spec_name"]."<br><br>";
 echo "<b>  Designation    :       </b>    ".$row["deg_name"]."<br><br>";
 echo "<b>  Address        :       </b>    ".$row["doc_add"]."<br><br>";
 echo "<b>  Gender         :       </b>    ".$row["doc_gen"]."<br><br>";
echo "<b>   Mobile Number  :       </b>    ".$row["doc_mno"]."<br><br>";
echo "<b>   Verification   :       </b>    ".$row["doc_verify"]."<br><br>";
echo "<b>   Token          :        </b>    ".$row["doc_token"]."<br><br>";
 echo '<a href="update.php?id='.$row["pk_doc_email_id"].'"><input type="submit" value="update" class="btn btn-success" name="btnupdate"></a>';

 
  echo '</div>';
  }
  ?>

</body>
</html>