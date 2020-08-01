<?php
 session_start();

 ?>


<html>
<head>
  <title>Home page</title>
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
    <h2>Home page</h2>
    <h3>Welcome
         <?php echo $_SESSION['username'] ?>
    </h3>
    <?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">'; ?>
  </center>
<br>

  <form action="homepage.php" method="post" class="form-container">
    <div class="form-group">
      <input name="logout" type="submit" id="logout-btn" value="Logout"/>
    </div>
  </form>

  <?php
  if (isset($_POST['logout']))
  {
    session_destroy();

    header('location:form.php');
  }

   ?>


</section>

</body>
</html>
