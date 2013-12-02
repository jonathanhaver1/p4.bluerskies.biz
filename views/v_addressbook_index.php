<h2>Your Addressbook</h2>

<div id ="description">
        Below are the contacts in your addressbook.
        You can verify these addresses.<br>
</div>

<br><br><br><br><br><br><br>


<?php foreach($addressbook as $contact): ?>

    <div id ="addressbook_list">

        <span id="post_table_name"><?=$contact['first_name']?> <?=$contact['last_name']?></span><br>

        on the list since: 
        <time datetime="<?=Time::display($contact['modified'],'Y-m-d G:i')?>">
                <?=Time::display($contact['modified'])?>
        </time><br>

        <span id="post_content"><a href='/communicationtest/email/<?=$contact['addressbook_id']?>'>Verify Email Address</a></span>

        <br><br>

    </div>

<?php endforeach; ?>

        <!-- main menu on left side !-->
        <div id="includeSideMenu"></div>



<div id = "comment_box_right">
	This is a list of your friends. Indicate if you want to send a friend an inivtation.
</div>