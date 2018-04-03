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

<tr><td>User:<td><input type="email" class="form-control" name="txtusr" placeholder="Enter User Id" required></tr><br>
<tr><td>Reminder Title:<td><input type="text" class="form-control" name="txttitle" placeholder="Enter Title" required></tr><br>
<tr><td>Reminder Description:<td><input type="text" class="form-control" name="txtdesc" placeholder="Enter Description" ></tr><br>
<tr><td>StartDate:<td><input id="date" type="date" value="05-06-2018" class="form-control" name="txtsdate" placeholder="Enter Start Date" ></tr><br>
<tr><td>EndDate:<td><input id="date" type="date" value="05-06-2018" class="form-control" name="txtedate" placeholder="Enter End Date" ></tr><br>
<!--<tr><td>Specialist:<td><input type="text" class="form-control" name="txtspec" placeholder="Specialist"></tr><br>-->

</select>
</tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php

$_fkusr="";
$_rtitle="";
$_rdesc="";
$_sdate="";
$_edate="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    
    $_fkusr=$_POST["txtusr"];
    $_rtitle=$_POST["txttitle"];
    $_rdesc=$_POST["txtdesc"];
    $_sdate=$_POST["txtsdate"];
    $_edate=$_POST["txtedate"];
   
    require '../shared/classrem.php';
    $conn=new reminder;
    $result=$conn->insert($_fkusr,$_rtitle,$_rdesc,$_sdate,$_edate);

    if($result===true)
    {
         header('location:reminder_tbl.php');
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