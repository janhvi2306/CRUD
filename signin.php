<html>
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php

$con=mysqli_connect("localhost","root","","user");

if($con)
{
  if(isset($_POST['signin']))
  {
    $email=$_POST['email'];
    echo $password=md5($_POST['password']);

    $query="select * from signup_det where email='$email' and password='$password'";
    $result = mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    //echo $count;
    if ($count==1) {
      
      echo '<script type="text/javascript">
      window.onload = function () 
      { alert("Login Successfully"); }
      </script>';
      // if(md5($password)=='$enc_password')
      // {
       
      //      echo "Login successful!";
      //   } else {
      //       // Passwords don't match
      //       echo "Invalid password.";
      //   }

          // if($enc_password=='md5($password)')
          // {
          //    echo "verified";
          // }
          // else{
          //   echo "failed";
          // }

    } else {
      echo '<script type="text/javascript">
      window.onload = function () 
      { alert("User Not Found"); }
      </script>';
    }
  }
}
    
    ?>
  

<body>
<form action="signin.php" method="post">
  <center><h1><b>Sign In</b></h1></center>
  <div class="container" style="width: 400px;height:290px;border: 5px solid green;padding: 30px;margin-top: 40px;margin-left: 500px;">

    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="email" required>
      <br>

      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="password" required>
    </div>

  <button type="submit" class="btn btn-success" style="margin-top: 10px;" name="signin">Sign In</button><br>
    <a href="signup.php">New User?Create Account</a>

  </div>

  </form>

  
</body>
  </html>