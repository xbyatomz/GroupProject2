<?php
  $title = 'WUC | Forum';
  include 'head.php';
  echo '
  <div class="title"><br></div>
  <div id="topicHeading">
      Deadline for assignment.
  </div>

  <div class="diplayComment">
      <div    id="userImg">  User </div>
      <div    id="userComment">  Comment </div>
      <div    id="cTimeDate">  Time/Date </div>
      <button class="replyButton">Reply</button>

  </div>

   <div class="forumComment">
      <form action= "forum.php"	class= "form" method = "GET">
  <div id= "cInput">
          <textarea rows="5" cols="200" name="commentText" placeholder="comment" maxlength="200" autocomplete="off"></textarea>
          </div>
          <div class= "csubmit">
  </br><input type="submit" name="submitComment" value="  Submit  " width="25px" height= "10%" />
          </div>
    </form>
  </div>
  ';
  include 'foot.php';
 ?>
