		<h2>Send Text Message</h2>

		<span id = "description">
			You can send an email to someone else.<br>
			This site will appear as the sender while your name appears in the message.<br><br>
		</span>

		<div style = "margin-top: 150px"></span>

	 	<form name = "emailForm" id = "communicationtest_form" style = "position: absolute; left:345px; text-align: center">
		    Email Address
		    <input  name = "email" id = "email" type = "text" value="email"></input><br><br>
			<textarea id = "message">Enter your message here
			</textarea><br><br>
			<button type = "button" name="Button" value="Send Email" onclick="sendEmail/email/message">Send Email</button>
		</form>

		<!-- main menu on left side !-->
		<div id="includeSideMenu"></div>