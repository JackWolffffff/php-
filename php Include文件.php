<html>
	<body>
		<div>
			<?php include 'menu.php'; ?>
		</div>
		<h1>
			首页
		</h1>
		<p>一段文本</p>
		<p>一段文本</p>
		<?php require 'vars.php';
		//require与include的区别：如果用include语句引用某个文件并且
		//PHP无法找到它，脚本会继续执行
		//如果用require语句完成相同的案例，后面的echo语句不会继续执行
		//因为在 require 语句返回严重错误之后脚本就会终止执行
		echo "我有一辆" . $color . $car . "。";?>
		<?php include 'footer.php';?>

	</body>
</html>