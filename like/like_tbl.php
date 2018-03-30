
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script tyspe="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->

<link href="../web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../web/css/style.css" rel='stylesheet' type='text/css' />
<link href="../web/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../web/js/jquery.min.js"></script>
<script src='../web/js/jquery.dataTables.min.js'></script>
<script src="../web/js/bootstrap.min.js"></script>
</head>
<body>
<script>
        $(function () {
            $('#dataTables').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>
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
                <a class="navbar-brand" href="../web/index.php">MedSky</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			<!--	<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>-->
			    <!-- <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/parth.jpg"></a>
	        		<ul class="dropdown-menu">-->
						<!--<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>-->
					<!--	<li class="m_2"><a href="../profile/profile.php"><i class="fa fa-user"></i> Profile</a></li>-->
						<!--<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>

						<li class="divider"></li>-->
						
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<!--<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>-->
                       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../web/index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Page</a>
                        </li>
                      <!--  <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../web/inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="../web/compose.html">Compose email</a>
                                </li>
                            </ul>                            <!-- /.nav-second-level -->
                           <!-- /.nav-second-level -->
                        <!--</li>-->
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								<li>
                                    <a href="#"><i class="fa fa-table nav_icon"></i>Doctor<span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">
                                <li>
								    <a href="../doctor/doctor_tbl.php">Personal Information</a>
									<a href="../specialist/specialist_tbl.php">Specialist</a>
									<a href="../degree/degree_tbl.php">Degree</a>
                                    <a href="../blog/blog_tbl.php">Blogs</a>
                                    
									
									</li>
									</ul>
									</li>
                                    <a href="../user/user_tbl.php">User</a>
									<li>
									<a href="#"><i class="fa fa-table nav_icon"></i>Medicine<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                <li>
                                    <a href="../medicine/medicine_tbl.php">Medicne Details</a>
									<a href="../medicine_type/medicine_type_tbl.php">Medicne Type</a>
									</li>
									</ul>
									</li>
                                    <a href="../prescription/prescription_tbl.php">Prescription</a><br>
                                    <a href="../reminder/reminder_tbl.php">Reminder</a><br>
                                    <a href="like_tbl.php">Like</a>

                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Likes</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table" id="dataTables">
      <thead>
        <tr>
            
          <th>ID<span class="glyphicon glyphicon-sort"></span></th>
          <th>Blog Title<span class="glyphicon glyphicon-sort"></span></th>
          <th>User<span class="glyphicon glyphicon-sort"></span></th>
          <th>Likes<span class="glyphicon glyphicon-sort"></span></th>
          
        </tr>
      </thead>
      <tbody>
      <?php
      
require '../shared/classlike.php';
$res=like::select_all1();
      
      while($row=$res->fetch_assoc())
{
    
       echo '<tr class="success">';
          
           echo '<td>'. $row["like_id"] .'</td>';
           
           echo '<td><a href="doctor.php?id='.$row["like_id"].'">'. $row["blog_title"] .'</a></td>';
           echo '<td>'. $row["usr_name"] .'</td>';
           echo '<td>'. $row["likes"] .'</td>';
          
           
       
           
       echo  '</tr>';
       
}
    
      ?>
      </tbody>
    </table>
    
   </div>
    </div><!-- /.table-responsive -->
  </div>
  </div>
<div class="copy_layout">
      <p>Copyright &copy; 2018 MedSky. All Rights Reserved | Design by Parth Shah</a> </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../web/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../web/js/metisMenu.min.js"></script>
<script src="../web/js/custom.js"></script>
</body>
</html>
