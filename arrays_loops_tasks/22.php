<?php
$f = __FILE__;
include 'common/title.php';

for($i=1; $i<6; $i++){
	echo "<p>";
	for($k=1; $k<($i * 2 +1); $k++){
		echo "X";
	}
	echo "</p>";
}

include 'common/footer.php';