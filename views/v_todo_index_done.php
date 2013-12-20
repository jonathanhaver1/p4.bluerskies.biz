<h2>List of done TO DOs</h2>

<div id ="description">

    This is a list of the people you have already contacted.<br>
    Well done!

</div>

<br><br><br><br><br><br><br>

<article>
    <?=$messageEmpty?>
</article>


<?php foreach($todos as $todo): ?>

    <article>

        Priority: <strong><?=$todo['priority']?></strong><br><br>

        <span id="todo_table_name"><u><?=$todo['first_name']?> <?=$todo['last_name']?></u></span><br>

        added on
        <time datetime="<?=Time::display($todo['created'],'Y-m-d G:i')?>">
            <span style="font: arial"><?=Time::display($todo['created'])?></span>
        </time>

        :<br><br>

        <span id="todo_topic"><?=$todo['topic']?></span><br><br>

        <span id="button_content" style ="background-color: pink"><a href="/todo/not_done/<?=$todo['todo_id']?>">I have not really done it</a></span><br>

        <span style ="font-size: small">To change the PRIORITY you have to select this option</span><br>

        ________________________________________<br><br>

    </article>

<?php endforeach; ?>

<!-- main menu on left side !-->
<div id="includeSideMenu"></div>

<div id = "comment_box_right">

    On this page you see the to do's you have done.<br><br>
    Congratulations!<br><br>
    If you find out that a to do is not really done yet, you can 'push it back' into the to do list by clicking on 'I have not really done it'.<br>

</div>