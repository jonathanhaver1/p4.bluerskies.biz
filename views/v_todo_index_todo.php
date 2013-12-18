<h2>TO DOs</h2>

<div id ="description">
    This is a list of people you need to contact.<br>
    Set up new TO DOs in the menu below left.
</div>

<br><br><br><br><br><br><br>


<?php foreach($todos as $todo): ?>

        <!-- determine Skype status -->
        <script>
            function getSkypeStatus(skypeId,iconType,skypeEvent,statusShowId){
                 var image = new Image()
                 $(image).attr('src','http://mystatus.skype.com/'+iconType+'/'+skypeId);
                 var src = $(image).attr('src');
                 var html = skypeId +  '<a href="skype:'+skypeId+'?'+skypeEvent+'" onclick="return skypeCheck();"><img src="'+src+'" border="0"></a>';
                 $('#show_status_1').append(html);
        }

            $(function() { getSkypeStatus
                ('<?=$todo['skype']?>','smallicon','chat','show_status_1');
            });
        </script>


    <article>

        Priority: <strong><?=$todo['priority']?></strong><br><br>
        Skype Status: <div id='show_status_1'></div><br>

        <span id="todo_table_name"><u><?=$todo['first_name']?> <?=$todo['last_name']?></u></span><br>
        added on
        <time datetime="<?=Time::display($todo['created'],'Y-m-d G:i')?>">
                <span style="font: arial"><?=Time::display($todo['created'])?></span>
        </time>

        :<br><br>

        <span id="post_topic"><?=$todo['topic']?></span><br><br>

        <a href="/todo/done/<?=$todo['todo_id']?>">I have done it</a><br>
        <a href="/todo/priority_increase/<?=$todo['todo_id']?>">Increase Priority by 1</a>&nbsp;
            -&nbsp;&nbsp;<a href="/todo/priority_decrease/<?=$todo['todo_id']?>">Decrease Priority by 1</a><br><br>

        <span id="button_content"><a href='/communicate/sendEmail/<?=$todo['emailWork']?>'>Write Work Email</a></span>
        <span id="button_content"><a href='/communicate/sendEmail/<?=$todo['emailHome']?>'>Write Private Email</a></span><br>
        <span id="button_content"><a href='/communicate/send_sms/<?=$todo['address_id']?>'>Write Text Message</a></span><br>
        Phone Call
        <span id="button_content"><a href="tel:<?=$todo['phoneNumberHome']?>" data-role="button" rel="external">Call Private Phone</a></span>
        <span id="button_content"><a href="tel:<?=$todo['phoneNumberWork']?>" data-role="button" rel="external">Call Work Phone</a></span><br>
        Skype Call
        <span id="button_content"><a href="skype:<?=$todo['phoneNumberHome']?>?call" data-role="button" rel="external">Call Private Phone</a></span>
        <span id="button_content"><a href="skype:<?=$todo['phoneNumberWork']?>?call" data-role="button" rel="external">Call Work Phone</a></span><br>
        <span id="button_content"><a href='/communicate/sendSMS/<?=$todo['address_id']?>'>Call Skype ID</a></span><br><br>

        <script>

        </script> 

        
        <span id="button_content" style ="background-color: pink"><a href='/todo/add/<?=$todo['address_id']?>'>Add a To Do</a></span><br>

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