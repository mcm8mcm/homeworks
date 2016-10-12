<?php
include '../common/header.php';

function hasSlang($subject){
	$forbidden_words = '/запрещенноеслово|простоймат|девятиэтажныймат/i';
	$matches = [];
	$res = preg_match_all($forbidden_words, $subject, $matches);
	return $res != 0 ? true : false;
}

function addComment(){
	$filename = __DIR__. PD . 'comments.txt';
	$time_stamp = date_format(date_create(), 'd.m.Y H.m.s');
	$user = $_POST['nick'];
	$message = $_POST['comment'];
	$message = strip_tags($message, '<b>');
	$has_skang = hasSlang($message);
	$message = hasSlang($message) ? '<span style="color:red;font-weight:bold">Некорректный комментарий</span>' : $message;
	file_put_contents($filename, json_encode(['t_stamp' => $time_stamp, 'user'=>$user, 'message'=>$message]), FILE_APPEND);
}

if(isset($_POST['nick'])){
	addComment();
}

header ( 'Location: ' . BASE_PATH . '8' . PD . '8.php' );