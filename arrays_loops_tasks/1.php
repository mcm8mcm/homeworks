<?php
$f = __FILE__;
include 'common/title.php';

$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem){
	echo "<p> $elem </p>";
}

include 'common/footer.php';