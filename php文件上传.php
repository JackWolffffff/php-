<?php
	setcookie("user", "", time() - 3600);
	echo "cookie after delete" . $_COOKIE["user"] . "<br>";
?>
<html>
	<body>
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name = "file" id = "file">
			<br>
			<input type="submit" name = "submit" value="submit">
		</form>
	</body>
</html>