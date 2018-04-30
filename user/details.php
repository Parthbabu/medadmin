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
<link href="../web/css/style.css" rel='stylesheet' type='text/css' />
<link href="../web/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../web/js/jquery.min.js"></script>
<script src="../shared/js/bootstrap.min.js" ></script>
</head>
<body  >

  
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>User Details</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table" >
      <thead>
        <tr>
            
          <th>Details</th>
		    <th>Data</th>
        </tr>
      </thead>
      <tbody>
      
<?php
$_id=$_GET["id"];
//require '../shared/classuser.php';
//$conn=new user_all;
//$result=$conn->selectbyid($_id);

$conn=mysqli_connect('sql12.freemysqlhosting.net','sql12235011','CWflEeDvDX','sql12235011');
$sql="select * from user_mst where pk_usr_email_id='". $_id ."'";
$result=$conn->query($sql);

  while($row=$result->fetch_assoc())
  {
         echo '<tr class="success">';
   
    echo '<tr>';
     echo '<td>Name  </td>';
     echo '<td>'. $row["usr_name"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Password  </td>';
     echo '<td>'. $row["usr_pass"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Email  </td>';
     echo '<td>'. $row["pk_usr_email_id"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Gender  </td>';
     echo '<td>'. $row["usr_gen"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Blood Group  </td>';
     echo '<td>'. $row["blood_grp"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Birth Date  </td>';
     echo '<td>'. $row["usr_bdate"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Mobile no  </td>';
     echo '<td>'. $row["usr_mno"] .'</td>';
     echo '</tr>';
  /*   echo '<tr>';
     echo '<td>Verification  </td>';
     echo '<td>'. $row["usr_verify"] .'</td>';
     echo '</tr>';
     echo '<tr>';

     echo '<td>Token  </td>';
     echo '<td>'. $row["usr_token"] .'</td>';
     echo '</tr>';*/
     echo '<tr>';
     echo '<td>Type </td>';
     echo '<td>'. $row["usr_type"] .'</td>';
     echo '</tr>';
   
 echo  '</tr>';
 echo '<tr>';
    echo    '<td><center><a href="update.php?id='.$row["pk_usr_email_id"].'"><input type="submit" value="update" class="btn btn-success" name="btnupdate"></center></a></td>';
        echo'</tr>';
  }
  $_SESSION['type']=$row['usr_type'];
  ?>
<link href="../web/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../web/js/metisMenu.min.js"></script>
<script src="../web/js/custom.js"></script>
</body>
</html>