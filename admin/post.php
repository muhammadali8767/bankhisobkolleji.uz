<?php
	require_once('../lib/db.php');
	require_once('../lib/MySqlDb.php');
	$Db = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	$upload = true;
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$p = $_POST;
		foreach ($p as $key => $value) 
		{
			if ($key!='table'&$key!='picture'&$key!='image'&$key!='book'&$key!='path'&$key!='bookPath') 
			{
				$insertData[$key]=$value;
			}          
		}
		$table = $_POST['table'];

		if(isset($_FILES['image']))
		{ 
			$path = $_POST['path'];
			$image = $_FILES['image'];
			list(,$type) = explode('/', $image['type']);
			$imageName = time().'.'.$type;
			$insertData['image'] = $imageName;
			if (!move_uploaded_file($image['tmp_name'], $path.$imageName))
			{
				$upload = false;
			}
		}
		if(isset($_FILES['book']))
		{ 
			$bookPath = $_POST['bookPath'];
			$book = $_FILES['book'];
			list(,$type) = explode('/', $book['type']);
			$bookName = time().'.'.$type;
			$insertData['book'] = $bookName;
			if (!move_uploaded_file($book['tmp_name'], $bookPath.$bookName))
			{
				$upload = false;
			}
		}
		if(isset($insertData["password"])) $insertData["password"] = md5($insertData["password"]);
		if($upload)
		{
			if ($Db->insert($table, $insertData)) 
			{
				header("Location: $_SERVER[HTTP_REFERER]");
			}			
		}
		else
		{
			echo "<script>alert('Fayl yuklashda xatolik yuz berdi');</script>";
			echo "<pre>";
			echo "insertData<br>";
			print_r($insertData);
			echo "post<br>";
			print_r($_POST);
			echo "files<br>";
			print_r($_FILES);
			echo "table<br>";
			echo $table;
		}


	}
?>