<!DOCTYPE html>
<html>
    <head>
    <script src="../shared/js/jquery-3.2.1.min.js"></script>
    <script src="../Shared/ckeditor/ckeditor.js"></script>
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
<tr><td><lable style="font-size: 20px;">Blog Title:</lable></td>
               <td><input type="text" class="form-control" placeholder="Enter Blog Title Here" name="btitle" required>
               </td></tr>
               </div>
               <div class="form-group">
                   <tr><td><label style="font-size: 20px;">Blog Description:</label></td>
                   <td><textarea name="editor1" class="form-control" required></textarea></td></tr>
                </div>
                <div class="form-group">
                   <tr><td></td><td><input style="font-size: 20px;" class="submit-form button background-primary border-radius text-white" type="submit" name="sub" value="Post"></td></tr>
                </div>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>





</table>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require '../shared/classblog.php';

    $blogtitle=$_POST["btitle"];
    $blogdesc=$_POST["editor1"];
    $timestamp = time();
    $date_time = date("d-m-Y (D) H:i:s", $timestamp);
    session_start();
    $uid=$_SESSION["pid"];
    



    $conn=new blog;
    $result=$conn->insert($blogtitle,$blogdesc,$uid,$date_time,"0");

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
     <script>
            CKEDITOR.replace( 'editor1' );
        </script>
	
</body>
</html>