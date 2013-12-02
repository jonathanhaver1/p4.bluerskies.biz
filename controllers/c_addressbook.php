<?php

class addressbook_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# Make sure user is logged in if they want to use anything in this controller
		if(!$this->user) {
			echo("Members only. <a href='/users/login'>Login</a>");

		}
	}

	public function add() {

		# Registered users only
		if (!$this->user) {
			Router::redirect('/users/login');
	}

	##Setup view
	$this->template->content = View::instance('v_addressbook_add');
	$this->template->title = "Add a new contact";

	#Render template
	echo $this->template;

	}

	public function p_add() {

		# Associate this friend with this user
		$_POST['user_id']  = $this->user->user_id;

		# Add a timestamp
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();

		# Insert
		# Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
		DB::instance(DB_NAME)->insert('addressbook', $_POST);

		# Quick and dirty feedback

			##Setup view
			$this->template->content = View::instance('v_addressbook_added_successfully');
			$this->template->title = "Success";
			echo $this->template;
	}

	public function index() {

		# Registered users only
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		# Set up the View
		$this->template->content = View::instance('v_addressbook_index');
		$this->template->title   = "Addressbook";

		# Build the query
   		# Query
    	$q = 'SELECT 
    			addressbook.addressbook_id,
            	addressbook.first_name,
            	addressbook.last_name,
            	addressbook.modified
        		FROM addressbook
        		WHERE addressbook.user_id = '.$this->user->user_id;

		# Run the query
		$addressbook = DB::instance(DB_NAME)->select_rows($q);

		# Pass data to the View
		$this->template->content->addressbook = $addressbook;

		# Render the View
		echo $this->template;
	}

}

?>