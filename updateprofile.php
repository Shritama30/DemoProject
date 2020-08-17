<?php
  session_start();
  require 'userinfo.php';
 ?>


<html>
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

  <?php include 'previewimage.php'; ?>

</head>

<body style="background-color:F5F5F5">

    <?php include 'menu.php'; ?>

    <form action="updateprofile.php" method="post" class="form-container" enctype="multipart/form-data">
      <section class="my-3" id="main-wrapper">

      <center>
        <h2>Update yourself!</h2>
        <img id="uploadPreview" src="images/man.png" class="avatar"/><br>
        <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
      </center>
    <br>

        <div class="form-group">
          <label><b>Full name</b></label><br>
          <input name="fullname" type="text" class="form-control" autocomplete="off" placeholder="Type your fullname"/><br>


          <label><b>Username</b></label><br>
          <input name="username" type="text" class="form-control" autocomplete="off" placeholder="Type your username"/><br>
          <label><b>Password</b></label><br>
          <input name="password" type="password" class="form-control" autocomplete="off" placeholder="Your password"/><br>
          <label><b>Confirm Password</b></label><br>
          <input name="cpassword" type="password" class="form-control" autocomplete="off" placeholder="Confirm password"/><br>
          <input name="updated_btn" type="submit" id="signup-btn" value="Updated"/><br><br>
          <a href="form.php"><input type="button" id="back-btn" value="Back <<"/></a>
        </div>
        </section>
      </form>

      <?php

      if(isset($_POST['updated_btn']))
      {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $img_name = $_FILES['imglink']['name'];
        $img_size = $_FILES['imglink']['size'];
        $img_tmp = $_FILES['imglink']['tmp_name'];

        $directory = 'uploads/';
        $target_file = $directory.$img_name;

        if($password==$cpassword)
        {
          $query= "select * from logindata WHERE username='$username'";
          $query_run = mysqli_query($con,$query);

          if(mysqli_num_rows($query_run)>0)
          {
            //there is already an user with same Username
            echo '<script type="text/javascript"> alert("User already exists...Try another username") </script>';
          }
          else if(file_exists($target_file))
          {
            echo '<script type="text/javascript"> alert("Image file already exists...Try another image file") </script>';
          }
          else if($img_size>2097152)
          {
            echo '<script type="text/javascript"> alert("Image file is larger than 2 mb...Try another image file") </script>';
          }
          else
          {
            move_uploaded_file($img_tmp,$target_file);
            $query= "UPDATE 'logindata' SET ('','$username','$password','$fullname','$target_file')";
            $query_run = mysqli_query($con,$query);

            if($query_run)
            {
              echo '<script type="text/javascript"> alert("User updated, go to login page to login") </script>';
            }
            else
            {
              echo '<script type="text/javascript"> alert("error") </script>';
            }
          }


        }
           else
           {
             echo '<script type="text/javascript"> alert("Password and confirm password does not match.....Try again") </script>';
           }



      }

       ?>

</body>
</html>
