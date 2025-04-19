<?php
// echo '<pre>' . var_export($_POST, true) . '</pre>';
include_once "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $temPass = $_POST['password'];
    $password= password_hash($temPass, PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($temPass)){
        echo "Please fill all the fields!";
        header("refresh:3; url=register.php");
    }else{
        $sql = "SELECT username FROM users WHERE username=:username";

        $temSQL =  $conn->prepare($sql);
        $temSQL->bindParam(":username", $username);
        $temSQL->execute();

        if($temSQL->rowCount() > 0){
            echo "Username Taken!";
            header("refresh:3; url=register.php");
        }else{
            $sql = "INSERT INTO users (name,surname,username,email,password) VALUES (:name,:surname,:username,:email,:password)";
            $temSQL= $conn->prepare($sql);
             $temSQL->bindParam(":username", $username);
             $temSQL->bindParam(":name", $name);
             $temSQL->bindParam(":email", $email);
             $temSQL->bindParam(":password", $password);
             $temSQL->bindParam(":surname", $surname);
             $temSQL->execute();
             echo "Bravo!";
        header("refresh:3; url=register.php");
        }
        // $users = $temSQL->fetchAll();
    }

}
