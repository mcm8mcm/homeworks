<?php
if(PHP_OS == 'WINNT'){
	echo "������ ����� ==> ";
	$first_nom = doubleval(stream_get_line(STDIN, 12, PHP_EOL));
	echo "������ ����� ==> ";
	$second_nom = doubleval(stream_get_line(STDIN, 12, PHP_EOL));
	echo "�������� �� ������ (+,-,/,*,%) ==> ";
	$operator = stream_get_line(STDIN, 3, PHP_EOL);
}else{
	$first_nom = doubleval(readline("������ ����� ==> "));
	$second_nom = doubleval(readline("������ ����� ==> "));
	$operator = readline("�������� �� ������ (+,-,/,*,%) ==> ");
}

$valid = TRUE;
if(!empty(trim($operator)) && strpos(',+,-,/,*,%', trim($operator))){
	if (strpos(',/,%',trim( $operator))){
		if($second_nom == 0){
			echo "�������� �� ����� ���� ������ 0 \n";
			$valid = FALSE;
		}
	}
}else{
	echo "�������� ������ ������������ ������ (+,-,/,*,%) \n";
	$valid = FALSE;
}

if($valid){
	echo "$first_nom $operator $second_nom = " . eval("return($first_nom $operator $second_nom);") . "\n";
}

