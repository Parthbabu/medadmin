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
  	 <h3>Doctor Details</h3>
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
$conn=new mysqli("localhost","root","","medsky");
$sql="select d.*,s.*,de.* from doctor_mst d,doc_specialist s,doc_degree de where pk_spec_id=fk_spec_id AND pk_deg_id=fk_deg_id AND doc_sr_no='". $_id ."'";
$result=$conn->query($sql);

  while($row=$result->fetch_assoc())
  {
    
  
         echo '<tr class="success">';
   
    echo '<tr>';
     echo '<td>Name  </td>';
     echo '<td>'. $row["doc_name"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Email  </td>';
     echo '<td>'. $row["pk_doc_email_id"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Password  </td>';
     echo '<td>'. $row["doc_pass"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>License No</td>';
     echo '<td>'. $row["doc_lic_no"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Specialist </td>';
     echo '<td>'. $row["spec_name"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Degree  </td>';
     echo '<td>'. $row["deg_name"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Address  </td>';
     echo '<td>'. $row["doc_add"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Gender  </td>';
     echo '<td>'. $row["doc_gen"] .'</td>';
     echo '</tr>';
     echo '<tr>';

     echo '<td>Mobile No  </td>';
     echo '<td>'. $row["doc_mno"] .'</td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Verification </td>';
     echo '<td>'. $row["doc_verify"] .'</td>';
     echo '</tr>';
   echo '<tr>';
     echo '<td>Token </td>';
     echo '<td>'. $row["doc_token"] .'</td>';
     echo '</tr>';
  echo  '</tr>';
 echo '<tr>';
    echo    '<td><center><a href="update.php?id='.$row["pk_doc_email_id"].'"><input type="submit" value="update" class="btn btn-success" name="btnupdate"></center></a></td>';
        echo'</tr>';
  }
  ?>
<link href="../web/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../web/js/metisMenu.min.js"></script>
<script src="../web/js/custom.js"></script>
</body>
</html>
  