<?php
    include_once 'config.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    if(isset($_POST['submit'])){

        $sql = "INSERT INTO users(name, surname, email) VALUE (:name, :surname,:email)";

        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindParam(":name", $name);
        $sqlQuery->bindParam(":surname", $surname);
        $sqlQuery->bindParam(":email", $email);

        $sqlQuery->execute();
        echo "bravo";
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <a href="index.php">Add new user</a>
 </body>
 </html>