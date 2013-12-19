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
                ('<?=$contact['skype']?>','smallicon','chat','show_status_1');
            });
        </script>


        <h2><?=$contact['first_name']?> <?=$contact['last_name']?></h2>

        <div id ="description">
        Below are the details for <?=$contact['first_name']?> <?=$contact['last_name']?><br><br>
        </div>

        <br><br><br><br><br><br><br>


        <article>

        <span id="addressbook_name"><?=$contact['first_name']?> <?=$contact['last_name']?></span><br>
                <a href='/todo/add/<?=$contact['addressbook_id']?>' id="button_content" style ="background-color: pink">Add a To Do</a></span><br><br>
                Skype Status: <div id='show_status_1'></div><br>

        on the list since: 
        <time datetime="<?=Time::display($contact['modified'],'Y-m-d G:i')?>">
                <?=Time::display($contact['modified'])?><br>
        </time><br>
        <form>

            SIP address: <?=$contact['sip']?><br>
            <a href="sip:<?=$contact['sip']?>" id="button_content">CALL</a><br><br>

            Work Email: <?=$contact['emailWork']?><br>
            <a href='/communicate/send_email/<?=$contact['emailWork']?>' id="button_content">SEND EMAIL</a>&nbsp;&nbsp;&nbsp;
            <button type = "button" name="Button" onclick='mx_lookup_button("<?=$contact['emailWork']?>")' value ="Check DNS">Check DNS</button><br>

            Home Email: <?=$contact['emailHome']?><br>
            <a href='/communicate/send_email/<?=$contact['emailHome']?>' id="button_content">SEND EMAIL</a>&nbsp;&nbsp;&nbsp;
            <button type = "button" name="Button" onclick='mx_lookup_button("<?=$contact['emailHome']?>")' value ="Check DNS">Check DNS</button><br>
            <div style = "font-size: small; background-color: #CCFFFF; width: 115px">DNS lookup result:&nbsp;</div><div id = "mxRecordExists"></div><br>

            Work Phone: <?=$contact['phoneNumberWork']?>&nbsp;
            <a href="tel:<?=$contact['phoneNumberWork']?>" id="button_content">CALL</a><br>

            Home Phone: <?=$contact['phoneNumberHome']?>&nbsp;
            <a href="tel:<?=$contact['phoneNumberHome']?>" id="button_content">CALL</a><br>

            Mobile Phone: <?=$contact['mobilePhoneNumber']?><br>
            <a href='/communicate/send_sms/<?=$contact['addressbook_id']?>' id="button_content">SEND SMS</a>&nbsp;
            <a href="tel:<?=$contact['phoneNumberHome']?>" id="button_content">CALL</a><br><br>

            Address:<br>
            <?=$contact['physicalAddress']?>

        </form><br>

    </article>

<!-- main menu on left side !-->
<div id="includeSideMenu"></div>

<div id = "comment_box_right">
    This is your addressbook. You have to add someone as a contact before you can add a TODO.<br><br>
    SIP PHONE<br>
    You need to sign up with a SIP phone service (iptel.org, for example is free) and install a SIP client.<br><br>
    SMS<br>
    The receiver needs to have this service activated.<br><br>
    TELEPHONE<br>
    A phone service (e.g. Skype) needs to be installed.<br><br>
    SKYPE<br>
    Skype needs to be installed.<br>
</div>