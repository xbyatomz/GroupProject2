<?php 
    require 'head.php';
?>

<!DOCTYPE>
<html>
	<head>
		<title>Woodlands College</title>
		<link rel = "stylesheet" href = "style.css">
	<head>
	
	<body>
		<header>
			<h1>Personal Details</h1>
		</header>
		
		<form action = "student_details.php" method = "POST">
			<table>
				<tr>
					<th>Student ID:</th>
					<th><input type = "text" name = "student_id" required /></th>
				</tr>
				<tr>
					<th>Picture:</th>
					<th><input type = "text" name = "student_picture" required /></th>
				</tr>
				<tr>
					<th>Firstname:</th>
					<th><input type = "text" name = "student_firstname" required /></th>
				</tr>
				<tr>
					<th>Middle Name(s):</th>
					<th><input type = "text" name = "student_middlename" required /></th>
				</tr>
				<tr>
					<th>Surname:</th>
					<th><input type = "text" name = "student_surname" required /></th>
				</tr>
				<tr>
					<th>Address(Term Time):</th>
					<th><input type = "textarea" name = "address_term" required /></th>
				</tr>
				<tr>
					<th>Address(Non-term if different):</th>
					<th><input type = "textarea" name = "address_nonterm" /></th>
				</tr>
				<tr>
					<th>Telephone/Mobile:</th>
					<th><input type = "text" name = "telephone" /></th>
				</tr>
				<tr>
					<th>Email Address:</th>
					<th><input type = "text" name = "email_address" /></th>
				</tr>
				<tr>
					<td><input class ="submit" type = "submit" name = "submit_details" value = "Submit" /></td>
					<td><input type = "submit" name = "edit_details" value = "Edit Details" /></td>
				</tr>
			</table>
		</form>
		
		<?php
			require 'foot.php';
		?>
