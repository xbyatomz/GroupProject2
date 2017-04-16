<?php
require 'head.php';

echo
'             <div class="bottomContainer">
                <div id="topicHeading">  
                    Other User Comment goes Here?
                </div>   
                
                <div class="diplayComment">  
                    <div    id="userImg">  User </div>
                    <div    id="userComment">  Comment </div>
                    <div    id="cTimeDate">  Time/Date </div>
                  
                    
                </div> 

                 <div class="forumComment">  
                    <form action= "forum.html"	id= "fForm" method = "GET">
				        <div id= "cInput">
                        <textarea rows="5" cols="100" name="commentText" placeholder="comment" maxlength="200" autocomplete="off"></textarea> 
				        </div>
                        <input type="submit" name="submitComment" value="  Submit  " width="25px" height= "10%" />
	                </form>
                </div>';
            
require 'foot.php';
        

?>