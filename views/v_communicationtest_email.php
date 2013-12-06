
		<h2>Email Test</h2>

		<h3>Syntax Check<br>
			Domain Extraction<br>
			Reachability Test</h3>

		<span id = "description">This module checks the syntax of an email address, extracts the domain,<br>
			displays the domain on the line below the button,<br>
			and then looks up the domain in the mail server mx record<br>
			to make sure it is a valid email address which can be reached.</span><span><br><br>
		
		<form name="emailForm" method="post" action="#" id ="communicationtest_form"><br>

			Email Address<br>

			<input type="text" name="emailAddress" id="emailAddress" max-length='100'><br><br>
		  	<input type="button" name="Button" value="Check Address" onClick ="checkSyntax()"><br><br>

		</form>

		<span style ="color: navy; font:bold 16px Georgia, serif;">= DOMAIN =</span><br>
			<div id = "domainName">Please enter an email address<br>and click 'Check Address'</div><br>
		<span style ="color: navy; font:bold 16px Georgia, serif;">= IS THERE A DNS RECORD? =</span><br>
			<div id = "mxRecordExists">Please enter an email address<br>and click 'Check Address'</div><br>

		<p>
			The <u>DNS</u> record shows if the domain name can be resolved ('exists').<br><br>
			The mail exchange (<u>MX</u>) record within the DNS specifies the mail server<br>
			responsible for accepting (SMTP) email messages on behalf of a recipient's domain.<br>
			A domain may exist but still have a null MX record<br>
			if it is not intended to receive mail.<br><br>
			If you want to see the MX or DNS records click one of the following:<br><br>
		</p>	

		<form id = "communicationtest_form">

			Domain:<br>

			<input type ='text' id='emailDomain' name='emailDomain'><br><br>
			<input type = "radio" name="records" onclick="mx_record(emailDomain)" value="MX Record">MX Records<br>
			<input type = "radio" name="records" onclick="dns_record(emailDomain)" value="DNS Records">DNS Records<br><br>
			<input type = "radio" name="refreshPage" onclick= "location.reload()" value="clear page">clear page<br><br>

		</form>

		<span style ="color: navy; font:bold 16px Georgia, serif;">= RECORD =</span><br><br>

		<div id = "record"><br>
			<u>NO RECORDS TO DISPLAY</u><br>
			Please enter domain and select one of the options<br><br>
		</div>

		<h3>Send Test Email</h3>

		 	<form id = "communicationtest_form">
			    <label for = 'toAddress'>Email Address:</label><br>
				<input type ='text' id='toAddress' name='toAdress' max-length='100'><br><br>
				<textarea id = "message">Enter your test message
				</textarea><br><br>
				<button type = "button" name="Button" value="Send Email" onclick="testEmail(toAddress, message)">Send Email</button>
			</form>
