<?php
	require_once('../lib/db.php');
	require_once('../lib/user.php');
	require_once('../lib/MySqlDb.php');
	$Db = new MySqlDb(DB_HOST,DB_USER,DB_PASS,DB_NAME);      
	if (!isset($_COOKIE['user']))
	{	
		header("Location: ../login.php");
	}
	?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
		<title>Toshkent Bank Hisob Kolleji</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Toshkent shahar bank kolledji">
		<meta name="keywords" content="koledj">
		<meta name="author" content="Yuldashev M">
		<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/bootstrap/css/bootstrap.techie.css" rel="stylesheet">
		<link href="../assets/bootstrap/css/square.css" rel="stylesheet"> 
		<style type="text/css">
			body{
				font-family: sans-serif;
			}
			.div{

				background-image: url("../img/fon.jpg");
				background-attachment: fixed;

			}

				.footer{
				width: 25px;
				height: 25px;
			}
			#h{
				color:#fff;
				padding-top: 5px;
				font-size:15px;
				font-family: Latin Modern Sans Demi Cond;
				text-decoration: none;
			}
			.dd{
				background-color: #fff;
				padding: 10px;
			}
			#calendar2 {
				width: 100%;
				font: monospace;
				line-height: 1.2em;
				font-size: 15px;
				text-align: center;
			}
			#calendar2 thead tr:last-child {
				font-size: small;
				color: rgb(85, 85, 85);
			}
			#calendar2 thead tr:nth-child(1) td:nth-child(2) {
				color: rgb(50, 50, 50);
			}
			#calendar2 thead tr:nth-child(1) td:nth-child(1):hover, #calendar2 thead tr:nth-child(1) td:nth-child(3):hover {
				cursor: pointer;
			}
			#calendar2 tbody td {
				color: rgb(44, 86, 122);
			}
			#calendar2 tbody td:nth-child(n+6), #calendar2 .holiday {
				color: rgb(231, 140, 92);
			}
			#calendar2 tbody td.today {
				background: rgb(220, 0, 0);
				color: #fff;
			}
			.content{
				background-color: #fff;
				padding:15px;
				margin-bottom:20px;
			}

			#calendar2 {
				width: 100%;
				font: monospace;
				line-height: 1.2em;
				font-size: 15px;
				text-align: center;
			}
			#calendar2 thead tr:last-child {
				font-size: small;
				color: rgb(85, 85, 85);
			}
			#calendar2 thead tr:nth-child(1) td:nth-child(2) {
				color: rgb(50, 50, 50);
			}
			#calendar2 thead tr:nth-child(1) td:nth-child(1):hover, #calendar2 thead tr:nth-child(1) td:nth-child(3):hover {
				cursor: pointer;
			}
			#calendar2 tbody td {
			  	color: rgb(44, 86, 122);
			}
			#calendar2 tbody td:nth-child(n+6), #calendar2 .holiday {
			  	color: rgb(231, 140, 92);
			}
			#calendar2 tbody td.today {
			  	background: rgb(220, 0, 0);
			  	color: #fff;
			}
		</style>
	</head>
	
	<body class="div">
	<br>
	<div class="container">
		<?php
			$view = empty($_GET["view"])?  'content' : $_GET["view"];
			include("assets/blocks/menu.php");
			include("assets/blocks/sidebar.php");
			include("assets/views/$view.php");

		?>
      <div class="col-sm-12">
        <nav class="navbar navbar-inverse" style="background-color: #009688;" role="navigation">
          <div class="col-sm-4"><br>
            <div class="row">
              <div class="col-sm-12 col-lg-12" data-effect="slide-left">
                <blockquote>
                  <p align="center"><img src="../img/Bank.png" width="150"></p>
                  <p id="h" align="center">Bizning manzil: Toshkent viloyati, Zangiota tumani, Eshonguzar qo’rg’oni, U. Yusupov ko’chasi 1-uy</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-sm-4"><br>
            <div class="row">
              <div class="col-sm-12 col-lg-12" data-effect="slide-left">
                <blockquote>
                  <p style="text-align: center;"><img src="../img/gerb2.png" width="60"></p>
                  <p id="h" align="center">
                  TOSHKENT SHAHAR O’RTA MAXSUS KASB-HUNAR TALIMI BOSHQARMASI
                  TOSHKENT BANK HISOB-KREDIT KOLLEJI</p>
                </blockquote>
              </div>
            </div>   
          </div>
          <div class="col-sm-4" ><br>  
            <div class="row">
              <div class="col-sm-12 col-lg-12" data-effect="slide-left">
                <blockquote>
                  <br>
                  <p id="h"><span><img class="footer"  src="../img/tel.png">  Telefon:<a id="h" href=""> +998 (90) 946 6393 </a></span></p>
                  <p id="h"><span><img class="footer"  src="../img/telg.png">  Telegrm:<a id="h" href="">plfdslf;sld;</a></span></p>
                  <p id="h"><span><img class="footer"  src="../img/mail.png"> Email:<a  id="h" href=""> +998 (90) 946 6393 </a></span></p>
                </blockquote>
              </div>      
            </div>
          </div>       
        </nav>
	    <div align="center" style="color:; font-family: Latin Modern Sans Demi Cond; padding: 10px; text-align: center;" >
	      © Toshkent Bank hisob-kredit  kolleji 2017
	   	</div>
  	  </div>
	</div>
	<script src="../assets/bootstrap/js/jquery.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>  
	<script src="../assets/bootstrap/js/typeahead.min.js"></script>
	</body>
</html>