<?php 

	$upload_errors = array(
		UPLOAD_ERR_OK => "No errors.",
		UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize.",
		UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL => "Partial upload.",
		UPLOAD_ERR_NO_FILE => "No file.",
		UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
		UPLOAD_ERR_EXTENSION => "File upload stopped by extension.",
		);

	if (isset($_POST['submit'])) {
		$tmp_file = $_FILES['file_upload']['tmp_name'];
		$target_file = basename($_FILES['file_upload']['name']);
		$upload_dir = "uploads";

		if (move_uploaded_file($tmp_file, $upload_dir . '/' . $target_file)) {
			$message = "File Uploaded Successfully!";
		} 
		else {
		 	$error = $_FILES['file_upload']['error'];
			$message = $upload_errors[$error];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Upload</title>
</head>

<body>
 	<?php if(!empty($message)) {echo "<p>{$message}</p>";}?>
	<form action="upload.php" enctype="multipart/form-data" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
		<input type="file" name="file_upload" />
		<input type="submit" name="submit" value="Upload"/>
	</form>
</body>

</html>