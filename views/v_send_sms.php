		<h2>Send Text Message</h2>

		<span id = "description">
			You can send an SMS to a mobile phone number<br>
			with one of the following carriers
			if you have <u>activated</u> this service with your carrier<br><br>
		</span>

		<div style = "margin-top: 150px"></span>


		<form name="smsForm" method="post" style = "position: absolute; left:345px; text-align: center">

			Phone Number: <?=$mobilePhoneNumber?><br>

			Carrier: <?=$mobilePhoneCarrier?>

	   		Test Message<br>
	   		(max. length 120 characters)<br>
	   		<input type='text' name='message' id='message' max-length='120'><br><br>

			<button type="button" name="Button" onClick='sendTextMessage("<?=$mobilePhoneNumber?>","<?=$mobilePhoneCarrier?>",message)' Value="Send SMS" >Send SMS</button><br><br>

		</form>