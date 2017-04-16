<?php

require 'head.php';

echo                
      '       <div class="bottomContainer">
                <div id="courseTitle">  
                    Software Engineering
                </div> 
                <div id="selectYear">
                <form action="submit">
                    <select name="" id="">
                        <option value="Year1">Year1</option>
                        <option value="Year2">Year2</option>
                        <option value="Year3">Year3</option>
                    </select>
                    </form>
                </div>
                <div id="selectModule">
                    Module
                    <br>
                    <button class="btnModule">Module1</button>
                    <br>
                    <button class="btnModule">Module2</button>
                    <br>
                    <button class="btnModule">Module3</button>
                    <br>
                    <button class="btnModule">Module4</button>
                    <br>
                    <button class="btnModule">Module5</button>
                    <br>
                    <button class="btnModule">Module6</button>
                </div>
                <div id="selectAssignment">Assignment Information
                    <div id="aHeading"><div id="aTitle">Task</div><div id="aDeadline">Deadline</div><div id="aType">Type</div></div>
                    <div class="aSelection"><div id="aDescribe">Assignment 1</div><div id="aDateTime">06/04/2010</div><div id="aTSelect"><input type="file" name="assignment1Veriable"></div></div>
                    <div class="aSelection"><div id="aDescribe">Assignment 2</div><div id="aDateTime">06/04/2010</div><div id="aTSelect"><input type="file" name="assignment1Veriable"></div></div>
                </div> 
                <div id="selectMenu">Menu
                <div class="btnMenu"><a href="assessmentGrade.php">Grades</a></div>
                <div class="btnMenu"><a href="assessmentSub.php">Assignment Submition</a></div>
                <div class="btnMenu"><a href="assessment.php">Assignment Info</a></div> 
                </div>       
            </div>';
            
require 'foot.php';
        

?>