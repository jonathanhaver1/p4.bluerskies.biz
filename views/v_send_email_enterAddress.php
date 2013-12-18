		<h3>Send Email</h3>

		 	<form name = "emailForm" id = "communicationtest_form">
			    Email Address
			    <input  name = "email" id = "email" type = "text" value="email"></input><br>
				<textarea id = "message">Enter your test message
				</textarea><br><br>
				<button type = "button" name="Button" value="Send Email" onclick="sendEmail(emailForm['email'], emailForm['message'])">Send Email</button>
			</form>