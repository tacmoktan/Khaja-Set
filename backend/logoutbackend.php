<?php
	session_start();

	//erasing session name instead of destroying it , to check condition
	unset($_SESSION['name']);
	unset($_SESSION['email']);

	if(isset($_SESSION['name'])){
		header('location:../User/index.php');
	}else{
		header('location:../index.php');
	}
?>