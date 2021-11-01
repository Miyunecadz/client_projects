<?php
    include_once 'header.php';
    include_once './api/db.php';

    session_start();
    if(! $_SESSION['user']){
        header('Location: login.php');
    }

    $user = $DB->row("SELECT * FROM users where username=?", array($_SESSION['user']));
?>

<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-10 col-md-4 p-4 rounded shadow"  id="div_container">
            <form action="/api/update_info_request.php" method="post" id="update_form">
                <h5 class="text-center">UpdateUser Information</h5>
                <div class="mt-3">
                    <div class="form-group">
                        <label for="firstname">Firstname:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $user['firstname']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $user['lastname']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $user['email']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['username']; ?>" readonly>
                    </div>
                    <div class="form-group justify-content-center d-flex gap-3 my-3">
                        <div class="form-check">
                            <?php if($user['gender'] == 'male'){
                                echo '
                                <input class="form-check-input" type="radio" name="gender" id="gender_male" checked>
                                <label class="form-check-label" for="gender_male">
                                    Male
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_female">
                                <label class="form-check-label" for="gender_female">
                                    Female
                                </label>
                                </div> ';
                            } else{
                                echo '
                                <input class="form-check-input" type="radio" name="gender" id="gender_male" >
                                <label class="form-check-label" for="gender_male">
                                    Male
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_female" checked>
                                <label class="form-check-label" for="gender_female">
                                    Female
                                </label>
                                </div> ';
                            }
                            ?>
                    </div>
                </div>
                <div class="mt-2 d-grid gap-2">
                    <button type="submit" class="btn btn-success">Update Information</button>
                    <a class="btn btn-danger" href="/">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/js/update_info.js" defer></script>
