<h2>Add a To Do</h2>


<form style = 'position: absolute; left: 100px' id = "form_profile" method='POST' action='/todo/p_add/<?=$addressbook_id?>'>

    <span style='align:center'><br>

        <label for='topic'>What would you like to do (in 120 characters or less)?</label><br>
            <span style = "color: navy; font-size: small; font-type: bold">Do not leave the field blank</span><br>

            <textarea name='topic' id='topic' type='text' rows='6' cols='45' max-length='120'></textarea><br><br>

        <label for='priority'>What priority do you want to attach to it?<br>
            1 = very low  o=====o  10 = very high</label><br><br>

            <input name='priority' id='priority' type='number' min='1' max='10'></input><br><br>

    </span>
    
    <input type='submit' value='Do This'>

    <br><br>

</form>



<div id="comment_box_right">
    Write your to do in this box and click 'Do This' when you are done.<br>
    You can always change the priority later in the To Do Index.
</div>

<br><br>

<div id="menu_horizontal" style = "position: absolute; top: 630px;">
        <ul>
            <li><a href="/addressbook/add">Add<br>Contact</a></li>
            <li><a href="/todo/index_todo">Index<br>TO DO</a></li>
            <li><a href="/todo/index_done">Index<br>DONE</a></li>
        </ul>
</div> 