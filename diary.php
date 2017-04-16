<?php
    $title = 'WUC | Diary Page';
    require 'head.php';

    echo '
		<div class="title">
			<h1>Your Timetable</h1>
		</div>
	  <div class="Container">
	        <form action="diary.php" class="diaryForm"> 
				<label for="week">Select week:</label>
                <select name="selectWeek" id="">
                    <option value="Week 1">01-02/01/2017</option>
                    <option value="Week 2">02-09/01/2017</option>
					<option value="Week 3">03-16/01/2017</option>
                </select>
            
		<table class="diaryTable">
			<tr>
				<th>Time</th>
				<th>08:00-09:00</th>
				<th>09:00-10:00</th>
				<th>10:00-11:00</th>
				<th>11:00-12:00</th>
				<th>12:00-13:00</th>
				<th>13:00-14:00</th>
				<th>14:00-15:00</th>
				<th>15:00-16:00</th>
				<th>16:00-17:00</th>
				<th>17:00-18:00</th>
				<th>18:00-19:00</th>
				<th>19:00-20:00</th>
				<th>20:00-21:00</th>
				<th>21:00-22:00</th>
			</tr>
			<tr>
					<th>Monday</th>
						<td></td>
						<td id="lightpinkModule">Module Code Lecture/Practical Group No. Room No.</td>	
						<td></td>
						<td id="pinkModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				<tr>
					<th>Tuesday</th>
						<td></td>
						<td id="lightblueModule">Module Code Lecture/Practical Group No. Room No.</td>	
						<td id="lightblueModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td id="pinkModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				<tr>
					<th>Wednesday</th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td id="greenModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td id="greenModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				<tr>
					<th>Thursday</th>
						<td></td>
						<td id="redModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td id="redModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td id="blueModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td id="blueModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</th>
				</tr>
				<tr>
					<th>Friday</th>
						<td></td>
						<td></td>
						<td></td>
						<td id="lightpinkModule">Module Code Lecture/Practical Group No. Room No.</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
			</table>
	<div class="bottomButtonsContainer">
		<button class="diaryButtons"><a href = "add_diary.php">Add</a></button>
		<button class="diaryButtons"><a href = "delete_diary.php">Delete</a></button>
		<button class="diaryButtons"><a href = "change_diary.php">Change</a></button>
	</div>
		</form>
    </div>';
			require 'foot.php';
	?>