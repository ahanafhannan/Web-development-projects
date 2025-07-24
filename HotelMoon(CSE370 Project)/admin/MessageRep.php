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
    <title>Messages</title>
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
                <a class="navbar-brand" href="home.php"><?php echo "User Message"; ?> </a>
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
				</ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                        <div class="form-group">
							  <div class="form-group">
                                        <label>Full Name</label>
                                        <input name="fname" class="form-control" required>
                               </div>
							   <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" required>    
                               </div>
                               <div class="form-group">
                                        <label>The Message</label>
                                        <input name="pnum" class="form-control" required>    
                               </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Message Reply 
                        </div>
                        <div class="panel-body">
							<div class="form-group">
                                            <label>Message ID</label>
                                            <input name="mid" class="form-control">   
                            </div>
							<div class="form-group">
                                            <label>Reply</label>
                                            <input name="reply" class="form-control">    
                            </div>
                       </div>  
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
								$con=mysqli_connect("localhost","root","","hotel");
								$newUser="INSERT INTO messages (Email,MessageBox,Fname) VALUES ('$_POST[email]','$_POST[pnum]','$_POST[fname]')";
								if (mysqli_query($con,$newUser))
								{
									echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
								}
								else
								{
									echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
								}
							$msg="Your code is correct";
							}
						}
						?>
                    </div>
                </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>