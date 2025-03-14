<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        $stmt = $pdo ->prepare($query);

        $stmt -> execute([$username, $pwd, $email]);

        $pdo = null;
        $stmt = null;
        
        header("location: ../index.php");
        exit();
    } catch (PDOException $e) {
        die("Querry failed". $e->getMessage());
    }
} else {
    
}
