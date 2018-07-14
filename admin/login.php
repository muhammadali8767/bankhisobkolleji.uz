
<?php
include('lib/db.php');
include('lib/MySqlDb.php');
if(isset($_POST['submit']))
{
$login = $_POST['login'];
$Db->where('login', $login)
$password = $Db->get('users',1,NULL,'password');
    if($_POST['password'===md5($password]))
    {
      setcookie('user',$login,time()+60*60*24*30);
      header("Location: admin.php"); exit();
    }
    else
    {
      print "Login yoki parol xato!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  
  <title></title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Techie Bootstrap 3 skin">
  <meta name="keywords" content="bootstrap 3, skin, flat">
  <meta name="author" content="bootstraptaste">
  
  <!-- Bootstrap css -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.techie.css" rel="stylesheet">

  <style>

  
   body{

    background-image: url(img/11.jpg);
    background-attachment: fixed;
    
   }
   #dd{
    text-align: center;
    font-family: Times New Roman;
    color:#ee5555;
    text-align: center;
   }

   .ss{
    background: #ffffff;
    padding-left: 40px;

   }
  
  </style>
  
</head>

<body>
   <P></P>
  <div class="container">
  <div class="col-sm-4">
  
  </div >
      <div class="col-sm-4">
      <br>
      <br>
      <br>
      
            <form class="form-horizontal" method="post">
              <div class="ss">
              <div class="form-group">
                
                <div class="col-sm-10">
               
                <h3 id="dd">Admin</h3>

                  <input type="text" class="form-control" name="login" required placeholder="Login">
                </div>
              </div>
              <div class="form-group">
              
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" required placeholder="Password">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-7"></div>
                <div  class="col-sm-2">
                  <button  type="submit" class="btn btn-primary">Kirish</button>
                </div>
             
              </div>
              <br>

              </div>
            </form>          
  </div>
</div>

<!-- Main Scripts-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
    <!-- Bootstrap 3 has typeahead optionally -->
    <script src="js/typeahead.min.js"></script>
    

</body>
</html>