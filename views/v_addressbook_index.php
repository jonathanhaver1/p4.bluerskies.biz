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
            <input type = "radio" name="records" onclick="check_email(<?=$contact['emailWork']?>)" value="check email">Check Email Records</input><br>
            Home Email: <?=$contact['emailHome']?><br>
            <input type = "radio" name="records" onclick="check_email(<?=$contact['emailHome']?>)" value="check email">Check Email Records</input><br>
            Work Phone: <?=$contact['phoneNumberWork']?><br>
            Home Phone: <?=$contact['phoneNumberHome']?><br>
            Mobile Phone: <?=$contact['mobilePhoneNumber']?><br>
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