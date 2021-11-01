<?php
include_once './db.php';

session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$gender = $_POST['gender'];


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo json_encode(['updated' => false, 'error' => 'Invalid email address']);
}else{
    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($username)){

        $DB->query("UPDATE users SET firstname=?,lastname=?,email=?,gender=? WHERE username=? ",array($firstname,$lastname,$email, $gender,$_SESSION['user']));
        $DB->closeConnection();

        echo json_encode(['updated' => true]);
    }else{
        echo json_encode(['updated' => false, 'error' => 'Please fill-up everything']);
    }
}
