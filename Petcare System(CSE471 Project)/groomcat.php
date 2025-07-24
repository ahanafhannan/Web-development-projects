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
    <link href="food/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="food/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="food/assets/css/custom-styles.css" rel="stylesheet" />
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
                        <a  href="dog.php"><i class="fa fa-home"></i>Food Details</a>
                    </li>
					</ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Select Service<small> </small>
                        </h1>
                    </div>
                </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>name</th>
                                            <th>Price</th>
                                            <th>Availabilty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										include ('db.php');
										$sql="select * from orderfood where pet='dog'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                            $id = $row['id'];
                                            if($id !="Null")
                                            {
                                                echo"<tr class='gradeC'>
												<td>".$row['id']."</td>
												<td>".$row['name']."</td>
												<td>".$row['price'],"$"."</td>
                                                <td>".$row['stock']."</td>
                                                <td><a href=dogorder.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i>Order</button></td>
												</tr>";
                                            }
                                            else
                                            {
                                                echo"<tr class='gradeC'>
												<td>".$row['id']."</td>
												<td>".$row['name']."</td>
												<td>".$row['price'],"$"."</td>
                                                <td>".$row['stock']."</td>
                                                <td><a href=dogorder.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i>Order</button></td>
												</tr>";
                                            }
										}
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
