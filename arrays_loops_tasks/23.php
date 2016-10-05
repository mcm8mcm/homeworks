<?php
if(PHP_OS == 'WINNT'){
	echo "Введите число ==> ";
	$nom = (stream_get_line(STDIN, 12, PHP_EOL));
}else{
	$nom = doubleval(readline("Введите число ==> "));
}

if(intval($nom) == 0){
	echo "Значение, ввеженное Вами эквивалентно числу 0. А раз так, то и считать нечего, отвер: 0";
	exit();
}

$len = strlen($nom);
$sum = 0;
for($i = 0; $i<$len; $i++){
	$sum += intval($nom[$i]);
}

echo "Сумма цифр в числе $nom = $sum";
