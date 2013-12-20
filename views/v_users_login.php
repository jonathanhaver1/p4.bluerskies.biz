<div id = "special_features" style = "margin-left:200px; margin-top: 130px; width:150px;">

	Please login to explore all the great things on this site.<br>
	If you have not yet signed in, go to Sign in below.

</div>

<br><br><br><br><br>

<form method='POST' id = "form_profile" action='/users/p_login'><br>

	<span style = "color: navy; font-size: small; font-type: bold">Do not leave a field blank</span><br><br>

	Email<br>
	<input type ='text' name ='email'><br><br>

	Password<br>
	<input type ='password' name = 'password'><br><br>

	<?php if(isset($error)): ?>
		<div class='error'>
			Login failed. Please double check your email and password.
		</div>
		<br>
	<?php endif; ?>

	<input type = 'submit' value = 'LogIn'><br><br>

</form>

<br><br> <br><br> <br><br>

<div id="menu_horizontal">
        <ul>
            <li><a href="/users/signup">Signup</a></li>
            <li><a href="/">Home</a></li>
        </ul>
</div>