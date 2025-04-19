<?php

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "users";

try{

    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

}catch(Exeption $e){

    echo "Error" . $e->getMessage();

}