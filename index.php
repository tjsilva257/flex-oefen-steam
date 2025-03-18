<?php
include 'database.php'; 

$db = connect(); 
$steamProfile = getSteamProfile($db); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Steam Profile</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="flex-container">
    <div class="header">
        <img class="header-img" src="img/steam.png" alt="steam">
        <div class="nav">
            <a href="#">STORE</a>
            <a href="#">COMMUNITY</a>
            <a href="#">USER</a>
            <a href="#">CHAT</a>
            <a href="#">SUPPORT</a>
            <div class="user-info">
                <img src="<?= $steamProfile['avatar'] ?>" alt="profile pic">
                <span><?= $steamProfile['username'] ?></span>
                <span>0,00$</span>
            </div>
            <div class="install-steam">
                <p>Install Steam</p>
            </div>
        </div>
    </div>
    <div class="profile">
        <div class="profile-header">
            <div class="profile-header-info">
                <h2>Profile</h2>
            </div>
            <div class="profile-info">
                <img src="<?= $steamProfile['avatar'] ?>" alt="profile pic">
                <h2><?= $steamProfile['username'] ?></h2>
                <p><?= $steamProfile['real_name'] ?>, <?= $steamProfile['location'] ?></p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                    quos delectus eaque labore exercitationem consequuntur magnam rerum
                    recusandae, id odit ex. Dolores obcaecati cumque beatae asperiores
                    debitis magni temporibus impedit.
                </p>
                <p class="level-text">Level</p>
                <div class="level"><?= $steamProfile['level'] ?></div>
            </div>
            <div class="profile-stats">
                <div class="profile-stats-info">
                    <h2>Stats</h2>
                </div>
                <div class="profile-games">
                    <h3>Recent Activity</h3>
                    <ul>
                        <?php foreach ($steamProfile['recent_activity'] as $game): ?>
                            <li>
                                <img src="<?= $game['image'] ?>" alt="<?= $game['game'] ?>">
                                <strong><?= $game['game'] ?></strong>
                                <span><?= $game['hours'] ?> hours played</span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="profile-badges">
                    <h3>Badges</h3>
                    <p>Total Badges: <?= $steamProfile['badges'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
