<h2>Your Addressbook</h2>

<div id ="description">
        Below are the contacts in your addressbook.
        You can verify these addresses.<br>
</div>

<br><br><br><br><br><br><br>


<?php foreach($addressbook as $contact): ?>

    <article>

        <span id="addressbook_name"><?=$contact['first_name']?> <?=$contact['last_name']?></span><br>

        on the list since: 
        <time datetime="<?=Time::display($contact['modified'],'Y-m-d G:i')?>">
                <?=Time::display($contact['modified'])?><br>
        </time><br>
        <form>

            SIP address: <?=$contact['sip']?><br>
            <span id="button_content"><a href="sip:<?=$contact['sip']?>">CALL</a></span><br><br>

            Work Email: <?=$contact['emailWork']?><br>
            <span id="button_content"><a href='/communicate/send_email/<?=$contact['emailWork']?>'>SEND EMAIL</a></span><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['emailWork']?>)" value ="Check DNS"></input><br>

            Home Email: <?=$contact['emailHome']?><br>
            <span id="button_content"><a href='/communicate/send_email/<?=$contact['addressbook_id']?>'>SEND EMAIL</a></span><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['emailHome']?>)" value ="Check DNS"></input><br>
            <div style = "font-size: small; background-color: #CCFFFF; width: 115px">DNS lookup result:&nbsp;</div><div id = "mxRecordExists"></div><br>

            Work Phone: <?=$contact['phoneNumberWork']?>&nbsp;
            <span id="button_content"><a href="tel:<?=$contact['phoneNumberWork']?>">CALL</a></span><br>

            Home Phone: <?=$contact['phoneNumberHome']?>&nbsp;
            <span id="button_content"><a href="tel:<?=$contact['phoneNumberHome']?>">CALL</a></span><br>

            Mobile Phone: <?=$contact['mobilePhoneNumber']?><br>
            <span id="button_content"><a href='/communicate/sendSMS/<?=$contact['addressbook_id']?>'>SEND SMS</a></span>&nbsp;
            <span id="button_content"><a href="tel:<?=$contact['phoneNumberHome']?>">CALL</a></span><br><br>

            Address:<br>
            <?=$contact['physicalAddress']?><br>



        </form><br>


        <span id="button_content" style ="background-color: pink"><a href='/todo/add/<?=$contact['addressbook_id']?>'>Add a To Do</a></span><br>

        ______________________________________


        <br><br>

    </article>

<?php endforeach; ?>

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