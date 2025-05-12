<?php
session_start();

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "db";

try{
    $conn = new PDO("mysql:host=$server; dbname=$dbname", $user, $pass);
}catch(PDOException $e){
    echo "error:" .$e->getMessage();
}


?>