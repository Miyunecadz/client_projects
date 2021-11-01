<?php

// Windows
define('DBHost', '127.0.0.1');
define('DBPort', 3306);
define('DBName', 'masteral_midterm');
define('DBUser', 'root');
define('DBPassword', '');

// MacOS
// define('DBHost', '127.0.0.1');
// define('DBPort', 8889);
// define('DBName', 'masteral_midterm');
// define('DBUser', 'root');
// define('DBPassword', 'root');

require(__DIR__ . "/../vendor/lincanbin/php-pdo-mysql-class/src/PDO.class.php");
$DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);
?>
