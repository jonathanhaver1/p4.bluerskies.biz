<?php

class communicate_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}
	}

	public function send_email($addressbook_id = null) {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_send_email');
		$this->template->title = "Send an Email";
		$this->template->content->addressbook_id = $addressbook_id;

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
		$this->template->content->addressbook_id = $addressbook_id;

		#Render template
		echo $this->template;
	}

	public function p_send_sms($addressbook_id = null) {

		// get mobile number from database
		// get carrier from database

		Email(emailAddress, emailMessage);

	}

}