<?php
$f = __FILE__;
include 'common/title.php';

for($i=1; $i<21; $i++){
	echo "<p>";
	for($k=1; $k<($i+1); $k++){
		echo "X";
	}
	echo "</p>";
}

include 'common/footer.php';