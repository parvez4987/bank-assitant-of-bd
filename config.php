<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bank_assistant';
$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    echo "Database connection failed!!!";
}
?>