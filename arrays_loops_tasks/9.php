<?php
$f = __FILE__;
include 'common/title.php';
echo "Вот столбец чисел от 1 до 100:";
for ($i=1; $i<101; $i++){
	echo "<p>$i</p>";
}
include 'common/footer.php';