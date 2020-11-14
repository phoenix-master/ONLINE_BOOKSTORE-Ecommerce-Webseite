<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>kitab.com/home-page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
	<meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
	<meta name="description" content="Online book store,books at affordable price">
	<!--font awesome kit code-->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<!--external css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</script>
  <style>

  </style>
</head>

<body>
	<div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img class="profile" src="images/logo.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
        <div class="dropdown">
          <a href="#" data-toggle="dropdown">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:500px;height:42px;">
    <div class="dropdown-menu">
       <li class="dropdown-item">
                              <li class="dropdown-item"><a href="#">The Witch</a></li>
                              <li class="dropdown-item"><a href="#">Harry Potter</a></li>
                              <li class="dropdown-item"><a href="#">RevolutionTwenty 20</a></li>
                              <li class="dropdown-item"><a href="#">Whispers of Hate</a></li>
                              <li class="dropdown-item"><a href="#">A tale of Two cities</a></li>
                              <li class="dropdown-item"><a href="#">You are my reason to smile</a></li>
                             
                            </div>
                          </div>
    <button class="btn btn-success" type="submit">Search</button>

  </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item" style="margin-left: 20px;">
      <a class="nav-link"><?php echo "".$_SESSION['username']; ?></a>
   </li>
   <li class="nav-item" style="margin-left:10px;font-weight: bold">
   	<a class="nav-link" href="#">More</a>
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="cart.php"><i style="font-size:35px;margin-left:20px;"class="fas fa-cart-plus"></i></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt" style="width:100px;margin-left: 10px;">Logout</button></a>
   </li>
  </ul>
</nav>
<section class="row">
  <article class="col-md-12">

	      <nav class="navbar navbar-expand-sm bg-light navbar-light">

 
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#fantasy">Fantasy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#horror">Horror</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Novel</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Comics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Entrance Examination Guides</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Academics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Kids</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Holy Books</a>
    </li>
  </ul>
 
  
</nav>
</article>
<article class="col-md-12">
<!--carousel-->
<div id="sli" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#sli" data-slide-to="0" class="active"></li>
    <li data-target="#sli" data-slide-to="1"></li>
    <li data-target="#sli" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/blood.png" alt="blood and bones book banner" width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/fantasy.png" alt="the crimson curse book banner" width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/para.jpg" alt="lord of shadows book banner" width="100%" height="500px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#sli" data-slide="prev">
    </span>
  </a>
  <a class="carousel-control-next" href="#sli" data-slide="next">
   </span>
  </a>
</div>

  
<!--carousel ends-->
<!--second banner-->
<img src="images/banner2.jpg" alt="book banner" width="100%" height="400px">
<!--second banner ends-->
</article>
<article class="col-md-12">
 <h1 style="color:white;font-family:kalam;font-size:50px;margin-top:20px;text-align: center;">The world belongs to those "who reads"</h1>
</article>
</section>
<!--product addition start-->
<section class="row">
  <article class="col-md-12">
  <p  id="fantasy" style="font-size:40px;color:#00ffff;">Fantasy<span>|</span>
  </p>
</article>
</section>
<section class="row">
  <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              $sel="SELECT * FROM addproducts";
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
<figure class="col-md-2" style="margin:40px;">

  <div class="card" style="width:210px;">
   <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

    <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>

    <p><input type="hidden" value="../admin/pimages/<?php  echo $row['image'];?>" name="img" ></p>
    <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"  src="../admin/pimages/<?php  echo $row['image'];?>" alt="Card image" style="width:100%;height:260px"></a>
    <div class="card-body">
      <p><input type="hidden" name="titl" value="<?php echo $row['title']?>"></p>
      <h4 class="card-title"><?php echo $row['title']; ?></h4>

      <p><input type="hidden" name="price" value="<?php echo $row['sprice']?>"></p>
      <p class="card-text">₹ <?php echo $row['sprice']; ?></p>

      
      
      
        <p><input type="submit" name="sb" value="Add to cart" class="btn btn-danger"><a href="#"><button type="button" class="btn btn-info"><span style="font-size: 10px;">Buy Now</span></button></a></p>
       
       </form>
      
    </div>
  </div>
</figure>
<?php } ?>
</section>
<!--second section of adding product-->

<!---start of a footer-->
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark">

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
<!-- Footer -->


    </div>
</body>
</html>