<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Room Details</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a  href="../index.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
                    <li>
                        <a class="active-menu" href="customer.php"><i class="fa fa-qrcode"></i>Customers</a>
                    </li>
                    <li>
                        <a href="roomdetails.php"><i class="fa fa-dashboard"></i> Room</a>
                    </li>
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a class="active-menu" href="usersetting.php"><i class="fa fa-qrcode"></i>Admin Settings</a>
                    </li>
                    <li>
                        <a class="active-menu" href="message.php"><i class="fa fa-qrcode"></i>Messages</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Room Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
											<th>Room Type</th>
                                            <th>AC/Non AC</th>
                                            <th>Status</th>
											<th>Passport Number</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
										$sql="select * from room";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
								
												echo"<tr class='gradeC'>
												
													<td>".$row['roomno']."</td>
													<td>".$row['type']."</td>
													<td>".$row['bed']."</td>
													<td>".$row['place']."</td>
													<td>".$row['pnum']."</td>
													</tr>";
											
							
											
										}
										
										
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>