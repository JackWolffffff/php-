<?php 
	echo "hello php</br>";
	for ($i=0; $i < 10; $i++) { 
		echo "循环第$i","次<br>";
	}
	$a = "a";
	$b = "b";
	$c = "c";
	echo "<br>$a<br>$b<br>$c";
	$GLOBALS['a'] = "new a";
	echo "$a";
	function myTest(){
		static $x = 0;
		echo "eecho$x";
		print "pprint$x";
		$x++;

	}
	myTest();
	myTest();
	myTest();
	var_dump($a);
	/**
	* Car
	*/
	// class Car
	// {
	// 	var $wheelCount;

	// 	function Car($wheelCount){
	// 		$this->wheelCount = $wheelCount;
	// 	}

	// 	function move()
	// 	{
	// 		echo "moving" ;
	// 	}
	// }
	// $vw = new Car()

	$arr = array('a' =>"Dog" , 'b'=>"Cat", 'c'=>"Horse");
	//在PHP中，不需要在设置变量之前声明该变量的数据类型
	$txt = "hello world";
	$number = 16;
	echo ++$number;
	//php中的字符串
	echo $txt.$txt;
	echo strlen($txt);
	echo strpos($txt, "world");
	define("GREETING", "Welcome to W3School.com.cn!");
	echo GREETING;
	//php中的比较运算符
	echo "php中的比较运算符<br>";
	$x = 100;
	$y = "100";
	echo "<br>";
	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x <> $y);
	echo "<br>";
	var_dump($x !== $y);
	echo "<br>";
	$aa = 50;
	$bb = 60;
	var_dump($aa > $bb);
	echo "<br>";
	var_dump($aa < $bb);
	echo "<br>";
	var_dump($aa >= $bb);
	echo "<br>";
	var_dump($aa <= $bb);
	echo "<br>";

	//php中的逻辑运算符
	echo "php中的逻辑运算符<br>";
	$l1 = true;
	$l2 = false;
	var_dump($l1 xor $l2);
	echo "<br>";

	//php中的数组运算符
	echo "php中的数组运算符<br>";
	$arr1 = array("a" => "red", "b" => "green");
	$arr2 = array('c' => "blue", "d" => "yellow");
	$arr3 = $arr1 + $arr2;
	echo "<br>";

	var_dump($arr3);
	echo "<br>";
	var_dump($arr1 == $arr2);
	echo "<br>";
	var_dump($arr1 === $arr2);
	echo "<br>";
	var_dump($arr1 != $arr2);
	echo "<br>";
	var_dump($arr1 <> $arr2);
	echo "<br>";
	var_dump($arr1 !== $arr2);
	echo "<br>";

	//php中的switch语句
	echo "php中的switch语句<br>";
	$v = 2;
	switch ($v) {
		case 1:
			echo "1";
			break;
		case 2:
			echo "2";
			break;
		default:
			# code...
			break;
	}
	echo "<br>";

	//php中的while循环
	echo "php中的while循环<br>";
	$flag = 1;
	while ($flag <= 5) {
		echo "flag = ".$flag."<br>";
		$flag++;
	}
	echo "<br>";

	//php中的for循环
	echo "php中的for循环<br>";
	for ($i=0; $i < 10; $i++) { 
		echo "i = ".$i."<br>";
	}
	echo "<br>";

	//php中的foreach循环
	echo "php中的foreach循环<br>foreach遍历一个数组<br>";
	$colors = array("red", "green", "blue", "yellow");
	foreach ($colors as $value) {
		echo $value."<br>";
	}
	echo "foreach遍历一个字典<br>";
	$dictionary = array("name" => "RJ", "age" => "26", "phone" => "12345678901");
	foreach ($dictionary as $key => $value) {
		echo "key=".$key." value = ".$value."<br>";
	}
	echo "<br>";

	//php函数
	echo "php函数<br>";
	writeMsg("hello world!", "世界， 你好！");
	//使用默认参数
	writeMsg();

	echo "<br>1+1=".sum(1, 1);

	echo "<br>";

	//php数组
	echo "php数组<br>";
	echo "php索引数组<br>";
	$cars = array("Volvo", "BMW", "SAAB");
	echo $cars."<br>";
	//手动分配
	// $cars[0] = "Volvo";
	// $cars[1] = "BMW";
	// $cars[2] = "SAAB";
	for ($i=0; $i < count($cars); $i++) { 
		echo "cars[$i]=".$cars[$i]."<br>";
	}
	echo "php关联数组<br>";
	$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
	var_dump($age);
	echo "<br>";
	echo "php多维数组<br>";
	echo "<br>";

	//php数组排序
	echo "php数组排序<br>";
	sort($cars);
	echo "升序排列:";
	var_dump($cars);
	echo "<br>";
	echo "降序排列:";
	rsort($cars);
	var_dump($cars);
	echo "<br>";

	//php超级全局变量
	echo "php超级全局变量<br>";
	addition();
	echo $z;
	echo "<br>SERVER<br>";
	echo "PHP_SELF: ".$_SERVER['PHP_SELF']."<br>";
	echo "SERVER_NAME: ".$_SERVER['SERVER_NAME']."<BR>";
	echo "HTTP_HOST: ".$_SERVER['HTTP_HOST']."<br>";
	echo "HTTP_REFERER: ".$_SERVER['HTTP_REFERER']."<BR>";
	echo "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT']."<BR>";
	echo "SCRIPT_NAME: ".$_SERVER['SCRIPT_NAME']."<BR>";
	echo "SCRIPT_URI: ".$_SERVER['SCRIPT_URI']."<BR>";
	echo "SERVER_PORT: ".$_SERVER['SERVER_PORT']."<BR>";
	echo "SERVER_ADDR: ".$_SERVER['SERVER_ADDR']."<br>";

	echo "REQUEST<br>";
	$name = $_REQUEST['fname'];
	echo "POST<br>";
	echo "$name"."<br>";
	$name1 = $_POST['fname'];
	echo "$name1"."<br>";
	echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

?>
<html>
	<body>
		<form method="post">
			Name:<input type="text" name="fname">
			<input type="submit">
			<br>
			<a href="index.php?subject=PHP&web=W3school.com.cn">测试GET</a><br>
			<a href="html表单.php">html表单</a>
			<a href="php Include文件.php">PHP Include文件</a>
		</form>
	</body>
</html>

<?php
	function writeMsg($msg1="msg1", $msg2="msg2"){
		echo "msg1:$msg1, msg2:$msg2";
	}
	function sum ($a, $b){
		return $a+$b;
	}

	function addition(){
		echo "GLOBALS超级全局变量<br>";
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
?>
