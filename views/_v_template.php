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

		<!-- include communication channel tests -->
		<script src="/js/CommunicationTester.js"></script>

		<!-- include communication tools -->
		<script src="/js/Communicate.js"></script>

		<!-- include Skype status -->
		<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
	    
		<!-- include side menu -->
	    <script> 
	    	$(function(){
	      		$("#includeSideMenu").load("/libraries/menu_side.html"); 
	    	});
    	</script> 
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<span style="position: absolute; left: 660px"><?php if($user) echo 'Hi, '.$user->first_name; ?></span>

	<div id="banner_bluerskies">
		Communication Agenda
	</div>

		<div id='banner_photo'>
			<br>
			<img src="/css/bluerskies.jpg" alt="Bluer Skies" width="565" height="70"><br>
		</div>

	<div id ='menu'>

		<a href='/'>Home</a>
		<a href='/todo/index_todo'>To Do</a>
		<a href='/addressbook/index'>Addresses</a>
		<br><br><br><br><br><br><br><br><br>

		<!-- Menu for users who are logged in -->
		<?php if($user): ?>

			<span id = "login_status">You are <strong>LOGGED IN</strong></span>
			<a href='/users/logout' style = "color: #FFFFFF; background-color: #3333FF">Logout</a>


			<!-- Menu options for users who are not logged in -->
		<?php else: ?>
			<span id = "login_status">You are <strong>LOGGED OUT</strong></span>
			<a href='/users/signup' style = "color: #FFFFFF; background-color: #3333FF">Sign up</a>
			<a href='/users/login' style = "color: #FFFFFF; background-color: #3333FF">Log in</a>
		<?php endif; ?>
	</div>


	<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" style = "position: absolute; top: 60px; left: 600px">
		<div style = "border: 1px; color: blue; background-color: #CCCCFF; padding-left: 5px; padding-right: 5px; text-align: center">
			Search this site using Google<br>
			<input name="q" type="hidden">
			<input name="qfront" type="text" style="width: 180px"><br>
			<input type="submit" value="Search on Bluerskies">
		</div>
	</form>


	<?php if(isset($content)) echo $content; ?>

</body>
</html>