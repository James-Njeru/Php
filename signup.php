<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>

	<style type="text/css">
		body{
			background: mediumpurple;
		}
		input[type=text], input[type=password]{
			width: 100%;
			margin-bottom: 5px;
			display: inline-block;
			background: #f1f1f1;
		}
		button{
			width: 100%;
			background: palegreen;
		}
		div.signup{
			background: white;
			margin: auto;
			max-width: 50%;
			padding: 30px;
		}
	</style>
</head>
<body>
<div class="signup">
	<h2>Sign Up Page</h2>
	<form>
		<label for="fname">First Name</label><br>
		<input type="text" id="fname" name="fname" placeholder="Enter First Name"><br>
		<label for="mname">Middle Name</label><br>
		<input type="text" id="mname" name="mname" placeholder="Enter Middle Name"><br>
		<label for="lname">Last Name</label><br>
		<input type="text" id="lname" name="lname" placeholder="Enter Last Name"><br>
		<label for="email">Email</label><br>
		<input type="text" id="my_email" name="email" placeholder="Enter Email"><br>
		<label for="pwd">Password</label><br>
		<input type="password" id="pwd" name="pwd" placeholder="Enter Password"><br>
		<label for="repeat_pwd">Repeat Password</label><br>
		<input type="password" id="repeat_pwd" name="repeat_pwd" placeholder="Enter Email"><br>
		<label>Gender</label><br>
		<label>Male</label>
		<input type="radio" id="male" name="gender">
		<label>Female</label>
		<input type="radio" id="female" name="gender">
		<label>Other</label>
		<input type="radio" id="other" name="gender"><br><br>
		<button type="submit">Sign Up</button>
	</form>
</div>
</body>
</html>