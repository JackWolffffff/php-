<?php
	/*自定义错误处理器
	语法:
	error_function(error_level, error_message, error_file, error_line, error_context)

	*/

	function customError($errno, $errstr, $error_file, $error_line, $error_context){
		echo "<b>Error:</b>[$errno] $errstr file :$error_file line:$error_line context:$error_context";
	}	

	set_error_handler("customError");

	$test = 2;
	if ($test > 1) {
		trigger_error("value must be 1 or low");
		echo "<br>";
	}
	echo ($test);
?>