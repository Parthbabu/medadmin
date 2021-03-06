
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
                <a class="navbar-brand" href="../web/index.php">MedSky</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
						<li class="m_2"><a href="../web/logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
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
                        <!--</li>-->    <li>   <a href="#"><i class="fa fa-table nav_icon"></i>Tables</span></a><br>
                            
                                
								    <a href="doctor_tbl.php"><i class="fa fa-table nav_icon"></i>Doctor Information</a><br>
									<a href="../specialist/specialist_tbl.php"><i class="fa fa-table nav_icon"></i>Specialist</a><br>
									<a href="../degree/degree_tbl.php"><i class="fa fa-table nav_icon"></i>Degree</a><br>
									<a href="../blog/blog_tbl.php"><i class="fa fa-table nav_icon"></i>Blogs</a><br>
									
									
                                    <a href="../user/user_tbl.php"><i class="fa fa-table nav_icon"></i>User</a><br>
									
								
                                    <a href="../medicine/medicine_tbl.php"><i class="fa fa-table nav_icon"></i>Medicne Details</a><br>
									<a href="../medicine_type/medicine_type_tbl.php"><i class="fa fa-table nav_icon"></i>Medicne Type</a><br>
								    <a href="../prescription/prescription_tbl.php"><i class="fa fa-table nav_icon"></i>Prescription</a><br>
									<a href="../reminder/reminder_tbl.php"><i class="fa fa-table nav_icon"></i>Reminder</a><br>
									<a href="../like/like_tbl.php"><i class="fa fa-table nav_icon"></i>Like</a>

                                
                        
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
  	 <h3>Doctor</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table"id="dataTables">
      <thead>
        <tr>
          <th>Sr No<span class="glyphicon glyphicon-sort"></span></th>  
          <th>Email ID<span class="glyphicon glyphicon-sort"></span></th>
          <th>Pass<span class="glyphicon glyphicon-sort"></span></th>
          <th>Lic<span class="glyphicon glyphicon-sort"></span></th>
          <th>Name<span class="glyphicon glyphicon-sort"></span></th>
          <th>Spec<span class="glyphicon glyphicon-sort"></span></th>
         
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
require '../shared/classdoc.php';
$res=doctor_all::select_all1();
      
      while($row=$res->fetch_assoc())
{
    
       echo '<tr class="success">';
          
		   echo '<td>'. $row["doc_sr_no"] .'</td>';
           echo '<td>'. $row["pk_doc_email_id"] .'</td>';
           echo '<td>'. $row["doc_pass"] .'</td>';
           echo '<td>'. $row["doc_lic_no"] .'</td>';
           echo '<td>'. $row["doc_name"] .'</td>';
           echo '<td>'. $row["spec_name"] .'</td>';
         
           echo '<td> <a href="delete.php?id='.$row["doc_sr_no"].'"><span class="glyphicon glyphicon-trash"></span></a>
             <a href="update.php?id='.$row["pk_doc_email_id"].'"> | <span class="glyphicon glyphicon-pencil"></span></a>
             <a href="details.php?id='.  $row["doc_sr_no"] .'"> | <span  class="glyphicon glyphicon-plus-sign"></span> </td>';

           
       echo  '</tr>';
       
}

    
      ?>
      </tbody>
    </table>
    <center>
<button type="button"  class="btn btn-primary" ><a href="insert.php">Insert</a></button>
</center>
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
