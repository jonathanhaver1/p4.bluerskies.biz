<h2>Add a Contact</h2>

<div id ="description">
        You can add a new address book entry<br>
        to stay in touch with someone.
</div>


<form id = "form_profile" method='POST' action='/addressbook/p_add' style='padding-left: 15px; padding-right: 15px; align:center'>

    <br>Please enter the new contact's details.<br>
    <span style = "color: navy; font-size: small; font-type: bold; background-color: #FFCCFF">Do not leave a field blank</span><br><br><br>

    <label for='first_name'>First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='first_name' id='first_name' type='text' size='15'><br><br>

    <label for='last_name'>Last Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='last_name' id='last_name' type='text' size='15'><br><br><br>

    <label for='emailHome'>Home Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='emailHome' id='emailHome' type='text' size='20'><br>
    <span style = "color: navy; font-size: small; font-type: bold">This address will be verified</span><br>

    <label for='emailWork'>Work Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='emailWork' id='emailWork' type='text' size='20'><br>
    <span style = "color: navy; font-size: small; font-type: bold">This address will be verified</span><br>

    <label for='sip'>SIP address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='sip' id='sip' type='text' size='20'><br>
    <span style = "color: navy; font-size: small; font-type: bold">Please enter address without the prefix 'sip:'<br>
                                                                    This address will be verified like an email address<br>
                                                                    Verify the domain under <u>DNS/MX RECORDS</u></span><br><br>

    <label for='phoneNumberHome'>Home Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='phoneNumberHome' id='phoneNumberHome' type='number' min='10000' max='999999999999999'><br>
    
    <label for='phoneNumberWork'>Work Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='phoneNumberWork' id='phoneNumberWork' type='number' min='10000' max='999999999999999'><br>

    <label for='mobilePhoneNumber'>Mobile Phone</label>&nbsp;&nbsp;&nbsp;
    <input name='mobilePhoneNumber' id='mobilePhoneNumber' type='number' min='10000' max='999999999999999'><br>
    <span style = "color: navy; font-size: small; font-type: bold">up to 15 digits<br>include country code</span><br><br>

    <label for='skype'>Skype name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name='skype' id='skype' type='text' max-length='15'><br><br><br>

    <label for='physicalAddress'>Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='physicalAddress' id='physicalAddress' type='text' type='text' size='30'></textarea><br><br>

    <label for='mobilePhoneCarrier'>Mobile Phone Carrier</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="mobilePhoneCarrier" type= "text">
                <option value = "">PLEASE SELECT
                <option value = "US-T">T-Mobile
                <option value = "US-Vi">Virgin Mobile
                <option value = "US-C">Cingular
                <option value = "US-S">Sprint
                <option value = "US-Ve">Verizon
                <option value = "US-N">Nextel
                <option value = "DE-V">Vodafone Germany
            </select><br><br>

    <label for='interests'>Interests:</label><br>
    <textarea name='interests' id='interests' type='text' rows='4' cols='30'></textarea><br><br>

    <label for='comments'>Comments:</label><br>
    <textarea name='comments' id='comments' type='text' rows='8' cols='30'></textarea><br><br><br>

    <input type='submit' value='Add Contact'><br><br>

</form> 

<!-- main menu on left side !-->
<div id="includeSideMenu"></div>


<div id = "comment_box_right">
    When you add a new entry to your addressbook,
    you can use the features on this site to communicate with them:<br><br>
    email<br>
    phone<br>
    Skype<br>
    text message<br>
    SIP<br>
</div>