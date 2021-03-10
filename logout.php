<?php
	session_start();
	unset($_SESSION['username']);
	$redirect= $_SERVER['HTTP_REFERER'];
	header("Location:$redirect");
?>