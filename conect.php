<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'pythonuas';
$base_url = 'http://localhost/uasgui/';

$con = new mysqli($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
