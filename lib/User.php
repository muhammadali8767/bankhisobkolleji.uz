<?php

class User{

	private $db;
	private $username;
	private $email;
	private $is_logged = false;
	private $msg = array();
	private $error = array();

	// Create a new user object

	public function __construct($db) {

		session_start();

		$this->db = $db;

		$this->update_messages();

		if (isset($_GET['logout'])) {

			$this->logout();

		} elseif (isset($_COOKIE['username']) || (!empty($_SESSION['username']) && $_SESSION['is_logged']))  {

			$this->is_logged = true;
			$this->username = $_SESSION['username'];
			$this->email = $_SESSION['email'];

			if (isset($_POST['update'])) {

				$this->update($this->username);

			} elseif (isset($_POST['register'])) {

				$this->register();

			}

		} elseif (isset($_POST['login'])) {

			$this->login();
		
		} elseif ($this->empty_db() && isset($_POST['register'])) {

			$this->register();

		} else if (!$this->db_exists()) $this->create_db();

		return $this;
	}

	// Check if the user is logged

	public function is_logged() { return $this->is_logged; }

	// Copy error & info messages from $_SESSION to the user object

	private function update_messages() {
		if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
			$this->msg = array_merge($this->msg, $_SESSION['msg']);
			$_SESSION['msg'] = '';
		}
		if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
			$this->error = array_merge($this->error, $_SESSION['error']);
			$_SESSION['error'] = '';
		}
	}

	// Login

	public function login() {

		if (!empty($_POST['username']) && !empty($_POST['password'])) {

			$this->username = $this->db->real_escape_string($_POST['username']);
			$this->password = md5($this->db->real_escape_string($_POST['password']));
			if ($row = $this->verify_password()) {

				session_regenerate_id(true);
				$_SESSION['id'] = session_id();
				$_SESSION['username'] = $this->username;
				$_SESSION['email'] = $row->email;
				$_SESSION['is_logged'] = true;
				$this->is_logged = true;
				// Set a cookie that expires in one week
				if (isset($_POST['remember']))
					setcookie('username', $this->username, time() + 604800);
				// To avoid resending the form on refreshing
				header('Location: ' . $_SERVER['REQUEST_URI']);
				exit();

			} else $this->error[] = 'Login yoki parol xato';

		} elseif (empty($_POST['username'])) {

			$this->error[] = 'Login kiritilmagan.';

		} elseif (empty($_POST['password'])) {

			$this->error[] = 'Parol kiritilmagan.';
		}

	}

	// Check if username and password match

	private function verify_password() {

		$query  = 'SELECT * FROM users '
				. 'WHERE login = "' . $this->username . '" '
				. 'AND password = "' . $this->password . '"';

		return ($this->db->query($query)->fetch_object());

	}

	// Logout function

	public function logout() {

		session_unset();
		session_destroy();
		$this->is_logged = false;
		setcookie('username', '', time()-3600);
		header('Location: index.php');
		exit();

	}

	// Print errors in screen

	public function display_errors() {
		foreach ($this->error as $error) {
			echo '<p class="error">' . $error . '</p>';
		}
	}

	// Check if the users db has been created

	public function db_exists() {
		return ($this->db->query('SELECT 1 FROM users'));
	}

	// Check if the users db has any users

	public function empty_db() {
		$query = 'SELECT * FROM users';
		$result = $this->db->query($query);
		return ($result->num_rows === 0);
	}

	// Create a new db to start with

	private function create_db() {

		$query 	= 'CREATE TABLE users ('
				. 'user VARCHAR(75) NOT NULL, '
				. 'password VARCHAR(75) NOT NULL, '
				. 'email VARCHAR(150) NULL, '
				. 'PRIMARY KEY (user) '
				. ') ENGINE=MyISAM COLLATE=utf8_general_ci';

		return ($this->db->query($query));

	}

	// Drop an existing db

	private function drop_db() {

		$query 	= 'DROP TABLE IF EXISTS users ';

	}

}

?>