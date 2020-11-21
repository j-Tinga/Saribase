<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE MAKER</title>
	<style type="text/css">
		div {
			margin-top: 10%;
		}
	</style>
</head>
<body>
	<center>
		<div>
			<h1>EMPLOYEE MAKER</h1>
			<form method='post'>
				<label for='fname'>First Name: </label>
				<input type='text' name='fname' id='fname'><p></p>
				<label for='lname'>Last Name: </label>
				<input type='text' name='lname' id='lname'><p></p>
				<label for='cnumber'>Contact Number: </label>
				<input type='text' name='cnumber' id='cnumber'><p></p>
				<label for='passw'>Password: </label>
				<input type='text' name='passw' id='passw'><p></p>

				<label for='level'>Permission: </label>
				<select name='level' id='level'>
					<option value='1'>Admin</option>
					<option value='2'>Manager</option>
					<option value='3'>Employee</option>
				</select><p></p>

				<label for='branch'>Branch: </label>
				<select name='branch' id='branch'>
					<?php
						$conn = new mysqli("localhost","root","","");
						$select = $conn->select_db('saribase');
						if($select){
							$branches = $conn->query("SELECT * FROM branch");
							while($row = $branches->fetch_assoc()){
								echo "<option value='".$row['branchID']."'>".$row['branchName']."</option>";
							}
						}
					 ?>
				</select><p></p>

				<input type='submit' name='newemployee' value='Create New User'>
			</form>
		</div>


		<?php

			$conn = new mysqli("localhost","root","","");
			$select = $conn->select_db('saribase');

			if(isset($_POST['newemployee'])){
				$sql = "INSERT INTO employee VALUES ('',(SELECT employeeLevelID FROM employeelevel WHERE employeeLevelID = {$_POST['level']}),
				(SELECT branchID FROM branch WHERE branchID = {$_POST['branch']}),'{$_POST['fname']}','{$_POST['lname']}','{$_POST['cnumber']}','{$_POST['passw']}')";
				if (mysqli_query($conn, $sql)) {
  					echo "New employee created";
				} else {
  					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}

		 ?>

	</center>
</body>
</html>