<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'form';

$connection = mysqli_connect($server, $username, $password, $db_name);

if (!$connection) {
    echo "Connection unsuccesfull";
}
