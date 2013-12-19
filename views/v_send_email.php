		<h2>Send Email</h2>

		<span id = "description">
			The email will be sent to the recipient you selected.<br>
			Your name will autmoatically be added to it
		</span>

		<div style = "margin-top: 150px"></span>

		 	<form id = "communicationtest_form" style = "position: absolute; left:345px; text-align: center">
			    Sending to email Address:<br>
			    <span style = 'color: blue'><?=$emailAddress?></span><br><br>
				<textarea id = "message" rows = '10' cols = '50'>Enter your test message --- <?=$name?>
				</textarea><br><br>
				<button type = "button" name="Button" value="Send Email" onclick="sendEmail(<?=$emailAddress?>, message, <?=$name?>)">Send Email</button>
			</form>

		<!-- main menu on left side !-->
		<div id="includeSideMenu"></div>