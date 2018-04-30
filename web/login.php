<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

	</style>
</head>
<body bgcolor="white">
<?php
  
if(isset($_POST["tab"]))
{
	
	$uid=$_POST["id"];
	$pass=$_POST["pass"];
	
	require '../shared/classuser.php';
    $conn=new user_all;
    
$result=$conn->loginselect($uid,$pass);

if($result->num_rows===1)
{
	//echo "aaa";
	$row=$result->fetch_assoc();
	$id=$uid;
//$name=$row["usr_name"];
	$token=$row["usr_token"];
	$flag=1;
	$type="Admin";
	if($row["usr_verify"]==$flag)
	{
		$_SESSION["pid"]=$id;
		$_SESSION["pname"]=$row["usr_name"];
	if($row["usr_type"]==$type)
	{
		header('location:index.php');
	}
	else
	{
		echo '<div class="btn btn-dark btn-lg btn-block">You are not an Admin </div>';
		//header('location: ../visitors/index.php');
	}
}
}
}
	?>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           <div class="navbar-header">
               <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
                   <!-- <span class="sr-only">Toggle navigation</span>-->
                <!--    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand" href="index.php">MedSky</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
						
					
	        		</ul>
	      		</li>
			</ul>
            <div class="top-content">
	<div class="container">
		<div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
                <h1 align="center">Admin Login</h1><br/>
			</div>
		</div>
		<div class="row">
            <div class="col-sm-5">
            	<div class="form-box">
	                <div class="form-top">
	                	<div class="form-top-left">
	                        <h3>Login to our site</h3>
	                        <p>Enter username and password to log on:</p>
	            		</div>
	                <div class="form-top-right">
	            </div>
			</div>


<div class="form-bottom">
				<form role="form" enctype="multipart/form-data" action="#" method="post" class="login-form">
				    <div class="form-group">
						<label class="sr-only" for="form-username">Email id</label>
				        <input type="text" name="id" placeholder="Email id..." class="form-username form-control" id="form-username" required>
				    </div>
				    <div class="form-group">
				        <label class="sr-only" for="form-password">Password</label>
				        <input type="password" name="pass" placeholder="Password..."  class="form-password form-control" id="form-password" data-toggle="password" required>
					</div>
						<button type="submit"name="tab" class="success" color="#4CAF50">Log in!!</button> </br>  
				</form>
			</div>
		</div>
	</div>
</body>
</html>