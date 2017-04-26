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
				<th class="heading"></th>
				<th id="9" class="time">09:00</th>
				<th id="10" class="time">10:00</th>
				<th id="11" class="time">11:00</th>
				<th id="12" class="time">12:00</th>
				<th id="13" class="time">13:00</th>
				<th id="14" class="time">14:00</th>
				<th id="15" class="time">15:00</th>
				<th id="16" class="time">16:00</th>
				<th id="17" class="time">17:00</th>
				<th id="18" class="time">18:00</th>
			<tr>
					<th class="heading">Monday</th>

				</tr>
				<tr>
					<th class="heading">Tuesday</th>

				</tr>
				<tr>
					<th class="heading">Wednesday</th>

				</tr>
				<tr>
					<th class="heading">Thursday</th>

					</th>
				</tr>
				<tr>
					<th class="heading">Friday</th>

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
