<h2>List of TO DOs</h2>

<div id ="description">
    This is a list of people you need to contact.<br>
    Set up new TO DOs in the menu below left.
</div>

<br><br><br><br><br><br><br>


<?php foreach($todos as $todo): ?><br>

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

        <span id="todo_table_name"><u><?=$todo['first_name']?> <?=$todo['last_name']?></u></span><br>

        Priority: <strong><?=$todo['priority']?></strong><br><br>
                <a href="/todo/priority_increase/<?=$todo['todo_id']?>">PRIORITY <strong>+1</strong></a>&nbsp;
            -&nbsp;&nbsp;<a href="/todo/priority_decrease/<?=$todo['todo_id']?>">PRIORITY <strong>-1</strong></a><br><br>
        Skype Status: <div id='show_status_1'></div><br>

        <u>TO DO:</u>
        <span id="post_topic"><?=$todo['topic']?></span><br>
        --- added on
        <time datetime="<?=Time::display($todo['created'],'Y-m-d G:i')?>">
                <span style="font: arial"><?=Time::display($todo['created'])?></span>
        </time> ---<br>

        <a href="/todo/done/<?=$todo['todo_id']?>" style = "border: blue 2px solid; background-color: #CCCCFF; text-decoration: none"><strong>DID IT :-)</Strong></a><br><br>

        EMAIL<br>
        <a href='/communicate/send_email/<?=$todo['emailWork']?>' id="button_content">Write Work Email</a>
        <a href='/communicate/send_email/<?=$todo['emailHome']?>' id="button_content">Write Private Email</a><br>
        TEXT MESSAGE<br>
        <a href='/communicate/send_sms/<?=$todo['address_id']?>' id="button_content">Write Text Message</a></span><br>
        PHONE CALL<br>
        <a href="tel:<?=$todo['phoneNumberHome']?>" data-role="button" rel="external" id="button_content">Call Private Phone</a>
        <a href="tel:<?=$todo['phoneNumberWork']?>" data-role="button" rel="external" id="button_content">Call Work Phone</a><br>
        SKYPE CALL<br>
        <a href="skype:<?=$todo['phoneNumberHome']?>?call" data-role="button" rel="external" id="button_content">Call Private Phone</a>
        <a href="skype:<?=$todo['phoneNumberWork']?>?call" data-role="button" rel="external" id="button_content">Call Work Phone</a><br>
        <a href='/communicate/sendSMS/<?=$todo['address_id']?>' id="button_content">Call Skype ID</a><br><br>

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