<html>
	<link rel='stylesheet' href='/index.css'/>
	<link rel='shortcut icon' src='/icon.png'/>
	<style>
		#comment-field {
			width: 500px;
			margin: 20px;
			margin-top: 0px;
			margin-bottom: 0px;		
			font-size: 15px;
			resize: none;	
		}
		
		#submit-button {
			margin: 10px;
			margin-right: 50px;
			float: right;
			font-size: 20;
		}
	</style>
	<title>Herox - Comment</title>
	<body>
		<div id='content-box'>
			<a href='/index.html'><img id='logo' src='/logo.png'></a>
			<hr>
			<form action='comment.php' id='commentform' method='POST'>
				<label for='comment-field' style='float: left; margin-left: 50px;'>Comment</label>
				<label for='comment-field' style='float: right; margin-right: 50px; font-size: 12px;'>632 Character Limit</label>
				<textarea id='comment-field' name='comment' rows='4' maxlength='632' autofocus></textarea>
				<input id='submit-button' type='submit' value='Submit'/>
				<div style='clear: both'></div>
			</form>
			<?php
				ini_set('error_reporting', E_ALL);
				ini_set('display_errors', 'On');
				if (filesize('comments.txt') == 0) {
					echo '<hr>';
					echo '<h3 style="padding-bottom: 20px;">No comments to display</h3>';
				} else {
					echo '<hr>';
					echo '<h3>Comments</h3>';
					echo '<p>' . file_get_contents('comments.txt') . '</p>';
				}
			?>
		</div>
		<p>Proudly hosted on the Dark Web</p>
	</body>
</html>
