
<?php
$con=mysqli_connect("localhost","root","","kitaab");

if(isset($_POST['init'])){

   $id=$_POST['id'];
	$t=$_POST['title'];
  $ath=$_POST['author'];
  $g=$_POST['type'];
	$d=$_POST['edittext'];
  $p=$_POST['cost'];
  $dp=$_POST['dcost'];
  $ps=$_POST['pscost'];
 

if($_FILES['imgup']['name']!=""){
    $i=$_FILES['imgup']['name'];
  $buf=$_FILES['imgup']['tmp_name'];
  move_uploaded_file($buf,"pimages/".$i);



  $updt="UPDATE addproducts SET title='$t',author='$ath',Category='$g',description='$d',image='$i',sprice='$p',dprice='$dp',prices='$ps' WHERE id='$id'";
}
else{

  $updt="UPDATE addproducts SET title='$t',author='$ath',Category='$g',description='$d',sprice='$p',dprice='$dp',prices='$ps' WHERE id='$id'";
}
$con->query($updt);

header("location:products.php");
}
?>
