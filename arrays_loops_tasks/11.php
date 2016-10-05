<?php
$f = __FILE__;
include 'common/title.php';
echo "<h3>Вот четные числа из диапазона от 1 до 100:</h3><br/>";
for ($i = 0; $i<=100; $i++){
	if(($i % 2) == 0){
		echo "<p>$i</p>";
	}
}
include 'common/footer.php';