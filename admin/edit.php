<?php
	require_once('../lib/db.php');
	require_once('../lib/MySqlDb.php');
	$Db = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
   /*$old = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$old->where('id',$_POST['id']);
   $oldImage = $old->get($_POST['table']);*/
	$upload = true;
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{  
      $table = $_POST['table'];
		$p = $_POST;
		foreach ($p as $key => $value) 
		{
			if ($key!='table'&$key!='image'&$key!='picture'&$key!='book'&$key!='path'&$key!='bookPath'&$key!='id') 
			{
				$insertData[$key]=$value;
			}          
		}
		
		if(isset($_FILES['image']))
      { 
         $image = $_POST['image'];
         if (is_readable($image)) {
            unlink($image);
         }
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
			$book = $_POST['book'];
			if (is_readable($book)) {
				unlink($book);
			}
			$path = $_POST['bookPath'];
			$book = $_FILES['book'];
			list(,$type) = explode('/', $book['type']);
			$bookName = time().'.'.$type;
			$insertData['book'] = $bookName;
			if (!move_uploaded_file($book['tmp_name'], $path.$bookName))
			{
				$upload = false;
			}
		}
		if(isset($insertData["password"])) $insertData["password"] = md5($insertData["password"]);
		if($upload)
		{ 	

         $Db->where('id',$_POST['id']);
			if ($Db->update($table, $insertData)) 
			{
            $Db->__destruct();
            //$old->__destruct();
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
			echo "<br>Old<br>";
			print_r($old);
			echo "<br>unlink<br>";
			echo($unlink);
		}


	}
?>