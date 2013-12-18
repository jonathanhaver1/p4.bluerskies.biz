<h2>Your Addressbook</h2>

<div id ="description">
        Below are the contacts in your addressbook.
        You can verify these addresses.<br>
</div>

<br><br><br><br><br><br><br>


<?php foreach($addressbook as $contact): ?>

    <article>

        <span id="post_table_name"><?=$contact['first_name']?> <?=$contact['last_name']?></span><br>

        on the list since: 
        <time datetime="<?=Time::display($contact['modified'],'Y-m-d G:i')?>">
                <?=Time::display($contact['modified'])?><br>
        </time><br>
        <form>
            Work Email: <?=$contact['emailWork']?><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['emailWork']?>)" value ="Check Internet email records"></input><br>
            <div id = "mxRecordExists">->See here if the email can be routed in the Internet</div>
            Home Email: <?=$contact['emailHome']?><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['emailHome']?>)" value ="Check Internet email records"></input><br>
            <div id = "mxRecordExists">->See here if the email can be routed in the Internet</div>
            Work Phone: <?=$contact['phoneNumberWork']?><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['phoneNumberWork']?>)" value ="Check phone syntax"></input><br>
            Home Phone: <?=$contact['phoneNumberHome']?><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['phoneNumberHome']?>)" value ="Check phone syntax"></input><br>
            Mobile Phone: <?=$contact['mobilePhoneNumber']?><br>
            <input type = "submit" name="records" onclick="mail_check(<?=$contact['mobilePhoneNumber']?>)" value ="Check phone syntax"></input><br>
        </form><br>

            <span id="post_content"><a href='/communicate/sendEmail/<?=$contact['addressbook_id']?>'>Send Work Email</a></span><br>
            <span id="post_content"><a href='/communicate/sendEmail/<?=$contact['addressbook_id']?>'>Send Private Email</a></span><br>
            <span id="post_content"><a href='/communicate/sendSMS/<?=$contact['addressbook_id']?>'>Send Mobile Text Message</a></span><br><br>
            <span id="post_content"><a href='/todo/add/<?=$contact['addressbook_id']?>'>Add a To Do</a></span>

        <br><br>

    </article>

<?php endforeach; ?>

<!-- main menu on left side !-->
<div id="includeSideMenu"></div>

<div id = "comment_box_right">
    This is your addressbook. You have to add someone as a contact before you can add a TODO.
</div>