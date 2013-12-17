<!DOCTYPE html>
<html>
<head>
	<title>Welcome new Users</title>
</head>
<body>

<h1>
	Welcome to <?=APP_NAME?><?php if($user) echo ',<br>'.$user->first_name; ?></h1>
</h1>

<body>

	<div id="special_features">
		<br>
		Keep your communication agenda always up to date<br>
		and access it from EVERYWHERE
		<br>
		Keep and maintain your ADDRESS<br>
		Put together and check off a communication TO DO list<br>
		Check on people using Google<br>
		Use email and mobile text messaging<br>
		Use Skype
		Test communication channels<br>
		<br>
	</div>
	<br>
	<br>

	<script type="text/javascript">

		var domain="p4.bluerskies.biz"

		function Gsitesearch(curobj){
		curobj.q.value="site:"+domain+" "+curobj.qfront.value
		}

	</script>


	<a href="/search/search_google">Search<br>Google</a>


	<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" style = "position: absolute; top: 800px">

	<p>Search JavaScript Kit:<br />
	<input name="q" type="hidden" />
	<input name="qfront" type="text" style="width: 180px" /> <input type="submit" value="Search" /></p>

	</form>



		<!-- main menu on left side !-->
     	<div id="includeSideMenu"></div>


<footer style="font-size: x-small">Banner Photo © Chrisharvey (
				<a href="http://www.dreamstime.com/">Dreamstime Stock Photos</a>
				& <a href="http://www.stockfreeimages.com/">Stock Free Images</a>)
			</footer>

</body>