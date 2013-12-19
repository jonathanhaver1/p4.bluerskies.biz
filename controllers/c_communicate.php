<?php

class communicate_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}
	}

	public function send_email($emailAddress = null) {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		# Build signature
    	$q = 'SELECT 
    			users.user_id,
            	users.first_name,
            	users.last_name
        		FROM users
        		WHERE users.user_id = '.$this->user->user_id;

		# Run the query
		$name = DB::instance(DB_NAME)->select_row($q);

		##Setup view
		$this->template->content = View::instance('v_send_email');
		$this->template->title = "Send an Email";
		$this->template->content->emailAddress = $emailAddress;
		$this->template->content->name = $name['first_name'] . ' ' . $name['last_name'];

		#Render template
		echo $this->template;

	}

	public function p_send_email($addressbook_id = null) {

		// get email address from database

		Email(emailAddress, emailMessage);

	}

		public function send_email_enterAddress() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_send_email_enterAddress');
		$this->template->title = "Send an Email";

		#Render template
		echo $this->template;

	}

	public function send_sms($addressbook_id = null) {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_send_sms');
		$this->template->title = "Send a Text Message";
		$this->template->content->mobilePhoneNumber = $addressbook_id;

		#Render template
		echo $this->template;
	}

}