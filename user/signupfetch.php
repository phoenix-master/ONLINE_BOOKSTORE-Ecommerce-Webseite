
<?php

session_start();
//redirection page link
header("location:login.php");

$con=mysqli_connect("localhost","root","","kitaab");

if($con){
  echo "";
}
else{
	echo "connection failed";
}





if(isset($_POST['signup'])){

$n=$_POST['myname'];
$e=$_POST['email'];
$ps=$_POST['pwd'];
$cps=$_POST['cpwd'];
$cn=$_POST['contactno'];
$dob=$_POST['birthdate'];
$g=$_POST['gender'];
$ad=$_POST['address'];
$pin=$_POST['pincode'];

$dp=$_FILES['picture']['name'];
$buf=$_FILES['picture']['tmp_name'];
move_uploaded_file($buf, "profilepic/".$dp);
//check for duplicate data
$sel="SELECT * FROM signup WHERE email ='$e'";

$r=$con->query($sel);



if($r->num_rows> 0){
	echo "email alredy exists";
}

else {
$ins="INSERT INTO signup SET name='$n',email='$e',password='$ps',confirmp='$cps',contact='$cn',dob='$dob',gender='$g',address='$ad',pincode='$pin',profile='$dp'";
$con->query($ins);
 



}
}


?>

