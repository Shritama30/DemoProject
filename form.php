<?php
 session_start();
 require 'userinfo.php';

 ?>


<html>
<head>
  <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body style="background-color:F5F5F5">

    <?php include 'menu.php'; ?>

<section class="my-5" id="main-wrapper">

  <center>
    <h2>Login/Register</h2>
    <img src="images/man.png" class="avatar"/>
  </center>
<br>

  <form action="form.php" method="post" class="form-container">
    <div class="form-group">
      <label><b>Username</b></label><br>
      <input name="username" type="text" class="form-control" autocomplete="off" placeholder="Type your username" required/><br>
      <label><b>Password</b></label><br>
      <input name="password" type="password" class="form-control" autocomplete="off" placeholder="Type your password" required/><br>
      <input name="login" type="submit" id="login-btn" value="Login"/><br>
      <a href="register.php"><input type="button" id="register-btn" value="Register"/></a>
    </div>
  </form>

  <?php
   if(isset($_POST['login']))
   {
     $username=$_POST['username'];
     $password=$_POST['password'];

     $query="select * from logindata WHERE username='$username' AND password='$password'";

     $query_run = mysqli_query($con,$query);
     if(mysqli_num_rows($query_run)>0)
     {
       $row = mysqli_fetch_assoc($query_run);
       //valid
       $_SESSION['username']= $row['username'];
       $_SESSION['imglink']= $row['imglink'];

       header('location:homepage.php');
     }
     else
     {
       //invalid
       echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
     }
   }

   ?>



</section>




</body>
</html>
