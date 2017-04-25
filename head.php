<?php require 'compiler.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <title><?php echo isset($title) ? $title : 'Insert Title Here'; ?></title>

    <!-- DO NOT MODIFY THE HEAD TAG!!!!!!!! (AKA DON'T MODIFY ANY CODE ABOVE THIS COMMENT) -->

  </head>
  <body>
    <div class="container"> <!-- Contains all the content on the page - Used for scaling -->
      <div class="topContainer">
        <div class="userTab"> <!-- The class used to hold the current users name and image -->
          <div class="userContainer">
            <div class="userImage">
              <img src="Media/image.png" alt="" height="28px" width="28px"> <!-- Image is place holder, will be replaced with user image -->
            </div>
            <div class="userName">
                <?php
                    $stmt = $pdo->prepare('SELECT * FROM students WHERE studentId = :id');
                    $criteria = [
                            'id' => $_SESSION['user']
                    ];
                    $stmt->execute($criteria);
                    foreach ($stmt as $key)
                    {
                        echo '<p>' . $key['firstName'] . ' ' . $key['lastName'] . '</p>';
                    }
                ?>
            </div>
          </div>
        </div>
        <div class="navigation"> <!-- The naviagtion bar - THIS IS GENERIC AND SHOULDN'T BE MODIFIED -->
          <ul>
            <a href="overview.php" class="item"><li></li></a>
            <li class="item">Course</li>
            <a href="announcements.php" class="item"><li>Annoucements</li></a>
              <a class="item" href="diary.php"><li>Diary</li></a>
            <a href="attenance.php" class="item"><li>Attendance</li></a>
            <a class="item" href="assessment.php"><li>Assignments<br>/ Grades</li></a>
            <a class="item" href="forum.php"><li>Forum</li></a>
          </ul>
        </div>
      </div>
      <div class="bottomContainer">
        <div class="main">
