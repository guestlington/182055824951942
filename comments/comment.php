<?php
header('location: /comments/index.php');

$commentstr0 = $_POST['comment'];
if (empty($commentstr0)) {
	echo 'No input';
} elseif ($commentstr0 == '--clearme') {
	$file = fopen('comments.txt', 'w');
	fclose($file);
} else {
	$commentstr = htmlspecialchars($commentstr0, ENT_QUOTES, 'UTF-8');
	date_default_timezone_set('America/Chicago');
	$time = date('m/d/Y h:i:s', time());
	$data0 = "$time <br> $commentstr <br><br>";
	$data = $data0 . file_get_contents('comments.txt');
	
	$file = fopen('comments.txt', 'w');
	fwrite($file, $data);
	fclose($file);
}
?>
