<?php
    $title = 'WUC | Edit Information';
    require 'head.php';

    echo '
    <div class="Container">
      <div class="title">
        <h1>Edit Information</h1>
      </div>
			<form action = "student_details.php">
				<label for = "st_id">Student ID:</label>
				<input type = "text" name = "student_id" required />

				<label for = "st_pic">Picture:</label>
				<input type = "text" name = "student_picture" required />

				<label for = "st_fname">Firstname:</label>
				<input type = "text" name = "student_firstname" required />

				<label for = "st_mname">Middle Name(s):</label>
				<input type = "text" name = "student_middlename" required />

				<label for = "st_sname">Surname:</label>
				<input type = "text" name = "student_surname" required />

				<label for = "st_addressterm">Address(Term Time):</label>
				<input type = "textarea" name = "address_term" required />

				<label for = "st_addressnonterm">Address(Non-term if different):</label>
				<input type = "textarea" name = "address_nonterm" />

				<label for = "st_tel">Telephone/Mobile:</label>
				<input type = "text" name = "student_telephone" />

				<label for = "st_email">Email Address:</label>
				<input type = "text" name = "student_email" />

				<input class ="submit" type = "submit" name = "submit_details" value = "Submit" />
			</form>
    </div>';
			require 'foot.php';
		?>
