/*
* The JavaScript and Jquery functions
* to support the Communication Tester
*/

//-------------------------------------------------------------------------------------
//----------------------- EMAIL SYNTAX AND CHARACTER CHECK ----------------------------

// check the syntax of an email address

function checkCharactersEmailAddress (emailAddress) {

    characterTest = /^[\w!#$%&\'*+\-\/=?^`{|}~]+(\.[\w!#$%&\'*+\-\/=?^`{|}~]+)*@[a-z\d]([a-z\d-]*[a-z\d])?(\.[a-z\d]([a-z\d-]*[a-z\d])?)*\.[a-z]{2,6}$/i

    lengthTest = /^(.{1,64})@(.{4,255})$/

    if (characterTest.test(emailAddress) && lengthTest.test(emailAddress)) {

    	return true

    } else {

    	return false

    }
}

// check the syntax of an email address, the MX record, and return the domain

function checkSyntax(){

  var email = document.emailForm.emailAddress
  var emailString = email.value


  if (email.value == null) {

    alert ("No email address entered")

  } else if (checkCharactersEmailAddress(email.value) == false) {

    alert ("This email address is not valid")

  } else {

    alert ("This email address is valid")

    // extract domain
    var emailDomain = emailString.replace(/.*@/, "")
    document.getElementById('domainName').innerHTML=emailDomain

    mx_lookup (emailDomain)

  }
}

  function mail_check(emailAddress) {

    var email = document.emailForm.emailAddress
    var emailString = email.value


  if (email.value == null) {

    alert ("No email address entered")
    return false

  } else if (checkCharactersEmailAddress(email.value) == false) {

    alert ("This email address is not valid")
    return false

  } else {

    alert ("This email address is valid")
    return true

  }

}

//-------------------------------------------------------------------------------------
//----------------------- DOMAIN NAME SYNTAX AND CHARACTER CHECK  ---------------------


function checkDomainName (domainName) {

  var regExp = new RegExp(/^((?:(?:(?:\w[\.\-\+]?)*)\w)+)((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.(\w{2,6})$/) 
  domainName.match(regExp)

  if (domainName==null){

    alert ("No domain name entered")
    return false

  } else if (!domainName.match(regExp)) {

    alert ("This domain name is not valid\n\nPlease enter it again")
    return false

  } else {

    return true
    
  }

}

//-------------------------------------------------------------------------------------
//----------------------- MX LLOKUP ---------------------------------------------------

function mx_lookup (domainName) {

  alert("The domain name is "+ domainName + "\n\nI will now check the DNS records for this domain");

  $.ajax({
    type: "POST",
    url: "/libraries/lookup_dns.php",
    data: {domainString: domainName.toString()}, 
    cache: false,

    success: function(response){
      alert(response)
      $('#mxRecordExists').html(response);

  }
    });
}


function mx_lookup_button (email) {

      // extract domain
    var emailDomain = email.replace(/.*@/, "")

      mx_lookup (emailDomain)

  $.ajax({
    type: "POST",
    url: "/libraries/lookup_dns.php",
    data: {domainString: domainName.toString()}, 
    cache: false,
    success: function(response){
      alert (response);

  }
    });
}


//------------------------------------------------------------------------------------
//----------------------- RECORDS ----------------------------------------------------


function dns_record (domainName) {

  dn = domainName.value

  if (checkDomainName (dn)) {

    alert("Looking up the DNS record for "+ dn)


    $.ajax({
      type: "POST",
      url: "/libraries/dns_record_lookup.php",
      data: {domainString: dn}, 
      cache: false,

      success: function(response){

        var stringResponse = JSON.stringify(response,null,0);

        parseResponse = beautifyRecords(stringResponse);

        $('#record').html(parseResponse);
      }
    });
  }
}

function mx_record (domainName) {

  dn = domainName.value

  if (checkDomainName (dn)) {

    alert("Looking up the MX Record for " + dn)

    $.ajax({
      type: "POST",
      url: "/libraries/mx_record_lookup.php",
      data: {domainString: dn}, 
      cache: false,

      success: function(response){

        var stringResponse = JSON.stringify(response,null,0);

        parseResponse = beautifyRecords(stringResponse);

        $('#record').html(parseResponse);
      }
    });
  }
}


//----------------------------------------------------------------------
//--------------- beautify DNS and MX records --------------------------


function beautifyRecords (stringResponse) {

  stringResponse1 = stringResponse.replace(/\"/g, "")
  stringResponse1a = stringResponse1.replace(/,/g, "")
  stringResponse1b = stringResponse1a.replace(/\\/g, "")
  stringResponse2 = stringResponse1b.replace(/\[/g, "")
  stringResponse3 = stringResponse2.replace(/\]/g, "")
  stringResponse4 = stringResponse3.replace(/\{/g, "<br>")
  stringResponse5 = stringResponse4.replace(/\}/g, "</br>")
  stringResponse6 = stringResponse5.replace(/host/g, "<span style ='text-decoration: underline'>host</span>")

  return stringResponse6 + "<br>"

}