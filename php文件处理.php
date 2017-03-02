<?php
echo "<p>php文件处理</p><p>文件内容</p><br>";
echo readfile("test.txt");
echo "<br>";
$myfile = fopen("test.txt", "r") or die("Unable to open file");
// echo fread($myfile, filesize("test.txt"));
echo "<br>";
echo "逐行读取文本";
while (!feof($myfile)) {
	echo fgets($myfile) . "<br>";
}
fclose($myfile);
$myfile = fopen("test.txt", r) or die("Unable to open file");
echo "逐字符读取文件";
while (!feof($myfile)) {
echo "哈哈哈哈好";
	echo fgetc($myfile);
}
fclose($myfile);

$myfile2 = fopen("test2.txt", "w") or die("Unable to open file");
$txt = "Bill Gates\n";
fwrite($myfile2, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile2, $txt);
fclose($myfile2);

$myfile3 = fopen("test2.txt", "w") or die("Unable to open file");
$txt = "Mickey Mouse\n";
fwrite($myfile3, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile3, $txt);
fclose($myfile3);
?>