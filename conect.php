<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pythonuas';

$con = new mysqli($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
