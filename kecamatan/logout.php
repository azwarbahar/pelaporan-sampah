<?php
require 'koneksi.php';

if (isset($_GET['logout'])) {
	$for = $_GET['for'];
	unset($_SESSION[$for]);
	unset($_SESSION['get_id']);
	setcookie($for, FALSE, time()-1728000);
	setcookie('get_id', FALSE, time()-1728000);

	header("location: login.php");
}
?>