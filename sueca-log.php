<?php
/**
 * Accepts log files and stores them
 */

if (isset($_FILES["file"])) {
	$error = $_FILES["file"]["error"];
	if ($error == 0) {
		// File sent
		$fileSize = $_FILES["file"]['size'];
		$fileName = $_FILES["file"]['name'];
		$tempFile = $_FILES["file"]['tmp_name'];

		if (!file_exists('sueca-logs')) {
			mkdir('sueca-logs', 0777);
		}

		move_uploaded_file($tempFile, 'sueca-logs/' + uniqid() + '.log');
	}
}


?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Sueca log</title>
	</head>
	<body>
		<form method="POST" action="sueca-log.php" enctype="multipart/form-data">
			<input type="file" name="file">
			<input type="submit" value="Send log">
		</form>
	</body>
</html>
