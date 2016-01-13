<?php
//Create Connection Credentials

$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_password = 'root';

//Create Mysqli Object

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($mysqli->connect_error) {
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
}


?>