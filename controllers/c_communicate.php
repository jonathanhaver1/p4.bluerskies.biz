<?php

/*
*	COMMUNICATION FEATURES
*/
class communicate_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}
	}

	/*
	*	SEND AN EMAIL
	*/
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


	/*
	*	SEND A TEXT MESSAGE
	*/
	public function send_sms($addressbook_id = null) {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		// get mobile number from database
		// get carrier from database
    	$q = 'SELECT 
    			addressbook.user_id,
            	addressbook.mobilePhoneNumber,
            	addressbook.mobilePhoneCarrier
        		FROM addressbook
        		WHERE addressbook.addressbook_id = '.$addressbook_id;

		# Run the query
		$mobilePhone = DB::instance(DB_NAME)->select_row($q);

		##Setup view
		$this->template->content = View::instance('v_send_sms');
		$this->template->title = "Send a Text Message";
		$this->template->content->mobilePhoneNumber = $mobilePhone['mobilePhoneNumber'];
		$this->template->content->mobilePhoneCarrier = $mobilePhone['mobilePhoneCarrier'];

		#Render template
		echo $this->template;
	}

}