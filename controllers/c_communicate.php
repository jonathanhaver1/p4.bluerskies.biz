	public function email_invitation($friend_id = null) {

		# Build the query
   		# Query
    	$q = 'SELECT 
            	first_name,
            	last_name,
            	email
        		FROM friends
                WHERE friend_id = '.$friend_id;

		# Run the query
		$friend = DB::instance(DB_NAME)->select_row($q);

		# Build a multi-dimension array of recipients of this email
		$to[] = Array("name" => $friend['first_name']." ".$friend['last_name'], "email" => $friend['last_name']);

		# Build a single-dimension array of who this email is coming from
		# note it's using the constants we set in the configuration above)
		$from = Array("name" => APP_NAME, "email" => APP_EMAIL);

		# Subject
		$subject = "Invite";

		# You can set the body as just a string of text
		$body = 	"Hi ".$friend['first_name'].", I would like you to try out my new application BluerSkies at bluerskies.biz.\n
					There is some really fun stuff to do on it.\n
					All the very best,\n\n
					Jonathan";

		# OR, if your email is complex and involves HTML/CSS, you can build the body via a View just like we do in our controllers
		# $body = View::instance('e_users_welcome');

		# Build multi-dimension arrays of name / email pairs for cc / bcc if you want to 
		$cc  = "";
		$bcc = "";

		# With everything set, send the email
		$email = Email::send($to, $from, $subject, $body, true, $cc, $bcc);
	}