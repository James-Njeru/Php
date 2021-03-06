<?php
	$target_dir = "uploads/"; 
	//specifies path of the file to be uploaded
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	//check if file is a actual image or not
	if (isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false) {
			echo "File is an image - ".$check["mime"] . ".<br>";
			$uploadOk = 1;
		}else{
			echo "File is not an image";
			$uploadOk = 0;
		}
	}

	//check if file already exist
	if (file_exists($target_file)) {
		echo "Sorry, file already exist <br>";
		$uploadOk = 0;
	}

	//allow certain file formats
	if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed <br>";
		$uploadOk = 0;
	}

	//check if uploadOk is set to 0
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded <br>";
	} else{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded <br>";
		}else{
			echo "Sorry, there was an error uploading your file <br>";
		}
	}
?>