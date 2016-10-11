<?php
include '../common/header.php';
include 'ReflectionTypeHint.php';
include 'UTF8.php';
include 'Censure.php';

function addComment(){
	$filename = __DIR__. PD . 'comments.txt';
	$time_stamp = date_format(date_create(), 'd.m.Y H.m.s');
	$user = $_POST['nick'];
	$message = $_POST['comment'];
	$message = strip_tags($message, '<b>');
	//$message = Text_Censure::parse($message, 3, 'Nein', false, 'Cens');
	
	file_put_contents($filename, json_encode(['t_stamp' => $time_stamp, 'user'=>$user, 'message'=>$message]), FILE_APPEND);
}

if(isset($_POST['nick'])){
	addComment();
}

header ( 'Location: ' . BASE_PATH . '8' . PD . '8.php' );