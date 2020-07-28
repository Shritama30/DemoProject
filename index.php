<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great healthy baked bean risotto!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, for the amazing pancake!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Salmon platter!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Who Am I?</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/6.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">This is Shritama Saha</h2>
      <p class="py-3">Nice to meet with you all! I am a food blogger cum engineer searching and providing solutions for every food food challanges. Don't forget to follow me in my instagram handle @drooling_on_you for some daily updates.
      </p>
      <a href="about.php" class="btn btn-success">Check More</a>
    </div>
  </div>
</div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/13.jpg" alt="Card image">
          <div class="card-body">
           <h4 class="card-title">Sourcing</h4>
            <p class="card-text">Implementing diret B2C</p>
           <a href="#" class="btn btn-success">Show More</a>
          </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
           <img class="card-img-top" src="images/4.jpg" alt="Card image">
           <div class="card-body">
            <h4 class="card-title">Promotional</h4>
             <p class="card-text">Leaned towards personal touchup</p>
            <a href="#" class="btn btn-success">Show More</a>
           </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/5.jpg" alt="Card image">
            <div class="card-body">
             <h4 class="card-title">Collaborative</h4>
              <p class="card-text">Want to work with me?</p>
             <a href="#" class="btn btn-success">Show More</a>
            </div>
           </div>
         </div>
     </div>
   </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">My Foodwalk</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
        <img src="images/22.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <img src="images/15.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <img src="images/16.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <img src="images/14.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <img src="images/17.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <img src="images/14.jpg" class="img-fluid pb-4">
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments">
        </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit
      </button>

    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">www.tamafoodblog.com</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
