<h2>Add a Contact</h2>

<div id ="description">
        You can add a new address book entry<br>
        to stay in touch with someone.
</div>


<form id = "form_profile" method='POST' action='/addressbook/p_add'>

	<span style='align:center'>

    <br>
    Please enter the new contact's details.<br>
    <span style = "color: navy; font-size: small; font-type: bold">Do not leave a field blank</span>
    <br><br>

    <label for='first_name'>First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='first_name' id='first_name' type='text' size='30'></textarea><br><br>

    <label for='last_name'>Last Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='last_name' id='last_name' type='text' size='30'></textarea><br><br>

    <label for='emailHome'>Home Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='emailHome' id='emailHome' type='text' size='30'></textarea><br>
    <span style = "color: navy; font-size: small; font-type: bold">This address will be verified</span><br><br>

    <label for='emailWork'>Work Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='emailWork' id='emailWork' type='text' size='30'></textarea><br>
    <span style = "color: navy; font-size: small; font-type: bold">This address will be verified</span><br><br>

    <label for='sip'>SIP address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='sip' id='sip' type='text' size='30'></textarea><br>
    <span style = "color: navy; font-size: small; font-type: bold">Verify the domain under 'DNS/MX LOOKUP'</span><br><br>

    <label for='phoneNumberHome'>Home Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='phoneNumberHome' id='phoneNumberHome' type='number' size='10'></textarea><br><br>
    
    <label for='phoneNumberWork'>Work Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='phoneNumberWork' id='phoneNumberWork' type='number' size='10'></textarea><br><br>

    <label for='skype'>Skype name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='skype' id='skype' type='text' max-length='30'></textarea><br><br>

    <label for='mobilePhoneNumber'>Mobile Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name='mobilePhoneNumber' id='mobilePhoneNumber' type='number' size='10'></textarea><br><br>

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
    <textarea name='comments' id='comments' type='text' rows='8' cols='30'></textarea><br><br>

    <br>

</span>
    <input type='submit' value='Add Contact'>

    <br><br>

</form> 

        <!-- main menu on left side !-->
        <div id="includeSideMenu"></div>


<div id = "comment_box_right">
    When you add a friend, only you have access to your friends.<br>
    You can send posts and profiles to your friends.<br>
    You can also send them an invitation to join as users.
    </div>