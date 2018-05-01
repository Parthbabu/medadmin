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
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center>Insert Your Data</center></h1>

<!--<tr><td>Degree Name:<td><input type="text" class="form-control" name="txtdname" placeholder="Enater Degree"></tr><br>-->
<tr><td><b>Degree:</td>
<!--<option name="1"  value="Mbbs">Mbbs</option>
<option name="2" value="Md">Md</option>
<option name="3" value="DMD">DMD</option>

</select>-->
<td><input type="text" class="form-control" name="txtdname" placeholder="Enter Degree"></td>
</tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_dname="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_dname=$_POST["txtdname"];
   
    require '../shared/classdegree.php';
    $conn=new degree_all;
    $result=$conn->insert($_dname);

    if($result===true)
    {
         header('location:degree_tbl.php');
    }
    else
    {
        echo $sql;
        echo " Not Successfully Insert";
        header('location:../web/index.php');
    }

}
?>
</body>
</html>