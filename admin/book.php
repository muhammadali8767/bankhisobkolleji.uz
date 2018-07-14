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
			if ($key!='table'&$key!='image'&$key!='book'&$key!='path'&$key!='bookPath') 
			{
				$insertData[$key]=$value;
			}          
		}
		$table = $_POST['table'];

		if(isset($_FILES['image']))
		{ 
			if(isset($_FILES['book']))
			{ 
				$path = $_POST['path'];
				$bookPath = $_POST['bookPath'];
				$file = $_FILES['image'];
				list(,$type) = explode('/', $file['type']);
				$fileName = $path.time().'.'.$type;
				$insertData['image'] = $fileName;
				if (!move_uploaded_file($file['tmp_name'], $fileName))
				{
					$upload = false;
				}
				$book = $_FILES['image'];
				list(,$type) = explode('/', $file['type']);
				$bookName = $bookPath.time().'.'.$type;
				$insertData['book'] = $bookName;
				if (!move_uploaded_file($book['tmp_name'], $bookName))
				{
					$upload = false;
				}	        
			}else $upload = false;
	    }else $upload = false;

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