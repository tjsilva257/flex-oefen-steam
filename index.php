<?php
  include 'steam_mock_data.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
            <img src="img/pfp.png" alt="profile pic">

            <span>User</span>
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
            <img src="<?php echo $steamProfile['avatar']; ?>" alt="profile pic">
          <h2><?php echo $steamProfile['username']; ?></h2>
          <p><?php echo $steamProfile['real_name']; ?>, <?php echo $steamProfile['location']; ?></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
            quos delectus eaque labore exercitationem consequuntur magnam rerum
            recusandae, id odit ex. Dolores obcaecati cumque beatae asperiores
            debitis magni temporibus impedit.
          </p>
          <p class="level-text">Level</p>
          <div class="level">69</div>
        </div>
        <div class="profile-stats">
            <div class="profile-stats-info">
                <h2>Stats</h2>
            </div>
          <div class="profile-games">
              <ul>
                 <?php foreach ($steamProfile['recent_activity'] as $game) : ?>
                  <li><?php echo $game['game'] . ' ' . $game['hours'] . 'uur gespeeld'; ?></li>
                  <?php endforeach; ?>
               </ul>
          </div>
            <div class="profile-badges">
                <p>Badges</p>
      </div>
    </div>
  </body>
</html>
