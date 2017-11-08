<?php
session_start();

if (!isset($_SESSION['userSession1'])) {
	header("Location: admin_index.php");
} else if (isset($_SESSION['userSession1'])!="") {
	header("Location: admin_home.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession1']);
	header("Location: admin_index.php");
}
