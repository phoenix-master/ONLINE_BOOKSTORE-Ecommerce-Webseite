<?php
//session initialization
session_start();
unset($_SESSION['userid']);
//to destroy the session
session_destroy();
//location where the page will be redirected after destroying the session upon clicking the logout button
header("location:../index.php");
?>