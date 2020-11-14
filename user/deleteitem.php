<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM cart WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();
$img=$row['image'];



$del="DELETE FROM cart WHERE id='$id'";
$con->query($del);


header("location:cart.php");
?>