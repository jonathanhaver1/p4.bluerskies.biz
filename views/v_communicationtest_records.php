		<h2>DNS & MX RECORDS</h2>

		<article><br><br><br><br><br>
			The <u>DNS</u> record shows if the domain name can be resolved ('exists').<br>
			The mail exchange (<u>MX</u>) record within the DNS specifies the mail server<br>
			responsible for accepting (SMTP) email messages on behalf of a recipient's domain.<br>
			A domain may exist but still have a null MX record if it is not intended to receive mail.<br><br>
			If you want to see the MX or DNS records click one of the following:<br><br>

			<form id = "form_communicationest">

				Domain:<br>

				<input type ='text' id='emailDomain' name='emailDomain'><br><br>
				<input type = "radio" name="records" onclick="mx_record(emailDomain)" value="MX Record">MX Records<br>
				<input type = "radio" name="records" onclick="dns_record(emailDomain)" value="DNS Records">DNS Records<br><br>
				<input type = "radio" name="refreshPage" onclick= "location.reload()" value="clear page">clear page<br><br>

			</form>

			<span style ="color: navy; font:bold 16px Georgia, serif;">This is the record I retrieved:</span><br><br>

			<div id = "record" style ="width:700px"><br>
				<u>NO RECORDS TO DISPLAY</u><br>
				Please enter domain and select one of the options<br><br>
			</div>
		</article>