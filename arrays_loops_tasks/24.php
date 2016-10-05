<?php
if(PHP_OS == 'WINNT'){
	echo "Введите число ==> ";
	$nom = trim((stream_get_line(STDIN, 12, PHP_EOL)));
	echo "Введите искомое число ==> ";
	$sear_nom = trim((stream_get_line(STDIN, 1, PHP_EOL)));
}else{
	$nom = readline("Введите число ==> ");
	$sear_nom = trim(readline("Введите искомое число ==> "));
}

if(strlen($sear_nom) > 1){
	echo "Искомое число должно быть одно";
	exit();
}

$len = strlen($nom);
$count = 0;
for($i = 0; $i<$len; $i++){
	if($nom[$i] === $sear_nom){
		$count++;
	}
}

echo "Число $sear_nom в числе $nom встретилось $count раз(а).";