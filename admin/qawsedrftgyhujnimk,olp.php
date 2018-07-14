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
			if ($key!='table'&$key!='picture'&$key!='book'&$key!='path'&$key!='bookPath') 
			{
				$insertData[$key]=$value;
			}          
		}
		$table = $_POST['table'];

		if(isset($_FILES['picture']))
		{ 
				$insertData['picture'] = $_FILES['picture']['name'];
				$path = $_POST['path'];
				if ($Db->find($table,'picture',$insertData['picture'])) {

						if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
						{
							echo "picture";
							$upload = false;
						} 
						
				}
				else { 
		       	    echo "Bu nomli <b>surat</b> oldin joylangan. iltimos nomini o'zgartirib qayta urinib ko'ring";$upload = false;
		            exit();
		        }
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