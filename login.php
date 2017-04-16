<?php
    require 'compiler.php';
    if (isset($_POST['username']) && isset($_POST['password']))
    {
            $stmt = $pdo->prepare('SELECT studentId, password FROM students WHERE studentId = :id');
            $criteria = [
                    'id' => $_POST['username']
            ];
            $stmt->execute($criteria);

            foreach ($stmt as $key)
            {
                if ($key['studentId'] == $_POST['username'])
                {
                    if(password_verify($_POST['password'],$key['password']))
                    {
                        $_SESSION['user'] = $key['studentId'];
                        require 'overview.php';
                    }
                    else
                    {
                        echo '<div class="error">Invalid Password!</div>';
                    }
                }
            }
            if ($stmt->rowCount() == 0)
            {
                echo '<div class="error">Invalid Student ID!</div>';
            }
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <title>WUC | Login</title>
  </head>
  <body>
    <div class="main">
      <div class="lContainer">
        <div class="leftContainer">

        </div>
        <div class="Rightcontainer">
            <div class="title">
              <h1>Welcome to Woodlands University College</h1>
              <p>Please sign in below</p>
            </div>
            <div class="loginContainer">
              <p>Login</p>
              <div class="form">
                <form class="loginForm" action="login.php" method="post">
                  <label for="uname">Username: </label><input class="text" type="text" name="username" value="" placeholder="Student Number" required>
                  <label for="pword">Password: </label><input class="text" type="password" name="password" value="" placeholder="" required>
                  <input class="submit" type="submit" name="submit" value="Login">
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
  </body>
