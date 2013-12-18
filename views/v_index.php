<!DOCTYPE html>
<html>
<head>
	<title>Welcome new Users</title>
</head>
<body>

<h1>
	Welcome to BluerSkies<?php if($user) echo ', '.$user->first_name; ?></h1>
</h1>

<body>

	<div id="special_features">
		<br>
		Keep your communication agenda always up to date<br>
		and access it from EVERYWHERE
		<br><br>
		Put together and check off a communication TO DO list<br><br>
		Keep and maintain your ADDRESSES<br><br>
		CALL people using<br>
		SIP and<br>
		regular TELEPHONE applications<br>
		SKYPE<br><br>
		Write NESSAGES using<br>
		EMAIL and TEXT MESSAGING<br><br>
		TEST communication channels<br>
		look up DNS and MX records
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



	<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" style = "position: absolute; top: 60px; left: 600px">
		<div style = "border: 1px; color: blue; background-color: #CCCCFF; padding-left: 5px; padding-right: 5px; text-align: center">
			Search this site using Google<br>
			<input name="q" type="hidden"></input>
			<input name="qfront" type="text" style="width: 180px"></input><br>
			<input type="submit" value="Search on Bluerskies"></input>
		</div>
	</form>



		<!-- main menu on left side !-->
     	<div id="includeSideMenu"></div>


<footer style="font-size: x-small">Banner Photo © Chrisharvey (
				<a href="http://www.dreamstime.com/">Dreamstime Stock Photos</a>
				& <a href="http://www.stockfreeimages.com/">Stock Free Images</a>)
			</footer>

</body>