<?php
$exp = $_POST['meaningText'];
$rez = 0;
$rez+=eval("return $exp;");
echo "<h2>Результат: $rez</h2>";

$fp = fopen("history.txt", "a+");

if (!$fp) {
	echo "<h2>Невозможно открыть файл!</h2>";
} else {
	fwrite($fp, "\n$exp = $rez");
	fclose($fp);
}
	
$textHistory = file_get_contents("history.txt");
echo nl2br("<p style='font-size: 20px;'>$textHistory</p>");