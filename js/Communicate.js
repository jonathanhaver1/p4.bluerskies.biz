//------------------------------------------------------------------------------------
//--------------------------- SEND EMAIL ---------------------------------------------

// convert to string value

function Email(emailAddress, emailMessage, signature) {

  if (emailAddress == null | emailMessage == null | signature == null) {
    alert ("You did not fill in all the fields.\n\nPlease try again")
  } else {

    var emailMessageString = emailMessage.value + " --- " + signature

    sendEmail(emailAddress, emailMessageString, signature) 
  }
}

// email sender

function sendEmail(emailAddressString, emailMessageString, signature) {

    var subjectString = "message from " + signature

  if (checkCharactersEmailAddress (emailAddressString)) {
    var alertText = "Sending the email to :" + emailAddressString
                            + "\nsubject: " + subjectString
                            + "\nmessage: " + emailMessageString
    alert(alertText)

    $.ajax({
    type: "POST",
      url: "/libraries/sendEmail.php",
      data: {emailAddressSend: emailAddressString, subject: subjectString, messageSend: emailMessageString},
      cache: false,
      success: function(toAddress){
      alert ("Email to " + toAddress.toString() + " has been sent successfully")
      }
    });
  } else {
    alert ("This email address is not valid\nPlease enter it again\n\n" + emailAddressString)
  }
}


//------------------------------------------------------------------------------------
//------------------------- SEND SMS -------------------------------------------------


function sendTextMessage(phoneNumber, carrier, message) {

  if (phoneNumber == null | message.value == null | carrier == null) {
    alert ("You did not fill in all the fields.\n\nPlease try again")
  } else {

    message = message.value.toString()
    carrier = carrier.toString()
    phoneNumber = phoneNumber.toString()

    var emailAddress

    switch (carrier)
    {
    case 'US-T':
    	// T-Mobile
    	emailAddress = String(phoneNumber) + "@tmomail.net"
      alert("Sending message over T-Mobile")
      sendEmail (emailAddress, message, "SMS client")
      break;
    case 'US-Vi':
    	// Virgin Mobile
    	emailAddress = String(phoneNumber) + "@vmobl.com"
      alert("Sending message over Virgin Mobile")
      sendEmail (emailAddress, message, "SMS client")
      break;
    case 'US-C':
     	// Cingular
     	emailAddress = String(phoneNumber) + "@tcingularme.com"
      alert("Sending message over Cingular")
      sendEmail (emailAddress, message, "SMS client")
      break;
    case 'US-S':
     	// Sprint
     	emailAddress = String(phoneNumber) + "@messaging.sprintpcs.com"
      alert("Sending message over Sprint")
      sendEmail (emailAddress, message, "SMS client")
    	break;
    case 'US-Ve':
     	// Verizon
     	emailAddress = String(phoneNumber) + "@vtext.com"
      alert("Sending message over Verizone")
      sendEmail (emailAddress, message, "SMS client")
      break;
    case 'US-N':
     	// NexTel
     	emailAddress = String(phoneNumber) + "@messaging.nextel.com"
      alert("Sending message over NexTel")
      sendEmail (emailAddress, message, "SMS client")
      break;
    case 'DE-V':
      // Vodafone Germany
      emailAddress = phoneNumber.toString() + "@vodafone-sms.de"
      alert("Sending message over Vodafone Germany")
      sendEmail (emailAddress, message, "SMS client")
      break;
    default:
      alert("No carrier from the available carriers has been selected.\n\nYou may want to add a new carrier.")
      break;
    }
  }
}