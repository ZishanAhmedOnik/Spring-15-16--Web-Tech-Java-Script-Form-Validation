<!DOCTYPE html>
<html>
	<head>
		<title>Form Validation</title>
		<script src = "validate.js"></script>
	</head>
	<body>
		<center>
			
			<h2>Registration</h2>
			<hr/>

			<form action="next.php" name = "myForm" method="post" onsubmit = "return validate();">
				<table>
					<tr>
						<td>NAME</td>
						<td><input type="text" name="name" id = "name" /></td>
					</tr>
					<tr>
						<td>EMAIL</td>
						<td><input type="text" name="email" id = "email"/></td>
					</tr>
					<tr>
						<td>GENDER</td>
						<td><input type="radio" name="gender" value="Male" id = "male" /> Male <input type="radio" name="gender" value="Female" id = "female" /> Female</td>
					</tr>
					<tr>
						<td>ADDRESS</td>
						<td><textarea name="address" id = "addr"></textarea></td>
					</tr>
					<tr>
						<td>DEPARTMENT</td>
						<td>
							<select name="dept">
								<option>Science</option>
								<option>Arts</option>
								<option>Commerce</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>HOBBIES</td>
						<td><input type="checkbox" name="hobbies[]" value="Books" id = "books"/> Books <input type="checkbox" name="hobbies[]" value="Music" id = "music"/> Music <input type="checkbox" name="hobbies[]" value="Sports" id = "sports"/> Sports <input type="checkbox" name="hobbies[]" value="Travelling" id = "travelling"/> Travelling</td>
					</tr>
					<tr>
						<td>USERNAME</td>
						<td><input type="text" name="username" id = "username"/></td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td><input type="password" name="password" id = "password"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Next" /></td>
					</tr>
				</table>

				<input type="hidden" name="hidden" value="Secret" />
			</form>

		</center>
	</body>
</html>
