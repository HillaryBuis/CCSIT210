<?php

$host = 'localhost';
$username = 'root';
$password =  '';
$dbname = 'buis';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) { 
    exit("Failed to connect to MySQL.");
}
