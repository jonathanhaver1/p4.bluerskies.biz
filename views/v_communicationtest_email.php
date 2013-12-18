
		<h2>Address Tester</h2>


		<span id = "description">This module checks the syntax of an email address, extracts the domain,
			displays the domain on the line below the button,
			and then looks up the domain in the mail server mx record
			to make sure it is a valid email address which can be reached.</span><span><br><br>
		
		<form name="emailForm" method="post" action="#" id ="form_communicationtest" style = "position: absolute; top: 350px"><br>

			Email Address<br>

			<input type="text" name="emailAddress" id="emailAddress" max-length='100'><br><br>
		  	<input type="button" name="Button" value="Check Address" onClick ="checkSyntax()"><br><br>

		</form>

		<div style = "margin-top: 300px">
			______________________________________________________________________________________________________</div><br>

		<span style ="color: navy; font:bold 16px Georgia, serif">= DOMAIN =</span><br>
			<div id = "domainName">Please enter an email address<br>and click 'Check Address'</div><br>
		<span style ="color: navy; font:bold 16px Georgia, serif;" >= IS THERE A DNS RECORD? =</span><br>
			<div id = "mxRecordExists">Please enter an email address<br>and click 'Check Address'</div>

			______________________________________________________________________________________________________<br><br>

		<span id = "communicationest">
			The <u>DNS</u> record shows if the domain name can be resolved ('exists').<br>
			The mail exchange (<u>MX</u>) record within the DNS specifies the mail server<br>
			responsible for accepting (SMTP) email messages on behalf of a recipient's domain.<br>
			A domain may exist but still have a null MX record if it is not intended to receive mail.<br><br>
			If you want to see the MX or DNS records click one of the following:<br><br>
		</span>	

		<form id = "form_communicationest">

			Domain:<br>

			<input type ='text' id='emailDomain' name='emailDomain'><br><br>
			<input type = "radio" name="records" onclick="mx_record(emailDomain)" value="MX Record">MX Records<br>
			<input type = "radio" name="records" onclick="dns_record(emailDomain)" value="DNS Records">DNS Records<br><br>
			<input type = "radio" name="refreshPage" onclick= "location.reload()" value="clear page">clear page<br><br>

		</form>

		<span style ="color: navy; font:bold 16px Georgia, serif;">This is the record I retrieved:</span><br><br>

		<div id = "record" ><br>
			<u>NO RECORDS TO DISPLAY</u><br>
			Please enter domain and select one of the options<br><br>
		</div>