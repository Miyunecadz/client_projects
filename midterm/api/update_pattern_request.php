<?php

include_once './db.php';

session_start();
$pattern = $_POST['pattern'];
$confirm_pattern = $_POST['confirm_pattern'];

if($pattern !== "0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0"){
    if($pattern === $confirm_pattern){
        $DB->query("UPDATE users SET pattern=? WHERE username=? ",array($pattern,$_SESSION['user']));
        $DB->closeConnection();

        echo json_encode(['updated' => true]);
    }else{
        echo json_encode(['updated' => false, 'error' => 'Pattern are not the same!']);
    }
}else{
    echo json_encode(['updated' => false, 'error' => 'Invalid Pattern, Set it up properly']);
}
