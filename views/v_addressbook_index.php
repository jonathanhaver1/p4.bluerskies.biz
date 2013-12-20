<h2>Your Addressbook</h2>

<div id ="description">
        Below are the contacts in your addressbook.<br>
        <spam style = "color: blue">ADD a TO DO by selecting the person<br>you need to contact.<br>
            If the individual is not listed,<br>add the contact via 'New Entry' in the main menu.</span>
</div>

<br><br><br><br><br><br><br><br>

<article>
    <?=$messageEmpty?>
</article>


<?php foreach($addressbook as $contact): ?>

    <article>

        <span id="addressbook_name">
            <a href = '/addressbook/entry/<?=$contact['addressbook_id']?>'>
            <?=$contact['first_name']?> <?=$contact['last_name']?>
        </span><br><br>

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