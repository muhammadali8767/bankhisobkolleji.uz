<?php
    session_start();
    $login = false;
	if(!isset($_SESSION['login'])) $_SESSION['user_login'] = "";
	if(!isset($_SESSION['password'])) $_SESSION['user_password'] = "";

?>