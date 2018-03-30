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

<tr><td>Blog Questions:<td><input type="text" class="form-control" name="txtque" placeholder="Enater Questions" required></tr><br>
<tr><td>Blog Answer:<td><input type="text" class="form-control" name="txtans" placeholder="Enater Answers" required></tr><br>
<tr><td>Doctor Id:<td><input type="email" class="form-control" name="txtname" placeholder="Doctor Email id" required></tr><br>
<tr><td>Date:<td><input id="date" type="date" value="05-06-2018" class="form-control" name="txtdate" placeholder="Enter Date" required></tr><br>
<!--<tr><td>Specialist:<td><input type="text" class="form-control" name="txtspec" placeholder="Specialist"></tr><br>-->
<tr><td>Specialist:<td><select name="txtspec">
<option name="1"  value="1">chaild specialist</option>
<option name="2" value="2">dentist</option>
<option name="3" value="3">surgon</option>
<option name="5" value="5">cardiologist</option>
</select>
</tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_bque="";
$_bans="";
$_docname="";
$_bdate="";
$_spec="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_bque=$_POST["txtque"];
    $_bans=$_POST["txtans"];
    $_docname=$_POST["txtname"];
    $_bdate=$_POST["txtdate"];
    $_spec=$_POST["txtspec"];
   
    require '../shared/classblog.php';
    $conn=new blog;
    $result=$conn->insert($_bque,$_bans,$_docname,$_bdate,$_spec);

    if($result===true)
    {
         header('location:blog_tbl.php');
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