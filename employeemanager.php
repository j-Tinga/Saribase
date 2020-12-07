<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE MAKER</title>
	<style type="text/css">
		div {
			margin-top: 5%;
		}
		table, th, td {
			border: 1px solid black;
		}
		table {
			width: 80%;
			border-collapse: collapse;
		}
		th {
			font-weight: bold;
		}
		td {
			padding-left: 5px;
			padding-right: 5px;
		}

		#editdiv {
			z-index: 9;
			display: block;
		}
	</style>
	<script>
		showdiv(){
			document.getElementByID("editdiv").style.display = "block";
		}

		hidediv(){
			document.getElementByID("editdiv").style.display = "none";
		}
	</script>
</head>
<body>
	<center>

		<div id="editdiv">
			<form method='post'>
				<?php

					if(isset($_POST['editbutton'])) {

						$conn = new mysqli("localhost","root","","");
						$select = $conn->select_db('saribase');
						if($select){
							$employee = $conn->query("SELECT * FROM employee WHERE employeeID = '{$_POST['idvalue']}'");
							$row = $employee->fetch_assoc();
						}
						echo "<form method='post'>
							ID: {$_POST['idvalue']}<p></p>
							<input type='hidden' name='idvalue' value='{$_POST['idvalue']}'>
							<label for='fname'>First Name: </label>
							<input type='text' name='fname' id='fname' value='{$row['firstname']}'><p></p>
							<label for='lname'>Last Name: </label>
							<input type='text' name='lname' id='lname' value='{$row['lastname']}'><p></p>
							<label for='cnumber'>Contact Number: </label>
							<input type='text' name='cnumber' id='cnumber' value='{$row['contactNumber']}'><p></p>
							<label for='passw'>Password: </label>
							<input type='text' name='passw' id='passw' value='{$row['password']}'><p></p>

							<label for='level'>Permission: </label>
							<select name='level' id='level' required>
								<option></option>
								<option value='1'>Admin</option>
								<option value='2'>Manager</option>
								<option value='3'>Employee</option>
							</select><p></p>

							<label for='branch'>Branch: </label>
							<select name='branch' id='branch'>";

						if($select){
							$branches = $conn->query("SELECT * FROM branch WHERE branchID = '{$row['branchID']}'");
							$row1 = $branches->fetch_assoc();
							echo "<option value='".$row1['branchID']."'>".$row1['branchName']."</option>";
							$branches = $conn->query("SELECT * FROM branch WHERE branchID != '{$row['branchID']}'");
							while($row2 = $branches->fetch_assoc()){
								echo "<option value='".$row2['branchID']."'>".$row2['branchName']."</option>";
							}
						}
						echo "</select><p></p>

						<input type='submit' name='editemployee' value='Save Changes'>
						</form>";
					}

					if(isset($_POST['editemployee'])){
						$conn = new mysqli("localhost","root","","");
						$select = $conn->select_db('saribase');
						$sql = "UPDATE employee SET employeeLevelID = '{$_POST['level']}', branchID = '{$_POST['branch']}',
							firstname = '{$_POST['fname']}', lastname = '{$_POST['lname']}', contactNumber = '{$_POST['cnumber']}',
							password = '{$_POST['passw']}' WHERE employeeID = '{$_POST['idvalue']}'";
						if (mysqli_query($conn, $sql)) {
  							echo "Employee updated";
						} else {
  							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					}

					if(isset($_POST['deletebutton'])){
						$conn = new mysqli("localhost","root","","");
						$select = $conn->select_db('saribase');
						$sql = "DELETE FROM employee WHERE employeeID = '{$_POST['idvalue']}'";
						if (mysqli_query($conn, $sql)) {
  							echo "Employee deleted";
						} else {
  							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					}
				?>
			</form>
		</div>


		<div>
			<h1>EMPLOYEE MANAGER</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Contact Number</th>
					<th>Branch</th>
					<th>Employee Level</th>
					<th>Action</th>
				</tr>

				<?php
					$conn = new mysqli("localhost","root","","");
					$select = $conn->select_db('saribase');
					if($select){
						$employees = $conn->query("SELECT * FROM employee");
						while($row = $employees->fetch_assoc()){
							$branch = $conn->query("SELECT branchName FROM branch WHERE branchID = {$row['branchID']}");
							$result = $branch->fetch_assoc();
							$level = $conn->query("SELECT levelName FROM employeelevel WHERE employeeLevelID = {$row['employeeLevelID']}");
							$result2 = $level->fetch_assoc();
							echo "<tr>
								<td>".$row['employeeID']."</td>
								<td>".$row['lastname'].", ".$row['firstname']."</td>
								<td>".$row['contactNumber']."</td>
								<td>".$result['branchName']."</td>
								<td>".$result2['levelName']."</td>
								<td>
									<center>
									<form method='post'>
										<input type='hidden' name='idvalue' id='idvalue' value='{$row['employeeID']}'>
										<input type='submit' name='editbutton' value='Edit' onclick='showdiv()'>
										<input type='submit' name='deletebutton' value='Delete'>
									</form>
									</center>
								</td>
							</tr>";
						}
					}
				?>

			</table>

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