<?php
  require 'compiler.php';
  $title = 'WUC | Attendance';
  include 'head.php';

  echo '<div class="Container">
          <div class="title">
            <h1>Attendance Page</h1>
          </div>
          <div class="mainAttendance">
            <h1>Yearly Overall Attendance</h1>';
            $stmt = $pdo->prepare('SELECT * FROM attendance WHERE student_id = :id');
            $criteria = [
              'id' => $_SESSION['user']
            ];
            $stmt->execute($criteria);

            foreach ($stmt as $key) {
              $bgColor;
              switch ($key['yearPercent']) {
                case "> 84":
                  $bgColor = '#ADFF2F';
                  break;
                case "> 54" :
                  $bgColor = '#FFD700';
                  break;
                case "< 54" :
                  $bgColor = 'CD5C5C';
                  break;
                default:
                  $bgColor = '#FFFFFF';
                  break;
              }
                echo '<p style="background-color: ' . $bgColor . '">' . $key['yearPercent'] . '%</p>';
            }
          echo '</div>
          <div class="moduleAttendance">
            <h1>Module Attendance</h1>
            <div class="miContainer">
              <div class="mAttend">
                <h1>Module Name Here</h1>
                <p>Module Graphs and Attendance Here</p>
              </div>
              <div class="mAttend">
                <h1>Module Name Here</h1>
                <p>Module Graphs and Attendance Here</p>
              </div>
              <div class="mAttend">
                <h1>Module Name Here</h1>
                <p>Module Graphs and Attendance Here</p>
              </div>
              <div class="mAttend">
                <h1>Module Name Here</h1>
                <p>Module Graphs and Attendance Here</p>
              </div>
              <div class="mAttend">
                <h1>Module Name Here</h1>
                <p>Module Graphs and Attendance Here</p>
              </div>
              <div class="mAttend">
                <h1>Module Name Here</h1>
                <p>Module Graphs and Attendance Here</p>
              </div>
            </div>
          </div>
          <div class="personalAttendance">
            <h1>Personal Tutor Meetings Attendance</h1>
            <p>Personal Tutor Meeting Attendance Here - Graphs and Charts</p>
          </div>
        </div>';

  include 'foot.php';
 ?>
