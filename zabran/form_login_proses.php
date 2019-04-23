<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];

	if ($username == "raihanzabran" && $password == "zabran123") 
	{
		echo "Login sukses";
		$_SESSION['is_login'] = true;
		header('Location: http://localhost/zabran/Home.php');
	}
	else
	{
		echo "Login gagal";
		header('Location: http://localhost/zabran/form_login2.php');
	}
?>