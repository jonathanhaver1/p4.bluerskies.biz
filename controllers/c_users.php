<?php

/**
* Add, maintain and dsiplay
* registered users and user information
**/
class users_controller extends base_controller {

	public function _construct() {
		parent::_construct;

		# Make sure user is logged in if they want to use anything in this controller
		if(!$this->user) {
			die("Members only. <a href='/users/login'>Login</a>");
		}
	}

	/*
	* Add a new user
	*/
	public function signup() {
		
		##Setup view
		$this->template->content = View::instance('v_users_signup');
		$this->template->title = "Sign Up";

		#Render template
		echo $this->template;
	}

	/*
	*	PROCESS THE SIGNUP OF A NEW USER
	*/
	public function p_signup() {

		# Make sure none of the fields was left blank
		$submitted = array('first_name', 'last_name', 'email', 'password');
		# Loop through fields
		$empty_field = false;
		foreach($submitted as $field) {
  			if (empty($_POST[$field])) {
    		$empty_field = true;
  			}
		}

		# if a fied has been left blank - alert user
		if ($empty_field) {
  			$this->template->content = View::instance('v_error_empty_fields');
			$this->template->title = "Empty Fields";
			echo $this->template;

		# if an email address does not validate -> alert user
		} else if
			(!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
				$this->template->content = View::instance('v_error_incorrect_email');
				$this->template->title = "Incorrect Email Address";
				echo $this->template;

		# if all fields have been filled in
		} else {

			# check if email already exists
			$q = "	SELECT email
					FROM users
					WHERE email = '".$_POST['email']."'";

			$email_exists = DB::instance(DB_NAME)->select_field($q);

			# Email already exists -> return to signup page
			if($email_exists) {

				Router::redirect("/users/signup");

			# Email does not already exist
			} else {

				# storing time of creation and modfication for the user
				$_POST['created'] = Time::now();
				$_POST['modified'] = Time::now();

				# Encrypt the password
				$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

				# Create an encrypted token via their email address and a random string
				$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

				#insert this user into the database
				$user_id = DB::instance(DB_NAME)->insert("users", $_POST);

				##Setup view
				$this->template->content = View::instance('v_users_successful_signup');
				$this->template->title = "Welcome!";

				#Render template
				echo $this->template;
			}
		}
	}

	/*
	*	PROVIDE USER LOGIN
	*/
	public function login($error = NULL) {

		#Set up view
		$this->template->content = View::instance('v_users_login');
		$this->template->content->error = $error;
		$this->template->title = "Login";

		# Render template
		echo $this->template;
	}

	/*
	*	PROCESS USER LOGIN
	*/
	public function p_login() {

		# Make sure none of the fields was left blank
		# Array of fields
		$submitted = array('email', 'password');

		# Loop through fields
		$empty_field = false;
		foreach($submitted as $field) {
  			if (empty($_POST[$field])) {
    		$empty_field = true;
  			}
		}

		# if a fied has been left blank - alert user
		if ($empty_field) {
			Router::redirect("/users/login");

		# if all fields have been filled in
		} else {
			# Sanitize the user entered data
			$_POST = DB::instance(DB_NAME)->sanitize($_POST);

			# Hash submitted password for comparison with db
			$_POST['password'] = sha1 (PASSWORD_SALT.$_POST['password']);

			# Search the db for this email and password
			# Retrieve the token if it is available
			$q = "	SELECT token
					FROM users
					WHERE email = '".$_POST['email']."'
					AND password = '".$_POST['password']."'";

			$token = DB::instance(DB_NAME)->select_field($q);

			# No matching token -> login failed -> return to login page
			if(!$token) {

				Router::redirect("/users/login/error");

			# Matching token -> login succeeded
			} else {
				
				# Store this token in a cookie
				setcookie("token", $token, strtotime('+2 weeks'), '/');

				# Send to the main page
				Router::redirect("/");
			}
		}
	}

	/*
	*	LOGOUT A USER
	*/
	public function logout() {

		# Generate and save a new token for the next login
		$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

		# Update the database
		$data = Array("token" => $new_token);
		DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

		# 'Delete' token
		setcookie("token", "", strtotime('-1 year'), '/');

		# send back to main index
		Router::redirect("/");
	}

}

?>