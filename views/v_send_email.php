		<h3>Send Test Email</h3>

		 	<form id = "communicationtest_form">
			    <label for = 'toAddress'>Email Address:</label><br>
				<input type ='text' id='toAddress' name='toAdress' max-length='100'><br><br>
				<textarea id = "message">Enter your test message
				</textarea><br><br>
				<button type = "button" name="Button" value="Send Email" onclick="testEmail(toAddress, message)">Send Email</button>
			</form>