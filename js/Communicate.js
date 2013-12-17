//------------------------------------------------------------------------------------
//--------------------------- SEND EMAIL ---------------------------------------------

// convert to string value

function Email(emailAddress, emailMessage) {

  var emailAddressString = emailAddress.value.toString()
  var emailMessageString = emailMessage.value.toString()

  sendEmail(emailAddressString, emailMessageString) 
}

// email sender

function sendEmail(emailAddressString, emailMessageString) {

  if (checkCharactersEmailAddress (emailAddressString)) {
    var alertText = "Sending the email to :" + emailAddressString + ", message: " + emailMessageString
    alert(alertText)

    $.ajax({
    type: "POST",
      url: "sendEmail.php",
      data: {emailAddressSend: emailAddressString, messageSend: emailMessageString},
      cache: false,
      success: function(toAddress){
      alert ("Email to " + toAddress.toString() + " has been sent successfully")
      }
    });
  } else {
    alert ("This email address is not valid\nPlease enter it again")
  }
}


//------------------------------------------------------------------------------------
//------------------------- SEND SMS -------------------------------------------------


function sendTextMessage() {

	var pN = document.smsForm.phoneNumber
	var msg = document.smsForm.message
	var cr = document.smsForm.carrier

  var phoneNumber = pN.value
  var message = " " + msg.value
  var carrier = cr.value

  var emailAddress

switch (carrier)
{
case 'US-T':
	// T-Mobile
	emailAddress = String(phoneNumber) + "@tmomail.net"
  alert("Sending message over T-Mobile")
  break;
case 'US-Vi':
	// Virgin Mobile
	emailAddress = String(phoneNumber) + "@vmobl.com"
    alert("Sending message over Virgin Mobile")
  break;
 case 'US-C':
 	// Cingular
 	emailAddress = String(phoneNumber) + "@tcingularme.com"
    alert("Sending message over Cingular")
  break;
 case 'US-S':
 	// Sprint
 	emailAddress = String(phoneNumber) + "@messaging.sprintpcs.com"
    alert("Sending message over Sprint")
	 break;
  case 'US-Ve':
 	// Verizon
 	emailAddress = String(phoneNumber) + "@vtext.com"
    alert("Sending message over Verizone")
  break;
 case 'US-N':
 	// NexTel
 	emailAddress = String(phoneNumber) + "@messaging.nextel.com"
    alert("Sending message over NexTel")
  break;
   case 'DE-V':
  // Vodafone Germany
  emailAddress = phoneNumber.toString() + "@vodafone-sms.de"
    alert("Sending message over Vodafone Germany")
  break;
default:
  alert("No carrier has been selected")
  break;
}

  sendEmail (emailAddress, message)

}


//---------------------------------------------------------------------
//------------------ PLACE SKYPE CALL ---------------------------------

 function CreateSkypeButton(id, number) {

            Skype.ui({
                name: "call",
                element: "call_",
                participants: ["+1" + number],
                imageSize: 24,
                imageColor: "blue"
            });

        }