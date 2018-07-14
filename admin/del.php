<?php
	require_once('../lib/db.php');
	require_once('../lib/MySqlDb.php');
	$del = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	$image = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	if(isset($_GET['id']))
	{
    	$c = $_GET['c'];
    	$image->where('id', $_GET['id']);
    	$d = $image->get($c,null,null,null,true);
    	
		if ($c!='posts')
		{
			$i = $_GET['path'].$d[0]['image'];
			if (is_readable($i)) {
				unlink($i);
			}
		}
		else
		{
			$f = $_GET['path'].$d[0]['file'];
			if (is_readable($f)) {
				unlink($f);
			}
		}
		if ($c=='books') {
			$b = $_GET['bookPath'].$d[0]['book'];
			if (is_readable($b)) {
				unlink($b);
			}
		}
		$del->where('id', $_GET['id']);
    	if($del->delete($c)){
    		$del->__destruct(); 
    		$image->__destruct(); 
    		header("Location: $_SERVER[HTTP_REFERER]");
		}else echo "<h1>O'chirish aalga oshmadi!</h1>";
	}
?>