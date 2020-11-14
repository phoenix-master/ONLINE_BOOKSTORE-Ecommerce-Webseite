
<?php

session_start();
//redirection page link


$con=mysqli_connect("localhost","root","","kitaab");

if($con){
  echo "";
}
else{
	echo "connection failed";
}







 
$e=$_POST['email'];
$ps=$_POST['password'];

//check for duplicate data

$sel="SELECT * FROM admin WHERE email='$e' && password='$ps'";


$r=$con->query($sel);



if($r->num_rows> 0){
	while($row=$r->fetch_assoc()){
    $_SESSION['userid']=$row['id'];
	$_SESSION['username']=$row['name'];
    
	header('location:important.php');
}
}

else{ ?>
	<script>
		alert("Login Failed ! please enter the correct credentials");
		window.location="index.php";
	</script>
	<?php } ?>





