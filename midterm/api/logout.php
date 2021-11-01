<?php

//this will unset the session

session_start();
session_destroy();
unset($_SESSION['user']);
header('Location: ../index.php');
