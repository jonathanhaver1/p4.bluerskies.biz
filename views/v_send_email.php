		<h3>Send Test Email</h3>

		 	<form id = "communicationtest_form">
			    Email Address: <?=$addressbook_id?><br>
				<textarea id = "message">Enter your test message
				</textarea><br><br>
				<button type = "button" name="Button" value="Send Email" onclick="sendEmail(<?=$addressbook_id?>, message)">Send Email</button>
			</form>