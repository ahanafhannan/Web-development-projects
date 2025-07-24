<?php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
    header("location:home.php");  
 }  
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Customer Login</title>
      <link rel="stylesheet" href="user/css/style.css">
</head>
<body>
 <div class="container">
      <div id="login">
        <form method="post">
          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text"  name="email" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> 
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> 
            <p><input href="admin/reservation.php" type="submit" name="sub"  value="Login"></p> 
            <a href="signup.php"> &nbsp &nbsp &nbsp Don't have an Account?  &nbsp &nbsp &nbsp Sign Up &nbsp &nbsp &nbsp</a>
          </fieldset>
        </form>
      </div>
</body>
</html>

<?php
   include('db.php');
   if (isset($_POST['sub'])) {
      $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      $sql = "SELECT id FROM user WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         
         $_SESSION['email'] = $myusername;
         
         header("location: home.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>