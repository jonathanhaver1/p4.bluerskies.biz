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

        <a href="/todo/done/<?=$todo['todo_id']?>">I have done it</a><br>
        <a href="/todo/priority_increase/<?=$todo['todo_id']?>">Increase Priority by 1</a>&nbsp;
            -&nbsp;&nbsp;<a href="/todo/priority_decrease/<?=$todo['todo_id']?>">Decrease Priority by 1</a><br><br>

        <span id="post_content"><a href='/communicate/sendEmail/<?=$todo['address_id']?>'>Write Work Email</a></span>
        <span id="post_content"><a href='/communicate/sendEmail/<?=$todo['address_id']?>'>Write Private Email</a></span><br>
        <span id="post_content"><a href='/communicate/sendEmail/<?=$todo['address_id']?>'>Call Private Phone</a></span>
        <span id="post_content"><a href='/communicate/sendEmail/<?=$todo['address_id']?>'>Call Work Phone</a></span><br>
        <span id="post_content"><a href='/communicate/send_sms/<?=$todo['address_id']?>'>Write Text Message</a></span>
        <span id="post_content"><a href='/communicate/sendSMS/<?=$todo['address_id']?>'>Skype Call</a></span><br>
        <span id="post_content" style ="background-color: pink"><a href='/todo/add/<?=$todo['address_id']?>'>Add a To Do</a></span><br>

        ________________________________________<br><br>

    </article>

<?php endforeach; ?>

        <!-- main menu on left side !-->
        <div id="includeSideMenu"></div>


<div id = "comment_box_right">
    On this page you see your to dos.<br>
    Contact people by one of the means listed.<br>
    Once you are done click on "I have done it".<br>
</div>