<?php
/**
 * Accepts log files and stores them
 */

file_put_contents('suecalogs.log', "Access at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
//file_put_contents('suecalogs.log', "SERVER: " . print_r($_SERVER, true) . "\n", FILE_APPEND);
//file_put_contents('suecalogs.log', "GET: " . print_r($_GET, true) . "\n", FILE_APPEND);
//file_put_contents('suecalogs.log', "POST: " . print_r($_POST, true) . "\n", FILE_APPEND);
//file_put_contents('suecalogs.log', "FILES: " . print_r($_FILES, true) . "\n", FILE_APPEND);
//file_put_contents('suecalogs.log', "BODY: " . @file_get_contents('php://input') . "\n", FILE_APPEND);
//file_put_contents('suecalogs.log', "BODY2: " . $HTTP_RAW_POST_DATA . "\n", FILE_APPEND);

if (!file_exists('sueca-logs')) {
	mkdir('sueca-logs', 0777);
}

if (isset($_FILES['file'])) {
	$error = $_FILES['file']['error'];
	if ($error == 0) {
		// File sent
		$fileSize = $_FILES['file']['size'];
		$fileName = $_FILES['file']['name'];
		$tempFile = $_FILES['file']['tmp_name'];
		$filename = 'sueca-logs/' . uniqid() . '.log';
		$res = move_uploaded_file($tempFile, $filename);
		file_put_contents('suecalogs.log', "Moved file $filename: " . (int) $res . "<br>\n", FILE_APPEND);
	}
} else if ($HTTP_RAW_POST_DATA != '') {
	$filename = 'sueca-logs/' . uniqid() . '.log';
	file_put_contents($filename, $HTTP_RAW_POST_DATA . "\n", FILE_APPEND);
	file_put_contents('suecalogs.log', "Saved file $filename\n", FILE_APPEND);
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
