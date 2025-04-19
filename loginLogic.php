<?php
include_once "config.php";
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username) || empty($password)) {
        echo "Fill all the fields";
        header("refresh:3; url=login.php");
    } else {
        $sql = "SELECT * FROM users WHERE username=:username";
        $temSQL = $conn->prepare($sql);
        $temSQL->bindParam(":username", $username);
        $temSQL->execute();

        if ($temSQL->rowCount() > 0) {
            $data = $temSQL->fetch();
            if (password_verify($password, $data['password'])) {
                header('location: dashboard.php');
            } else {
                echo "Password is incorrect!";
                header('location: login.php');
            }
        } else {
            echo "User not found!";
            header('refresh:3; url=login.php');
        }
    }
}
