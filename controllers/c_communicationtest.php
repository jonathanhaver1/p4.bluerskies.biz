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

		public function sms_test() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_communicationtest_sms');
		$this->template->title = "Test SMS";

		#Render template
		echo $this->template;
	}

}

?>