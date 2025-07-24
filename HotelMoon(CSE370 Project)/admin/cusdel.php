<?php
include ('db.php');

			
			$Pnum =$_GET['eid'];		
			$newsql ="DELETE FROM `roombook` WHERE Pnum ='$Pnum' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Customer Deleted") </script>';	
				}
			header("Location: customer.php");	
?>