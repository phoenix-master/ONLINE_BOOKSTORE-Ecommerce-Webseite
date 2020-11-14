
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








$e=$_POST['uid'];
$ps=$_POST['pwd'];

//check for duplicate data
$sel="SELECT * FROM signup WHERE email ='$e' && password='$ps'";

$r=$con->query($sel);



if($r->num_rows> 0){
	while($row=$r->fetch_assoc()){
	$_SESSION['userid']=$row['id'];
	$_SESSION['username']=$row['name'];
    
	header('location:index.php');
}
}
else{ ?>
	<script>
		alert("Login Failed ! please enter the correct credentials");
		window.location="login.php";
	</script>
	<?php } ?>





