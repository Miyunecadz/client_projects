<?php

// check if session is set, if not it will redirect to login
    session_start();
    if(! $_SESSION['user']){
        header('Location: login.php');
    }

    include_once 'header.php';
?>

<?php
    //get the information from the database by username which is stored in SESSION variable
    include_once './api/db.php';

    $user = $DB->row("SELECT * FROM users where username=?", array($_SESSION['user']));
    $fullname = $user["firstname"] ." ".$user['lastname'];
?>

<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-10 col-md-4 p-4 rounded shadow"  id="div_container">
            <h5 class="text-center">User Information</h5>
            <div class="mt-3">
                <p><strong>Fullname</strong>: <?php echo $fullname ?> </p>
                <p><strong>Email Address</strong>: <?php echo $user['email']; ?> </p>
                <p><strong>Username</strong>: <?php echo $user['username']; ?> </p>
                <p><strong>Gender</strong>: <?php echo $user['gender']; ?> </p>
            </div>
            <div class="d-grid gap-2">
                <a href="/edit_info.php" class="btn btn-primary">Edit Information</a>
                <a href="/edit_pattern.php" class="btn btn-primary">Edit Pattern</a>
                <a class="btn btn-danger" href="/api/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

