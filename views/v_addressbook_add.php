<h2>Add a Friend</h2>

<div id ="description">
        You can add a new address book entry<br>
        to stay in touch with someone.
</div>


<form id = "form_profile" method='POST' action='/addressbook/p_add'>

	<span style='align:center'>

    <br>
    Please enter your friend's details.<br>
    <br>
    <br>

    <label for='first_name'>First Name:</label><br>
    <textarea name='first_name' id='first_name' type='text' size='30'></textarea><br><br>

    <label for='last_name'>Last Name:</label><br>
    <textarea name='last_name' id='last_name' type='text' size='30'></textarea><br><br>

    <label for='email'>Email Address:</label><br>
    <textarea name='email' id='email' type='text' size='30'></textarea><br>
    <span style = "color: maroon; font-size: small; font-type: bold">This address will be verified.</span><br><br>

    <label for='mobilePhoneNumber'>Mobile Phone Number:</label><br>
    <textarea name='mobilePhoneNumber' id='mobilePhoneNumber' type='number' size='10'></textarea><br><br>

    <label for='mobilePhoneCarrier'>Mobile Phone Carrier:</label><br>
            <select name="mobilePhoneCarrier" type= "text">
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


<div id="menu_side">

    <span id = "menu_side_header">POSTS</span>

    <ul>
        <li class='active'><a href="/posts/index">View Posts</a></li>
        <li><a href="/posts/users">Follow Users</a>
        <li class='last'><a href="/posts/add">Add Post</a></li>
    </ul>

    <span id = "menu_side_header">PROFILES</span>

    <ul>
        <li class='active'><a href="/profiles/find_profile">View Profiles</a></li>
        <li><a href="/users/profile">Your Profile</a></li>
        <li><a href="/profiles/create_profile">Add Profile</a></li>
        <li class='last'><a href="/profiles/modify_profile">Modify Profile</a></li>
    </ul>


    <span id = "menu_side_header">FRIENDS</span>

    <ul>
        <li class ='active'><a href="/friends/index">View Friends</a></li>
        <li class='last'><a href="/friends/add">Add Friend</a></li>
    </ul>

</div>

<div id = "comment_box_right">
    When you add a friend, only you have access to your friends.<br>
    You can send posts and profiles to your friends.<br>
    You can also send them an invitation to join as users.
    </div>