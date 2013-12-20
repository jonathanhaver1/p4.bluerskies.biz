<?php

/*
*	MAINTAIN A TO DO LIST
*/
class todo_controller extends base_controller {

	public function _construct() {
		parent::_construct();

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}
	}

	/*
	*	ADD A TO DO
	*/
	public function add($addressbook_id = null) {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		##Setup view
		$this->template->content = View::instance('v_todo_add');
		$this->template->title = "Write a To Contact";
		$this->template->content->addressbook_id = $addressbook_id;

		#Render template
		echo $this->template;
	}

	/*
	*	PROCESS THE ADDING OF A TO DO
	*/
	public function p_add($addressbook_id = null) {

		# Make sure none of the fields was left blank
		$submitted = array('topic','priority');
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

		# if all fields have been filled in
		} else {

			# Associate this todo entry with this user
			$_POST['user_id']  = $this->user->user_id;

			# Unix timestamp of when this post was created / modified
			$_POST['created']  = Time::now();
			$_POST['modified'] = Time::now();

			$_POST['addressbook_id'] = $addressbook_id;

			# Insert into database
			DB::instance(DB_NAME)->insert('todo', $_POST);

			# Setup view
			$this->template->content = View::instance('v_todo_added_successfully');
			$this->template->title = "Success";
			echo $this->template;
		}
	}

	/*
	*	CONVERT A TO DO INTO A DONE
	*/
	public function done($todo_id = null) {

		# update the database
		$data = Array("done" => "1");
		DB::instance(DB_NAME)->update("todo", $data, "WHERE todo_id = '".$todo_id."'");

		# Send them back
		Router::redirect("/todo/index_todo");
	}

	/*
	*	CONVERT A DONE INTO A TO DO
	*/
	public function not_done($todo_id = null) {

		# update the database
		$data = Array("done" => "0");
		DB::instance(DB_NAME)->update("todo", $data, "WHERE todo_id = '".$todo_id."'");

		# Send them back
		Router::redirect("/todo/index_done");
	}

	/*
	*	DISPLAY THE TO DO'S
	*/
	public function index_todo() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		# Set up the View
		$this->template->content = View::instance('v_todo_index_todo');
		$this->template->title   = "TO DOs";

    	# Query the database for to do's
    	$q = "	SELECT 
		            todo.todo_id,
		            todo.user_id,
		            todo.topic,
		            todo.created,
		            todo.priority,
		            todo.done,
		            addressbook.addressbook_id AS address_id,
		            addressbook.first_name,
		            addressbook.last_name,
		            addressbook.emailHome,
		            addressbook.emailWork,
		            addressbook.skype,
		            addressbook.phoneNumberWork,
		            addressbook.mobilePhoneNumber,
		            addressbook.phoneNumberHome
		        FROM todo
		        JOIN addressbook ON
		        	addressbook.addressbook_id = todo.addressbook_id
		        WHERE todo.done = '0'
		        AND todo.user_id = ".$this->user->user_id;

		$todos = DB::instance(DB_NAME)->select_rows($q);

		# if list is empty display a message
		if (empty($todos)) {
			$messageEmpty = "Your list is empty - add TO DOs via the main menu";
		} else {
			$messageEmpty = " ";
		}

		# Pass data to the View and render the View
		$this->template->content->todos = $todos;
		$this->template->content->messageEmpty = $messageEmpty;		
		echo $this->template;
	}

	/*
	*	DISPLAY THE DONE'S
	*/
	public function index_done() {

		# if not logged in -> redirect to the login page
		if (!$this->user) {
			Router::redirect('/users/login');
		}

		# Set up the View
		$this->template->content = View::instance('v_todo_index_done');
		$this->template->title   = "TO DOs";

    	# Query the database for post information
    	$q = "	SELECT 
		            todo.todo_id,
		            todo.user_id,
		            todo.topic,
		            todo.created,
		            todo.priority,
		            todo.done,
		            addressbook.addressbook_id AS adress_id,
		            addressbook.first_name,
		            addressbook.last_name
		        FROM todo
		        INNER JOIN addressbook
		            ON todo.addressbook_id = addressbook.addressbook_id
		        WHERE todo.done = '1'
		        AND todo.user_id = ".$this->user->user_id;

		$todos = DB::instance(DB_NAME)->select_rows($q);

		if (empty($todos)) {
			$messageEmpty = "Your list is empty - add TO DOs via the main menu";
		} else {
			$messageEmpty = " ";
		}

		# Pass data to the View and render the View
		$this->template->content->todos = $todos;
		$this->template->content->messageEmpty = $messageEmpty;
		echo $this->template;
	}

	/*
	*	INCREMENT THE PRIORITY OF A TO DO BY ONE
	*/
	public function priority_increase ($todo_id = null) {

		# get current priority information from database
   		$q = 'SELECT 
            	priority
        		FROM todo
        		WHERE todo_id = '.$todo_id;
		$priority = DB::instance(DB_NAME)->select_field($q);

		# increment the value by 1
		$priority += 1;

		# update the database
		$data = Array("priority" => $priority);
		DB::instance(DB_NAME)->update("todo", $data, "WHERE todo_id = '".$todo_id."'");

		# Send them back
		Router::redirect("/todo/index_todo");
	}

	/*
	*	DECREMENT THE PRIORITY OF A TO DO BY ONE
	*/
	public function priority_decrease ($todo_id = null) {

		# get current priority information from database
   		$q = 'SELECT 
            	priority
        		FROM todo
        		WHERE todo_id = '.$todo_id;
		$priority = DB::instance(DB_NAME)->select_field($q);

		# increment the value by 1
		$priority -= 1;

		# update the database
		$data = Array("priority" => $priority);
		DB::instance(DB_NAME)->update("todo", $data, "WHERE todo_id = '".$todo_id."'");

		# Send them back
		Router::redirect("/todo/index_todo");
	}

}

?>