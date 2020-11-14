<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>kitaab.com/myprofile</title>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <!---link to external css-->
   <link rel="stylesheet" href="../css/profile.css">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

 

<div class="container">
  <!--start of the navbar-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img class="profile" src="images/logo.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:600px;height:42px;">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </ul>
  
  
  
   
 
</nav>

 <!--fetch data from the database-->
  <article class="col-md-12">

  <!--start of the section-->
<section class="row">
  <article class="col-md-12"style="margin-top:20px;">
  <h3 style="font-family:kalam;">Welcome to your kitaab.com profile:</h3>
</article>
</section>
 <?php
  $con=mysqli_connect("localhost","root","","kitaab");
  $sel="SELECT * FROM signup";
  $rm=$con->query($sel);
  while($row=$rm->fetch_assoc()){
  ?>
<section class="row" style="box-shadow:2px 2px 4px 4px #66ff33;margin-bottom: 30px;">

<figure class="col-md-3">
<img src="profilepic/<?php echo $row['profile'];?>" style="width:200px;height:200px;border:2px solid black;border-radius:50%;float:left;box-shadow: 2px 2px 4px 4px #00ffff;margin-top:25px;"><br>
<p style="font-family:Comic Sans Ms;margin-left:40px; margin-top: 10px;">Profile picture</p>
</figure>
<!--name input-->
<article class="col-md-3">
  <p style="margin-top: 30px;font-family:Comic Sans Ms;font-size:35px;"><?php echo $row['name'] ?></p>
<!--phone no input-->
  <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;"><i class='fas fa-phone-square-alt' style='font-size:24px;box-shadow: 2px 2px 4px 4px #ff0066;'></i>&nbsp<?php echo $row['contact'] ?></p>
<!--email input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;"><i class='fas fa-envelope-square' style='font-size:24px; box-shadow: 2px 2px 4px 4px #ffff00;'></i>&nbsp<?php echo $row['email'] ?></p>
 <!--birthdate input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Date of birth:&nbsp<?php echo $row['dob'] ?></p>
 <!--gender input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Gender:&nbsp<?php echo $row['gender'] ?></p>
 <!--Address input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Address:&nbsp<?php echo $row['address'] ?></p>
 <!--pincode input--->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Pincode:&nbsp<?php echo $row['pincode'] ?></p>
</article>
</section>
  <?php
}
?><!--end of php fetch assoc -->
<!--start of the footer-->
 <footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="margin-top:150px;margin-bottom: 0;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left bg-dark navbar-dark" style="color:white;">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">kitaab.com</h6>
        <p>kitaab.com is an online bookstore company where people can buy a wide range of books ranging from Academics to fantasy books.The bookstore also has a range of comic book collection.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="font-size: 20px;font-family: Sitka;color:white;">
        <h6 class="text-uppercase mb-4 font-weight-bold" >Products</h6>
        <p>
          <a href="#">Comics</a>
        </p>
        <p>
          <a href="#">Fantasy</a>
        </p>
        <p>
          <a href="#">Horror</a>
        </p>
        <p>
          <a href="#">Kids</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" style="color:white;">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Offers</a>
        </p>
        <p>
          <a href="#!">Terms and conditions</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="color:white;">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i>Salt Lake City, India</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>kitaabcom@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 91 8975 5677 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 91 7534 5867 89</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left" style="color:white;">© 2020 Copyright:
          <a href="index.php">
            <strong>kitaab.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right mx-auto">
          <ul class="list-unstyled list-inline">

            <li class="list-inline-item" >
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
                <i class="fab fa-facebook-f" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ffff;"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
                <i class="fab fa-twitter" style="font-size:30px;box-shadow: 2px 2px 4px 4px #ffff00;"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
                <i class="fab fa-google-plus-g" style="font-size:30px;box-shadow: 2px 2px 4px 4px #ff0066;"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
                <i class="fab fa-linkedin-in" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ff99;"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
</div>
</body>
</html>