<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once "dbh.inc.php";

        // Named parameters
        // $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $query = "DELETE FROM users WHERE username = ? AND pwd = ?";

        $stmt = $pdo->prepare($query);

        // $stmt->bindParam(":username", $username);
        // $stmt->bindParam(":pwd", $pwd);

        $stmt->execute([$username, $pwd]);

        $stmt = null;
        $pdo = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header('Location: ../index.php');
}
