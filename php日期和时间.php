<?php 
	echo "时间戳<br>";
	echo "Today is " . date("Y/m/d") . "<br>";
	echo "Today is " . date("Y.m.d") . "<br>";
	echo "Today is " . date("Y-m-d") . "<br>";
	echo "Today is " . date("l") . "<br>";
	echo "2010-" . date("Y");
	echo "现在时间是 " . date("h:i:sa");
	echo "<br>使用mktime创建日期<br>";
	$d = mktime(9, 12, 31, 6, 10, 2107);
	echo "创建的日期是: " . date("Y-m-d h:i:sa", $d);
	echo "<br>使用strtotime创建日期<br>";
	$d2 = strtotime("11:32am April 15 2015");
	echo "创建的日期是: " . date("Y-m-d h:i:sa", $d2);
	$d3 = strtotime("tomorrow");
	echo "<br>tomorrow: " . date("Y-m-d h:i:sa", $d3);
	$d4 = strtotime("next Monday");
	echo "<br>next Monday: " . date("Y-m-d h:i:sa", $d4);
	$d5 = strtotime("+3 Months");
	echo "<br>" . date("Y-m-d h:i:sa", $d5);
	echo "<br>星期六<br>";
	$startdate = strtotime("Saturday");
	$enddate = strtotime("+6 weeks", $startdate);
	while ($startdate < $enddate) {
		echo date("M d", $startdate) . "<br>";
		$startdate = strtotime("+1 week", $startdate);
	}
?>