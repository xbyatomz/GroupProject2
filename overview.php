<?php
  require 'data-connectoin.php';
  $title = 'WUC | Overview';
  include 'head.php';
  echo '
    <div class="Container">
      <div class="title">
        <h1>Overview Page</h1>
      </div>

      <div class="overview">
        <div class="left">
          <h1>Quick Announcements</h1>
          <div class="aContain">
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
            <div class="item">
              <h1>Example Module Title</h1>
              <p>Example Module Announcement Text</p>
            </div>
          </div>
        </div>
        <div class="right">
          <h1>Your Progress</h1>
        </div>
      </div>
      <div class="title">
        <h1>Quick Modules</h1>
      </div>
      <div class="tiles">
        <div class="topRow">';
        $stmt = $pdo->prepare('SELECT * FROM modules LIMIT 6');
        $stmt->execute();
        foreach ($stmt as $key)
        {
            echo '<div class="module">' . $key['title'] . '</div>';
        }

          echo '
        </div>
      <div class="bottomRow">';
        $stmt->execute();
        foreach ($stmt as $key)
        {
            echo '<div class="module">' . $key['module_code'] . '</div>';
        }
        echo '
      </div>
    </div>
  </div>
  ';
  include 'foot.php';
 ?>
