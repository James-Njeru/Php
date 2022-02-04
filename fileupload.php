<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
	Select image to upload: <input type="file" name="fileToUpload"><br>
	<input type="submit" name="submitFile">
</form>
</body>
</html>