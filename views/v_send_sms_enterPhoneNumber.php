		<h2>Send Text Message</h2>

		<span id = "description">
			You can send an SMS to a mobile phone number<br>
			with one of the following carriers
			if you have <u>activated</u> this service with your carrier<br><br>
		</span>

		<div style = "margin-top: 150px"></span>

		<form name="smsForm" method="post" action="#" onSubmit="return sendTextMessage()" style = "position: absolute; left:345px; text-align: center">

			Phone Number <br>
			(max. 10 digits)<br>
	   		<input type='number' name='phoneNumber' id='phoneNumber' max='9999999999'><br><br>

	   		Test Message<br>
	   		(max. length 120 characters)<br>
	   		<input type='text' name='message' id='message' max-length='120'><br><br>

	   		Carrier<br>
	   		<select name="carrier" type= "text">
	   			<option value = "">PLEEASE SEECT
			   	<option value = "US-T">T-Mobile
				<option value = "US-Vi">Virgin Mobile
				<option value = "US-C">Cingular
				<option value = "US-S">Sprint
				<option value = "US-Ve">Verizon
				<option value = "US-N">Nextel
				<option value = "DE-V">Vodafone Germany
			</select><br><br>

			<input type="submit" name="Submit" Value="send test SMS"><br><br>

		</form>