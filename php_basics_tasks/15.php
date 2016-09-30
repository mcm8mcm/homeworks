<?php
if(PHP_OS == 'WINNT'){
	echo "Первое число ==> ";
	$first_nom = doubleval(stream_get_line(STDIN, 12, PHP_EOL));
	echo "Второе число ==> ";
	$second_nom = doubleval(stream_get_line(STDIN, 12, PHP_EOL));
	echo "Оператор из списка (+,-,/,*,%) ==> ";
	$operator = stream_get_line(STDIN, 3, PHP_EOL);
}else{
	$first_nom = doubleval(readline("Первое число ==> "));
	$second_nom = doubleval(readline("Второе число ==> "));
	$operator = readline("Оператор из списка (+,-,/,*,%) ==> ");
}

$valid = TRUE;
if(!empty(trim($operator)) && strpos(',+,-,/,*,%', trim($operator))){
	if (strpos(',/,%',trim( $operator))){
		if($second_nom == 0){
			echo "Делитель не может быть равным 0 \n";
			$valid = FALSE;
		}
	}
}else{
	echo "Оператор должен принадлежать списку (+,-,/,*,%) \n";
	$valid = FALSE;
}

if($valid){
	echo "$first_nom $operator $second_nom = " . eval("return($first_nom $operator $second_nom);") . "\n";
}

