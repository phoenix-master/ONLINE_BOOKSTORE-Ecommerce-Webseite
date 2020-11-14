
<?php
$con=mysqli_connect("localhost","root","","kitaab");

if(isset($_POST['init'])){

	$t=$_POST['title'];
  $ath=$_POST['author'];
  $g=$_POST['type'];
	$d=$_POST['edittext'];
  $p=$_POST['cost'];
  $dp=$_POST['dcost'];
  $ps=$_POST['pscost'];
  
  


    $i=$_FILES['imgup']['name'];
  $buf=$_FILES['imgup']['tmp_name'];
  move_uploaded_file($buf,"pimages/".$i);

$ins="INSERT INTO addproducts SET title='$t',author='$ath',Category='$g',description='$d',image='$i',sprice='$p',dprice='$dp',prices='$ps'";
$con->query($ins);

header("location:products.php");
}
?>
