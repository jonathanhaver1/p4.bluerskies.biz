<div id="results">
    <?php foreach($results as $key => $value){
        if($value == ''){
            echo '<p>'.$key.' not found in top 50 results</p>';
    }
    else{
        echo '<p>'.$value.'</p>';
    }
    }?>
</div>