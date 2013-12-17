	<h1>
		Search on <?=APP_NAME?></h1>
	</h1>


	<script type="text/javascript">
	    google.load('search', '1');

		var webSearch;
		webSearch = new google.search.WebSearch();
		webSearch.setSearchCompleteCallback(this, webSearchComplete, [webSearch]);

	</script>


	<input type="text" title="Real Time Search" name="searchbox"/>
	<input type="button" id="searchbtn" value="Search" onclick="search(searchbox.value)"/>
	 
	<div class="data" id="web-content"></div>

