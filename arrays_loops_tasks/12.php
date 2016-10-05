<?php
$f = __FILE__;
include 'common/title.php';
$n = 1000;
$num = 0;
while ($n > 50){
	$num++;
	echo "<p>Итерация № $num значение N = $n</p>";
	$n /= 2;
}

echo "<h3>Дихотомия позволяет дойти от 1000 до 50 (выход из цикла на значении $n ) за $num итераций.</h3>";

include 'common/footer.php';