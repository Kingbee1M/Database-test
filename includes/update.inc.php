<?php

// using placeholder method

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 6;";

        $stmt = $pdo ->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        
        header("location: ../user.php");
        exit();
    } catch (PDOException $e) {
        die("Querry failed". $e->getMessage());
    }
} else {
    header("location: ../index.php");
}
