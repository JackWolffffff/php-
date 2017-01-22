<html>
<style>
	.error{
		color: #FF0000;
	}
</style>
	<body>
		<?php
			$name = $email = $gender = $comment = $website = "";
			$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				echo "赋值";
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} else {
					$name = test_input($_POST["name"]);
					if (!preg_match("/^[a-zA-Z ]*$", $name)) {
						$nameErr = "只允许字母和空格!";
					}
				}
				if (empty($_POST["email"])) {
					$emailErr = "Email is requird";
				}else {
					$email = test_input($_POST["email"]);
					if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
						$emailErr = "无效的email格式!";
					}
				}
				if (empty($_POST["gender"])) {
					$genderErr = "Gender is requird";
				} else {
					$gender = test_input($_POST["gender"]);
				}
				if (empty($_POST["comment"])) {
					$commentErr = "";
				} else {
					$comment = test_input($_POST["comment"]);
				}
				if (empty($_POST["website"])) {
					$websiteErr = "";
				} else {
					$website = test_input($_POST["website"]);
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%
=~_|]/i", $website)) {
						$websiteErr = "无效的URL";
					}
				}
			}

			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);

				return $data;
			}
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			Name: <input type="text" name = "name"><span class = "error">*<?php echo $nameErr;?></span><br>
			E-mail: <input type="text" name = "email"><span class = "error">*<?php echo $emailErr;?></span><br>
			Website: <input type="text" name = "website"><span class = "error"><?php echo $websiteErr;?></span><br>
			Comment: <textarea name = "comment" rows = "5" cols = "40"></textarea><span class = "error"><?php echo $commentErr;?></span><br>

			<input type = "radio" name = "gender" value = "famale"> Female<br>
			<input type = "radio" name = "gender" value = "male">Male<span class = "error">*<?php echo $genderErr;?></span><br>
			<input type="submit">
		</form>
		

		<?php
			echo "<h2>您的输入：</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $website;
			echo "<br>";
			echo $comment;
			echo "<br>";
			echo $gender;
		?>

	</body>
</html>