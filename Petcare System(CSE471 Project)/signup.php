<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Customer Sign-up</title>
      <link rel="stylesheet" href="user/css/style.css">
</head>
<body>
</div>
 <div class="container">
      <div id="login">
        <form method="post">
          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text"  name="fname" value="Full Name" onBlur="if(this.value == '') this.value = 'Full Name'" onFocus="if(this.value == 'Full Name') this.value = ''" required></p> 
            <p><span class="fontawesome-user"></span><input type="text"  name="address" value="Address" onBlur="if(this.value == '') this.value = 'Address'" onFocus="if(this.value == 'Address') this.value = ''" required></p> 
            <p><span class="fontawesome-user"></span><input type="text"  name="email" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> 
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> 
            <p><input type="submit" name="sub"  value="Sign up"></p>
            <a href="index.php"> &nbsp &nbsp &nbsp Already have an Account?  &nbsp &nbsp &nbsp Login &nbsp &nbsp &nbsp</a>
          </fieldset>
        </form>
      </div>
      <?php
        if(isset($_POST['sub'])){
            $con=mysqli_connect("localhost","root","","petcare");
            $newUser="INSERT INTO user (email,pass,fname,address) VALUES ('$_POST[email]','$_POST[pass]','$_POST[fname]','$_POST[address]')";
            if (mysqli_query($con,$newUser))
            {
                echo "<script type='text/javascript'> alert('Your registration is completed')</script>";
            }
            else
            {
                echo "<script type='text/javascript'> alert('Error Registering user')</script>";
            }
        }
      ?>
</body>
</html>