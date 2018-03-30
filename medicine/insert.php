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

<tr><td>Medicine Name:<td><input type="text" class="form-control" name="txtmname" placeholder="Enater Medicine Name" required></tr><br>
<tr><td>Company  Name:<td><input type="text" class="form-control" name="txtcname" placeholder="Enater Company Name" required></tr><br>
<tr><td>Medicine Uses:<td><input type="text" class="form-control" name="txtuse" placeholder="Enter Your Uses" reqiuired></tr><br>
<tr><td>Medicine Type:<td><input type="text" class="form-control" name="txttype" placeholder="Enter Medicine Type" required></tr><br>

</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_mname="";
$_cname="";
$_muse="";
$_mtype="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_mname=$_POST["txtmname"];
    $_cname=$_POST["txtcname"];
    $_muse=$_POST["txtuse"];
    $_mtype=$_POST["txttype"];
   
    require '../shared/classmedi.php';
    $conn=new medicine_all;
    $result=$conn->insert($_mname,$_cname,$_muse,$_mtype);

    if($result===true)
    {
         header('location:medicine_tbl.php');
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