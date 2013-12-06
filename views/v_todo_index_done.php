<h2>DONEs</h2>

<div id ="description">
    This is a list of the people you have already contacted.<br>
    Well done!
</div>

<br><br><br><br><br><br><br>


<?php foreach($todos as $todo): ?>

    <article>

        Priority: <strong><?=$todo['priority']?></strong><br><br>

        <span id="todo_table_name"><u><?=$todo['first_name']?> <?=$todo['last_name']?></u></span> added on

        <time datetime="<?=Time::display($todo['created'],'Y-m-d G:i')?>">
                <span style="font: arial"><?=Time::display($todo['created'])?></span>
        </time>

        :<br><br>

        <span id="todo_topic"><?=$todo['topic']?></span><br><br>

        --><a href="/todo/not_done/<?=$todo['todo_id']?>">I have not really done it</a><br>
        <span style ="font-size: small">To change the PRIORITY you have to select this option</span><br>


        ________________________________________<br><br>

    </article>

<?php endforeach; ?>

        <!-- main menu on left side !-->
        <div id="includeSideMenu"></div>


<div id = "comment_box_right">
    On this page you see the posts by the people you follow.<br>
    You can email a post using 'Email This Post'.
</div>