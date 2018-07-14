<?php
	require_once('lib/db.php');
	require_once('lib/MySqlDb.php');
	$Db = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	$upload = true;
	$error = "error";
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$insertData = $_POST;
		$insertData['file'] = $_FILES['file']['name'];
		$table = 'posts';
		
		if(isset($_FILES['file']))
		{ 
			if ($_FILES['file']['type']=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'||$_FILES['file']['type']=='application/pdf') 
			{
				$path = 'admin/post_files/';
				$file = $_FILES['file'];
				list(,$type) = explode('/', $file['type']);
				$fileName = $path.time().'.'.$type;
				$insertData['file'] = $fileName;
				
				if (!move_uploaded_file($file['tmp_name'], $fileName))
				{
					$upload = false;
					$error = "Fayl jo'natilmadi!";
				}
			}else
			{
				$upload = false;
				$error = "Fayl tipi Doc yoki Docx bo'lishi shart!";	
			}
		}
		if($upload)
		{ 	
			if ($Db->insert($table, $insertData)) 
			{
				header("Location: $_SERVER[HTTP_REFERER]");
			}			
		}
		else
		{
			echo '<script>alert("'.$error.'");</script>';
			echo '<a href="'.$_SERVER[HTTP_REFERER].'">Qaytish</a>';
		}


	}
?>

