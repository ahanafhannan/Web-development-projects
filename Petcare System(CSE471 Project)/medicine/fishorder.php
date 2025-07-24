<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PET CARE</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../home.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
                    <li>
                        <a  href="fish.php"><i class="fa fa-home"></i>Medicine Details</a>
                    </li>
					</ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Order Details <small></small>
                        </h1>
                    </div>
                </div>   
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
						        <div class="form-group">
                                        <label>First Name</label>
                                        <input name="fname" class="form-control" required>
                                </div>
							    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="lname" class="form-control" required>
                                </div>
							    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" required>    
                                </div>
                                <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" class="form-control" required>    
                                </div>
								<div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone" type ="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PAYMENT DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                            <label>Payment Method</label>
                                            <select name="pmeth" class="form-control" required >
												<option value selected ></option>
                                                <option value="Paypal">Bkash</option>
												<option value="EzCash">Cash On Delivery</option>
                                            </select>
                            </div>
                            <div class="form-group">
                                    <label>Quantity</label>
                                    <input name="quan" class="form-control" required>
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
                            $ID =$_GET['eid'];
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
								$con=mysqli_connect("localhost","root","","petcare");
								$newUser="INSERT INTO medorderdetails (fname,lname,email,address,pnum,pmethod,pid,quantity,pet) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[address]','$_POST[phone]','$_POST[pmeth]','$ID','$_POST[quan]','fish')";
								if (mysqli_query($con,$newUser))
								{
									echo "<script type='text/javascript'> alert('Your order has been sent')</script>";
								}
								else
								{
									echo "<script type='text/javascript'> alert('Error ordering the product')</script>";
								}
							$msg="Your code is correct";
							}
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
