<?php
include_once './db.php';

session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$pattern = $_POST['pattern'];
$confirm_pattern = $_POST['confirm_pattern'];

if($pattern !== "0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0"){
    if($pattern === $confirm_pattern){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo json_encode(['registered' => false, 'error' => 'Invalid email address']);
        }else{
            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($username)){

                $result = $DB->query("INSERT INTO users(firstname,lastname,email,username,gender,pattern) VALUES(?,?,?,?,?,?)",array($firstname,$lastname,$email,$username, $gender,$pattern));
                $DB->closeConnection();

                if($result)
                {
                    $_SESSION['user'] = $username;
                    echo json_encode(['registered' => true]);
                }else{

                    echo json_encode(['registered' => false, 'error' => "Username is already taken!"]);
                }
                    
                
            }else{
                echo json_encode(['registered' => false, 'error' => 'Please fill-up everything']);
            }
        }
    }else{
        echo json_encode(['registered' => false, 'error' => 'Pattern are not the same!']);
    }
}else{
    echo json_encode(['registered' => false, 'error' => 'Invalid Pattern, Set it up properly']);
}