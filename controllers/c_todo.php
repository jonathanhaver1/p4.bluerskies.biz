<?php

class posts_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}
	}

	public function add() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_todo_add');
		$this->template->title = "Write a To Contact";

		#Render template
		echo $this->template;
	}

	public function p_add() {

		# Associate this todo entry with this user
		$_POST['user_id']  = $this->user->user_id;

		# Unix timestamp of when this post was created / modified
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();

		# Insert into database
		DB::instance(DB_NAME)->insert('todo', $_POST);

		# Setup view
		$this->template->content = View::instance('v_todo_added_successfully');
		$this->template->title = "Success";
		echo $this->template;
	}

	public function index() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		# Set up the View
		$this->template->content = View::instance('v_todo_index');
		$this->template->title   = "TO DOs";

    	# Query the database for post information
    	$q = '	SELECT 
		            todo.todo_id,
		            todo.user_id,
		            todo.topic,
		            todo.created,
		            todo.priority,
		            addressbook.addressbook_id AS adress_id,
		            addressbook.first_name,
		            addressbook.last_name
		        FROM todo
		        INNER JOIN addressbook
		            ON todo.contact_id = addressbook.contact_id
		        WHERE todo.user_id = '.$this->user->user_id;

		$posts = DB::instance(DB_NAME)->select_rows($q);

		# Pass data to the View and render the View
		$this->template->content->posts = $todo;
		echo $this->template;
	}

	

		public function increasePriority ($todo_id = null) {

		# get current likes information from database
   		$q = 'SELECT 
            	prority
        		FROM todo
        		WHERE todo_id = '.$todo_id;
		$prority = DB::instance(DB_NAME)->select_field($q);

		# increment the value by 1
		$prority += 1;

		# update the database
		$data = Array("likes" => $likes);
		DB::instance(DB_NAME)->update("todo", $data, "WHERE todo_id = '".$todo_id."'");

		# Send them back
		Router::redirect("/todo/index");
	}

		public function decreasePriority ($todo_id = null) {

		# get current likes information from database
   		$q = 'SELECT 
            	prority
        		FROM todo
        		WHERE todo_id = '.$todo_id;
		$prority = DB::instance(DB_NAME)->select_field($q);

		# increment the value by 1
		$prority -= 1;

		# update the database
		$data = Array("likes" => $likes);
		DB::instance(DB_NAME)->update("todo", $data, "WHERE todo_id = '".$todo_id."'");

		# Send them back
		Router::redirect("/todo/index");
	}

}

?>