<?php
function utf8_strrev($str){
	preg_match_all('/./us', $str, $ar);
	return join('', array_reverse($ar[0]));
}
echo utf8_strrev($_GET['value']);