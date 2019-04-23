<?php
session_start();

if (!isset($_SESSION['is_login'])) {
	header('Location: http://localhost/zabran/form_login2.php');
	die;
}
?>