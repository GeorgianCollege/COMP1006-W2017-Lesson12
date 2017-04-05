<?php
    include_once('Controllers/users.php');
    CheckIfAuthenticated();
?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Dashboard</h1>

            <ul>
                <li><a href="index.php?pageId=GamesList"><i class="fa fa-gamepad fa-lg" ></i> Games List</a></li>
                <li>================</li>
                <li>Add New Page</li>
                <li>Delete Page</li>
                <li>Edit Page</li>
            </ul>


        </div>
    </div>
</div>