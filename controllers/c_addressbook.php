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

		# Make sure none of the fields was left blank
		$submitted = array('first_name', 'last_name', 'emailHome', 'emailWork', 'sip',
			'phoneNumberHome', 'phoneNumberWork', 'skype',
			'mobilePhoneNumber', 'mobilePhoneCarrier', 'physicalAddress',
			'interests', 'comments');
		# Loop through fields
		$empty_field = false;
		foreach($submitted as $field) {
  			if (empty($_POST[$field])) {
    		$empty_field = true;
  			}
		}

		# if a fied has been left blank -> alert user
		if ($empty_field) {
  			$this->template->content = View::instance('v_error_empty_fields');
			$this->template->title = "Empty Fields";
			echo $this->template;

		# if an email address does not validate -> alert user
		} else if
			(!(filter_var($_POST['emailHome'], FILTER_VALIDATE_EMAIL)
				&& filter_var($_POST['emailWork'], FILTER_VALIDATE_EMAIL)
				&& filter_var($_POST['sip'], FILTER_VALIDATE_EMAIL))) {
				$this->template->content = View::instance('v_error_incorrect_email');
				$this->template->title = "Incorrect Email Address";
				echo $this->template;

		# if those two tests have been passed insert the new contact into the database
		} else {

			# Associate this friend with this user
			$_POST['user_id']  = $this->user->user_id;

			# Add a timestamp
			$_POST['created']  = Time::now();
			$_POST['modified'] = Time::now();

			# Insert (sanitizes automatically)
			DB::instance(DB_NAME)->insert('addressbook', $_POST);

				##Setup view
				$this->template->content = View::instance('v_addressbook_added_successfully');
				$this->template->title = "Success";
				echo $this->template;
		}
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
            	addressbook.last_name
        		FROM addressbook
        		WHERE addressbook.user_id = '.$this->user->user_id;

		# Run the query
		$addressbook = DB::instance(DB_NAME)->select_rows($q);

		# if the addressbook is empty -> notify user
		if (empty($addressbook)) {
			$messageEmpty = "You need to add contacts to add TO DOs<br>Just click on '<u>New Entry</u>' in the main menu";
		} else {
			$messageEmpty = " ";
		}

		# Pass data to the View
		$this->template->content->addressbook = $addressbook;
		$this->template->content->messageEmpty = $messageEmpty;

		# Render the View
		echo $this->template;
	}

		public function entry($addressbook_id = null) {

			if (isset($addressbook_id)) {

			# Set up the View
			$this->template->content = View::instance('v_addressbook_entry');

			# Build the query
	   		# Query
	    	$q = 'SELECT 
	    			addressbook.addressbook_id,
	            	addressbook.first_name,
	            	addressbook.last_name,
	            	addressbook.sip,
	            	addressbook.emailHome,
	            	addressbook.emailWork,
	            	addressbook.phoneNumberWork,
	            	addressbook.phoneNumberHome,
	            	addressbook.skype,
	            	addressbook.mobilePhoneNumber,
	            	addressbook.physicalAddress,
	            	addressbook.modified
	        		FROM addressbook
	        		WHERE addressbook.addressbook_id = '.$addressbook_id;

			# Run the query
			$contact = DB::instance(DB_NAME)->select_row($q);

			# Pass data to the View
			$this->template->content->contact = $contact;
			$this->template->title   = $contact['first_name'].' '.$contact['last_name'];

			# Render the View
			echo $this->template;
		}
	}

}

?>