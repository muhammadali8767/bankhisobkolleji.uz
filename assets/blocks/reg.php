<?php
	if(!empty($_POST["reg"])) {
	$name = htmlspecialchars($_POST["user_name"]);
	$surname = htmlspecialchars($_POST["user_surname"]);
	$email = htmlspecialchars($_POST["user_email"]);
	$login = htmlspecialchars($_POST["login"]);
	$password_1 = htmlspecialchars($_POST["user_pass"]);
	$password_2 = htmlspecialchars($_POST["checkpass"]);
	$reg_time = date("H:i  d.m.Y");
	echo "ok";
	$res = checkUser($login, md5($password_1));
	if((count($res) > 0)) {
			echo "<p>Bunday foydalanuvchi oldin ro`yxatdan o`tgan!!!</p>";
			$success = false;
		}
	elseif(strlen($login) < 3) $success = false;
	elseif (strlen($password_1) < 3) $success = false;
	elseif($password_1 != $password_2) $success = false;
	else $success = addUser($name, $surname, $email, md5($password_1), $reg_time);
	if(!$success) $alert = "Ro`yxatdan o`tishda xatolik bor";
	else $alert = "Siz muafaqqiyatli ro`yxatdan o`tdingiz";
	include "alert.php";
	}
?>

<div id="comments">
	<div id="commentslist">
		<div id="comment_form">
			<form id="comments" action="" method="post" enctype="multipart/form-data">
				<div class="caption"><h2>Registratsiyadan o`tish </h2></div>
				<div class="fields">
					<div class="line">
						<label>Ism:</label>
						<div class="inputs"><input type="text" id="user_name" name="user_name" placeholder="Ism" required="required"></div>
					</div>
					<br/>
					<div class="line">
						<label>Familya:</label>
						<div class="inputs">
							<input type="text" id="surneame" name="user_surname" placeholder="Familiya" required="required">
						</div>
					</div>
					<br/>
					<div class="line">
						<label>Email:</label>
						<div class="inputs">
							<input type="email" id="email" name="user_email" placeholder="E-mail" required="required">
						</div>
					</div>
					<br/>
					<div class="line">
						<label>Login:</label>
						<div class="inputs">
							<input type="email" id="email" name="user_email" placeholder="E-mail" required="required">
						</div>
					</div>
					<br/>
					<div class="line">
						<label>Parol:</label>
						<div class="inputs">
							<input type="password" id="pass" name="user_pass" placeholder="Parol" required="required">
						</div>
					</div>
					<br/>
					<div class="line">
						<label>Parol:</label>
						<div class="inputs">
							<input type="password" id="pass" name="checkpass" placeholder="Parol" required="required">
						</div>
					</div>
							
				</div>

				<div style="margin: 10px 0 10px 80px; width: 340px;">
					<input class="hidden" type="checkbox" id="commentsrules" name="rules">
					<p>
						<input type="submit" name="reg" id="reg" class="button-ok" value="Ro`yxatdan o`tish"/>
					</p>			
				</div>	
			</form>							
		</div>
	</div>
</div>
