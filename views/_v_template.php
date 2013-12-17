<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/generalStyle.css">

	<!-- include Google search capability -->
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	
			<!-- include jsquery for the side menu -->
		<script src="/js/jquery-1.10.2.min.js"></script>
		<script src="/js/CommunicationTester.js"></script>
		<script src="/js/Intelligence.js"></script>
		<script src="/js/Communicate.js"></script>
		<script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>
	    	<script> 
	    		$(function(){
	      			$("#includeSideMenu").load("/libraries/menu_side.html"); 
	    		});
    	</script> 
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<div id="banner_bluerskies">
		Communication Agenda
	</div>

		<div id='banner_photo'>
			<br>
			<img src="/css/bluerskies.jpg" alt="Bluer Skies" width="160" height="40"><br>
		</div>

	<div id ='menu'>

		<a href='/'>Home</a>
		<a href='/todo/index'>To Do</a>
		<a href='/addressbook/index'>Addresses</a>
		<br><br><br><br><br><br><br><br><br>

		<!-- Menu for users who are logged in -->
		<?php if($user): ?>

			<span id = "login_status">You are <strong>LOGGED IN</strong></span>
			<a href='/users/logout' style = "background-color: #0000FF">Logout</a>


			<!-- Menu options for users who are not logged in -->
		<?php else: ?>
			<span id = "login_status">You are <strong>LOGGED OUT</strong></span>
			<a href='/users/signup' style = "background-color: #0000FF">Sign up</a>
			<a href='/users/login' style = "background-color: #0000FF">Log in</a>
		<?php endif; ?>
	</div>



	<?php if(isset($content)) echo $content; ?>

</body>
</html>