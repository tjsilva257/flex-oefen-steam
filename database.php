<?php

function connect() {
    $host = 'localhost';
    $dbname = 'steam_profiles';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

function getSteamProfile($pdo) {
    $userId = 4; 
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    $profile = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$profile) {
        die("User not found.");
    }

    $stmt = $pdo->prepare("SELECT * FROM recent_activity WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $userId]);
    $profile['recent_activity'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $profile;
}
?>