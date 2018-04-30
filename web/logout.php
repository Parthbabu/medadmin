<?php
session_start();
{
    $_SESSION["id"]=null;
    $_SESSION["pid"]=null;
	session_unset();
	session_destroy();
	header("location:login.php");
  
}
?>
