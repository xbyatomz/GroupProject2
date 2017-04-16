<?php
$title = 'WUC | Grades';
require 'head.php';

echo                
      '<div class="Container">
                <div class="title">  
                    <h1>Software Engineering</h1>
                </div> 
                <div class="yearSelecter">
                <h2>Select Year</h2>
                <form>
                    <select name="yearSelect" id="">
                        <option value="Year1">Year1</option>
                        <option value="Year2">Year2</option>
                        <option value="Year3">Year3</option>
                    </select>
                    </form>
                    <h2>Module</h2>
                <div class="moduleMenu">
                    <h2>Select Module</h2>
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
                <div>
                    Assignment Information
                    <div>
                        <div class="task">Task</div>
                        <div class="dateTime">Date/Time</div>
                        <div class="grade">Grade</div>
                    </div>
                    <div class="assess1">
                        <div class="title">Assignment 1</div>
                        <div class="assess1Date">06/04/2010</div>
                        <div class="assess1Grade">A+</div>
                    </div>
                    <div class="assess2">
                        <div class="title">Assignment 2</div>
                        <div class="assess2Date">06/04/2010</div>
                        <div class="assess2Grade">C</div>
                </div>  
                <div class="assessmentMenu">
                    <div>
                        <a href="assessmentGrade.php">Grades</a>
                    </div>
                    <div>
                        <a href="assessmentSub.php">Assignment Submition</a>
                    </div>
                    <div>
                        <a href="assessment.php">Assignment Info</a>
                    </div> 
                </div>   
              </div>
            </div>';
            
require 'foot.php';
        

?>