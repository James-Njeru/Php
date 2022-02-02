<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Validation</title>
</head>
<body>
	<?php
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";  
$name = $email = $website = $comment = $gender = "";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['name'])) {
		$nameErr = "Nmae cannot be empty";
	}else{
		$name = test_input($_POST['name']);
	}
	
	if (empty($_POST['email'])) {
		$emailErr = "Email cannot be empty";
	}else{
		$email = test_input($_POST['email']);
	}
	
	if (empty($_POST['website'])) {
		$websiteErr = "Website cannot be empty";
	}else{
		$website = test_input($_POST['comment']);
	}
	
	if (empty($_POST['gender'])) {
		$genderErr = "Gender must be selected";
	}else{
		$gender = test_input($_POST['gender']);
	}
	
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	Name: <input type="text" name="name">
	<span class="error">* <?php echo $nameErr; ?></span><br>
	Email: <input type="email" name="email">
	<span class="error">* <?php echo $emailErr; ?></span><br>
	Website: <input type="text" name="website">
	<span class="error">* <?php echo $websiteErr; ?></span><br>
	Comment: <textarea name="comment", rows="5" cols="40"></textarea>
	<span class="error">* <?php echo $websiteErr ?></span><br>
	Gender: 
	<input type="radio" name="gender" checked="true">Female
	<input type="radio" name="gender">Male
	<input type="radio" name="gender">Others 
	<span class="error">* <?php echo $genderErr; ?></span><br>
	<input type="submit" name="submit">
</form>


</body>
</html>