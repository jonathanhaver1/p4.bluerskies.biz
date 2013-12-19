<?php

class communicationtest_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}
	}

	public function email_test() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_communicationtest_email');
		$this->template->title = "Test Email";

		#Render template
		echo $this->template;
	}

	public function send_sms($addressbook_id = null) {

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


		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_communicationtest_sms');
		$this->template->title = "Send a Text Message";
		$this->template->content->mobilePhoneNumber = $mobilePhone['mobilePhoneNumber'];
		$this->template->content->mobilePhoneCarrier = $mobilePhone['mobilePhoneCarrier']

		#Render template
		echo $this->template;
	}

	public function records() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_communicationtest_records');
		$this->template->title = "DNS & MX Records";

		#Render template
		echo $this->template;
	}

}

?>