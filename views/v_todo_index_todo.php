<h2>TO DOs</h2>

<div id ="description">
    This is a list of people you need to contact.<br>
    Set up new TO DOs in the menu below left.
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

        <span id="post_topic"><?=$todo['topic']?></span><br><br>

        --><a href="/todo/done/<?=$todo['todo_id']?>">I have done it</a><br>
        --><a href="/todo/priority_increase/<?=$todo['todo_id']?>">Increase Priority by 1</a><br>
        --><a href="/todo/priority_decrease/<?=$todo['todo_id']?>">Decrease Priority by 1</a><br>

        ________________________________________<br><br>

    </article>

<?php endforeach; ?>

        <!-- main menu on left side !-->
        <div id="includeSideMenu"></div>


<div id = "comment_box_right">
    On this page you see the posts by the people you follow.<br>
    You can email a post using 'Email This Post'.
</div>