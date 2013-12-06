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
                <?=Time::display($contact['modified'])?>
        </time><br>

        <span id="post_content"><a href='/communicationtest/testEmail/<?=$contact['addressbook_id']?>'>Verify Email Address</a></span><br>
        <span id="post_content"><a href='/communicationtest/testDomain/<?=$contact['addressbook_id']?>'>Verify Domain</a></span><br>
        <span id="post_content"><a href='/communicate/sendEmail/<?=$contact['addressbook_id']?>'>Send Email</a></span><br>
        <span id="post_content"><a href='/communicate/sendSMS/<?=$contact['addressbook_id']?>'>Send Mobile Text Message</a></span><br><br>
        <span id="post_content"><a href='/todo/add/<?=$contact['addressbook_id']?>'>Add a To Do</a></span>


        <br><br>

    </article>

<?php endforeach; ?>

        <!-- main menu on left side !-->
        <div id="includeSideMenu"></div>



<div id = "comment_box_right">
	This is a list of your friends. Indicate if you want to send a friend an inivtation.
</div>