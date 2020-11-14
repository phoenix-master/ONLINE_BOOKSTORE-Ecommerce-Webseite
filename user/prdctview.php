<?php
 
 session_start();

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>kitab.com/home-page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/productview.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>

<body>
  <div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.php">
    <img class="profile" src="logo/logo.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

     <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width:500px;height:42px;">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item">
     <a class="nav-link"><?php echo "".$_SESSION['username']; ?></a>
   </li>
   <li class="nav-item" style="margin-left:10px;font-weight: bold">
    <a class="nav-link" href="#">More</a>
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="../missingcart.php"><i style="font-size:35px;margin-left:20px;"class="fas fa-cart-plus"></i></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt" style="width:90%px;margin-left:3px;">Logout</button></a>
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
<section class="row" style="margin-top:25px;margin-left:15px;" >

  <!--php connection stat-->
<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];
$sel="SELECT * FROM addproducts WHERE id='$id'";
$sl=$con->query($sel);
while($row=$sl->fetch_assoc()){

?>
<!--product details-->

 <aside class="3">
    <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>

    <img src="../admin/pimages/<?php  echo $row['image'];?>" alt="Courts fool book cover page" style="width:300px;box-shadow:2px 2px 4px 4px #ff0066">
  </aside>
<aside class="6" style="margin-left: 50px;">
    <h2><span class="prdhd" style="font-size: 23px;"><?php echo $row['title'];?></span><span style="color:#ff3300;">Paperback</span></h2>
    <p>by <span style="color:#33ccff;font-size:20px;font-family:Simplified Chinese"><?php echo $row['author']; ?></span></p>
    <hr>

    <a href="#"><p>> see all formats edition</p></a>

    <p style="border:1px solid black;display:inline-block;padding:2px;margin-left:3px;box-shadow: 1px 1px 2px 2px #505e62">Paperback<br>₹ <?php echo $row['sprice']; ?></p><br>

    <p>Delivery By: Saturday,December 25 <a href="#">Details</a><span></span></p>

    <p><img class="logo" src="logo/replacement.png" alt="no contact delivery logo" style="width:60px; height:60px;border:2px solid #ffccff;border-radius:50%;box-shadow:1px 1px 2px 2px #ccccff"> <img class="logo"  src="logo/nocontact.png" alt="no contact delivery logo" style="width:60px; height:60px;border:2px solid #ffccff;border-radius:50%;box-shadow:1px 1px 2px 2px #ccccff">  <img class="logo"  src="logo/delivered.png" alt="no contact delivery logo" style="width:60px; height:60px;border:2px solid #ffccff;border-radius:50%;box-shadow:1px 1px 2px 2px #ccccff"></p>

    <p><a href="#"  class="log"  style="font-size:12px;">No-contact Delivery</a><a href="#"  class="log" style="font-size:12px;">10 Days Replacement Only</a><a href="#"  class="log" style="font-size:12px;">kitaab.com Delivered</a></p>

    <hr>



  </aside>
  <aside class="2" style="margin-left:10px;border:1px solid black;box-shadow:1px 1px 2px 2px  #adad85;padding:10px;">

    <form action="viewadcrtfetch.php" method="post" enctype="multipart/form-data">
       <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>
       <p><input type="hidden" value="../admin/pimages/<?php  echo $row['image'];?>" name="img" ></p>
       <p><input type="hidden" name="titl" value="<?php echo $row['title']?>"></p>
       <p><input type="hidden" name="price" value="<?php echo $row['sprice']?>"></p>
    <p style="margin-left:20px;">₹ <?php echo $row['sprice']; ?><br>
    M.R.P: <del>₹ <?php echo $row['dprice']; ?></del><br>
    You save: ₹ <?php echo $row['prices']; ?><br>
    Inclusive of all taxes<br>
  </p>
  <P style="margin-left:20px;">+ ₹ 40 Delivery Charge</P>
  <p> <span style="color:green;font-weight:bold;font-size:20px;margin-left:20px;">In Stock</span><br>
    <span style="margin-left:20px;">Sold by <a href="#">kitaab.com.</a></span>
  </p>

  <p><input type="submit" name="ad" class="form-control" style="text-align:center;background-color:rgba(255, 204, 0)" value="Add to cart"><br>
    <button class="form-control" style="text-align:center;background-color:rgba(255, 102, 0,0.8)">Buy Now</button></p>
  <p style="margin-left:20px;"><i class="material-icons">add_location</i>Deliver to Mr.gupta-Mumbai</p>
</form>
  </aside>

<!--next section-->
<section class="row">
  <article class="col-md-6" style="margin-left:320px;">

  <button id="sh">Read more</button>
    <div id="pp"><?php echo $row['description'];?></div>  
    
    
     

    



  </article>

  <?php } ?>
  
</section>

  <article class="col-md-12">
    <hr>
    <h4 style="color:#ff0000;">Save Extra with 4 offers</h4>
    <!--list of offers-->
    <ul>
      <li>Bank Offer (9): 10% Instant Discount up to Rs. 1500 on minimum order of Rs. 5,000 with Citi Credit Card, Debit Card and EMI transactions.</li>
      <li>10% Instant Discount up to Rs 1500 on minimum order of Rs. 5,000 with Kotak Bank Credit/Debit Cards and EMI transactions. </li>
      <li>10% Instant Discount up to Rs. 1500 on minimum order of Rs. 5,000 with ICICI Bank Credit Card and Credit Card EMI transactions.</li>
      <li>Cashback (2): 5% back with Amazon Pay ICICI Bank Credit card for Prime-members. 3% back for everybody else.</li>
    </ul>
    <hr>
  </article>
</section>

<!---start of a footer-->
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="margin-top: 50px;"> 

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
    <script>
      $(function(){
$("#pp").hide();

$("#sh").click(function(){
$("#pp").toggle();
});
});
    </script>
</body>
</html>