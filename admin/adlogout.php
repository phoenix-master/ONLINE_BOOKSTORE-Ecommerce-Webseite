<?php
//initialize the session
session_start();
//end the session
session_destroy();
//the page where it will be redirected after destroying the session or logout
header("location:index.php");
?>