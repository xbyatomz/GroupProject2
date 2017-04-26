<?php
  $title = 'WUC | Course';
  require 'head.php';

  echo '<div class="title">
          <h2>Your Course: Computer Science</h2>
        </div>';

  echo '<div class="moduleContainer">
    <div class="">
      <h2>Select Module</h2>
    </div>
    <div class="moduleRow">
      <div class="moduleList">
        <h2>Module List</h2>
          <ul>';
        $stmt = $pdo->prepare('SELECT * FROM modules LIMIT 6');
        $stmt->execute();
        foreach ($stmt as $key)
        {
          echo '<a href="course.php?module=' . $key['module_code'] . '"><li>' . $key['module_code'] . ' - ' . $key['title'] . '</li></a>';
        }
      echo '</ul>
      </div>
      <div class="moduleContent">';
      if(isset($_GET['module']))
      {
        $modules = $pdo->prepare('SELECT * FROM modules WHERE module_code = :code LIMIT 1');
        $criteria = [
          'code' => $_GET['module']
        ];
        $modules->execute($criteria);
        foreach ($modules as $key)
        {
          echo '<h2>' . $key['title'] . '</h2>';
          echo '<p>Level: ' . $key['level'] . '</p>';
          echo '<p>Module Code: ' . $key['module_code'] . '</p>';
          echo '<p>Module Creditation: ' . $key['points'] . '</p>';
          echo '<p>Assessment 1: ' . $key['assessment_1'] == '' ? 'Not Valid' : $key['assessment_1'] . '</p>';
          echo '<p>Assessment 2: ' . $key['assessment_2'] == '' ? 'Not Valid' : $key['assessment_2'] .'</p>';
          echo '<p>Exam: ' . $key['exam'] == '' ? 'Not Valid' : $key['exam'] . '</p>';
        }
      }
      else
        echo '<p>Please select a module to view module information.</p>';
      echo '</div>
      </div>
  </div>';
