<?php 
	if (isset($_COOKIE['user']))
	{
		$login = $_COOKIE['user'];	
		setcookie('user',$login,time()-60*60*24*30);
		header("Location: index.php");
	}
?>
