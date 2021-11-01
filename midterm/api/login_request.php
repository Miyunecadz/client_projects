<?php
session_start();
require_once 'db.php';
$username = $_POST['username'];
$pattern = $_POST['pattern'];

if(!empty($username)){
    $user = $DB->row("SELECT * FROM users WHERE username=? AND pattern=?",array($username, $pattern));
    if($user){
        $_SESSION['user'] = $user['username'];
        echo json_encode(['status' => true]);
    }else{
        echo json_encode(['status' => false, 'error' => 'Invalid credentials']);
    }
}else{
    echo json_encode(['status' => false, 'error' => 'Invalid credentials']);
}