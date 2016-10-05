<?php
$f = __FILE__;
include 'common/title.php';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "<p>";
foreach ($arr as $elem){
	echo "$elem";
	if($elem % 3 == 0){
		echo "</p><p>";
	}
}

echo "</p>";
include 'common/footer.php';