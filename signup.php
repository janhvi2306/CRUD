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
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $addr=$_POST['addr'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $gen=$_POST['gen'];

    $enc_pass=md5($pass);
    //echo $enc_pass;

    $query="insert into signup_det(name,email,password,address,city,zip,gender) values('$name','$email','$enc_pass','$addr','$city','$zip','$gen')";
    $result=mysqli_query($con,$query);
    if($result>=1)
    {
    
        echo '<script type="text/javascript">
        window.onload = function () 
        { alert("Record Inserted Successfully"); }
        </script>';

    }

  }
}
?>

<body>
<form action="signup.php" method="post">
  <center><h1><b>Sign Up</b></h1></center>
  <div class="container" style="width: 800px;height:520px;border: 5px solid red;padding: 30px;margin-top: 30px;margin-left: 300px;">

  <div class="row">

  <div class="form-group col-lg-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputName4" name="name" placeholder="Name" required>
    </div>

  </div>


    <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="password" required>
    </div>

     </div>

     <div class="row">
    <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="addr" placeholder="address" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city" placeholder="city" required>
    </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip" placeholder="zip" required>
    </div>
    
     </div>

     <div class="form-group col-md-6">

    <div class="form-check">
    <label class="form-check-label" for="flexRadioDefault1">Gender</label>
    </div>

    <div class="form-check" required>
    <input class="form-check-input" type="radio" name="gen" value="Male">Male&emsp;
    <input class="form-check-input" type="radio" name="gen" value="Female">Female&emsp;
    <input class="form-check-input" type="radio" name="gen" value="Other">Other
    </div>

     </div>

  <button type="submit" class="btn btn-success" style="margin-top: 80px;" name="submit">Sign up</button><br>
    <a href="signin.php">Already have an account?</a>

  </div>

  </form>
</body>
  </html>