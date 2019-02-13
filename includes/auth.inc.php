<?php
/*session_start();*/

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('Location: login.php');
}

/*if(!isset($_SESSION["username"])) {
   header("Location: login.php");
   exit();
}*/

?>
