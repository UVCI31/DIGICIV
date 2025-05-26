<?php
require_once 'model/database.php';

function getUserByCredentials($username, $password) {
    $pdo = getConnection();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute([
        'username' => $username,
        'password' => $password
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}