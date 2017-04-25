<?php
  $title = 'WUC | Announcements';
  include 'head.php';

  echo '<div class="Container">
          <div class="title">
            <h1>Announcements Page</h1>
          </div>
          <div class="announcements">
            <h1>Announcements</h1>
            <div class="annContainer">';
            $stmt = $pdo->prepare('SELECT * FROM announcements');
            $stmt->execute();
            foreach ($stmt as $key)
            {
                echo '<div class="acItem' . $key['type'] . '">
                        <p class="title">' . $key['title'] . '</p>
                        <p>' . $key['content'] . '</p>
                        <i>Posted: ' . $key['date'] . '</i>
                      </div>';
            }
            echo '</div>
          </div>
        </div>';

  include 'foot.php';
 ?>
