<h2>Send Text Message</h2>

<span id = "description">
	This service requires activation by the recipient<br>
	in order to have the message delivered by the recipient's mobile phone carrier.<br>
	(however, you can still send a message to the carrier successfully without activation)<br>
</span>

<div style = "margin-top: 150px"></div>


<form name="smsForm" method="post" style = "position: absolute; left:345px; text-align: center">

	Phone Number: <?=$mobilePhoneNumber?><br>

	Carrier: <?=$mobilePhoneCarrier?>

		Test Message<br>
		(max. length 120 characters)<br>
		<input type='text' name='message' id='message' max-length='120'><br><br>

	<button type="button" name="Button" onClick='sendTextMessage("<?=$mobilePhoneNumber?>","<?=$mobilePhoneCarrier?>",message)' Value="Send SMS" >Send SMS</button><br><br>

</form>