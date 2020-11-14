<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM addproducts WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();
$img=$row['image'];

unlink("pimages/".$img);

$del="DELETE FROM addproducts WHERE id='$id'";
$con->query($del);


header("location:products.php");
?>