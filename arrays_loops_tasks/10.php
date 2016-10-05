<?php
$f = __FILE__;
include 'common/title.php';
echo "Вот столбец чисел от 11 до 33:";
for ($i=11; $i<=33; $i++){
	echo "<p>$i</p>";
}
include 'common/footer.php';