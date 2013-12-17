//--------------------------------------------------------------------
//-----------------  SEARCH GOOGLE -----------------------------------
 
function webSearchComplete (searcher, searchNum) {

    var contentDiv = document.getElementById('web-content');
    contentDiv.innerHTML = '';
    var results = searcher.results;
 
    var newResultsDiv = document.createElement('div');
    newResultsDiv.id = 'web-content';
    for (var i = 0; i < results.length; i++) {
      var result = results[i];
 
      var resultHTML = '<div>';
      resultHTML += '<a href="' + result.unescapedUrl + '" target="_blank"><b>' +
                        result.titleNoFormatting + '</b></a><br/>' +
                        result.content +
                        '<div/>';
      newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);
}
 
function search(query) {
    webSearch.execute(query);
}

//--------------------------------------------------------------------
//------------------- SEARCH GOOGLE ----------------------------------

function getResults($term,$page = 0){
    $googleurl = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".(str_replace(' ','+',$term);
    if($page >0){
        $googleurl .= "&start=".($page*10);
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$googleurl);   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $Page_Contents = curl_exec($ch);
    curl_close($ch);
    return $Page_Contents;
}
$keywordCheck = array('ajax','php','cURL','other search terms');

foreach($keywordCheck as $wordKey => $wordValue){
    $term = str_replace(' ','+',$wordValue);
    for($i =0; $i < 5; $i++){
        $page = getResults($term,$i);
        if(preg_match("/mysite.com/",$page)){
            $links = explode('GsearchResultClass',$page);
            foreach ($links as $key => $value){
                if(preg_match("/mysite.com/",$value)){
                    preg_match("/url\":\"([^\"]*)\",/",$value,$match);
                    $match = str_replace('",','',str_replace('url":"','',$match[0]));
                    $results[$wordValue] .= $wordValue. ' is ranked #'.(($i*10)+($key)).': '.$match.'<br/>';
                }
            }
        }
    }
    sleep(2);
}