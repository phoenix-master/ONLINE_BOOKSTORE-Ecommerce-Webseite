
<?php
//start the session
session_start();
//connect to the dayabase
$con=mysqli_connect("localhost","root","","kitaab");

//check the connection of the databaase
 if (mysqli_connect_errno()){
 echo "Failed to connect to Phpmyadmin: " . mysqli_connect_error();
 die();
 }




if(isset($_POST['ad'])){

  $id=$_POST['ids'];
  $t=$_POST['titl'];
  $p=$_POST['price'];
  $i=$_POST['img'];
  
$ins="INSERT INTO cart SET title='$t',price='$p',id='$id',image='$i'";
$con->query($ins);

header("location:cart.php");
}

else{
  echo "data not inserted into the database";
}

?>


