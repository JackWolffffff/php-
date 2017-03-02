<?php
	setcookie("user", "RongJJJJun", time()+3600);
	echo "cookie" . $_COOKIE["user"] . "<br>";
?>

<html>
	<body>
		<?php
			echo $_COOKIE["user"];
		?>
	</body>
</html>