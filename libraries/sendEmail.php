<?php

/*
* This function sends an email (over SMTP)
* and returns the destination address after
* it sent the message
*/

    $toAddress = $_POST['emailAddressSend'];
    $message = $_POST['messageSend'];
    $subject = $_POST['subject'];

	//send email
    mail($toAddress, $subject, $message);

  	echo $toAddress

?>