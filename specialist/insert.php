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

<!--<tr><td>Specialist Name:<td><input type="text" class="form-control" name="txtsname" placeholder="Enater Specialist Name"></tr><br>-->
<tr><td><h4><b>Specialist:</b></h4></td>
<!--<select name="txtsname">
<option name="1"  value="child specialist">chaild specialist</option>
<option name="2" value="dentist">dentist</option>
<option name="3" value="surgon">surgon</option>
<option name="5" value="cardiologist">cardiologist</option>
</select>-->
<td><input type="text" class="form-control" name="txtsname" placeholder="Enater Specialist Name">
</td>
</tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_sname="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_sname=$_POST["txtsname"];
   
    require '../shared/classspecialist.php';
    $conn=new specialist;
    $result=$conn->insert($_sname);

    if($result===true)
    {
         header('location:specialist_tbl.php');
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