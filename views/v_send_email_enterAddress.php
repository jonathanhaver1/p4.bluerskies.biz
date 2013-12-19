		<h2>Send Text Message</h2>

		<span id = "description">
			You can send an email to someone else.<br>
			This site will appear as the sender while your name appears in the message.<br><br>
		</span>

		<div style = "margin-top: 150px"></span>

	 	<form name = "emailForm" id = "communicationtest_form" style = "position: absolute; left:345px; text-align: center">
	 	 <span style = "color: navy; font-size: small; font-type: bold">Do not leave any of the fields blank</span><br><br>
		    Email Address<br>
		    <input  name = "email" id = "email" type = "text" value="email address"></input><br><br>
			<textarea id = "message" rows = "5" cols = "45">Enter your message here
			</textarea><br><br>
			Signature<br>
		    <input  name = "signature" id = "signature" type = "text" value="your signature"></input><br><br>
			<button type = "button" name="Button" value="Send Email" onclick="sendEmail(email, message, signature)">Send Email</button>
		</form>

		<!-- main menu on left side !-->
		<div id="includeSideMenu"></div>