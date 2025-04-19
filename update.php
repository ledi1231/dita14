<?php

    include_once 'config.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE users SET name=:name, surname=:surname, email=:email WHERE id=:id";

    $prep= $conn->prepare($sql);
    $prep->bindParam(":name", $name);
    $prep->bindParam(":surname", $surname);
    $prep->bindParam(":email", $email);
    $prep->bindParam(":id", $id);
    $prep->execute();

    header("Location: dashboard.php");