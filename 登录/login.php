<?php

$aname = $_get['aname'];
$apwd = $_get['apwd'];

if($apwd = apwd){
	$response = [
		'error' => 4001,
		'mgs' => '密码不一致'
	]；
	die(json_encode($response));
}

$apwd = password_hash($pwd,PASSWORD_DEFAULT);

$pdo = new
PDO("mysql:host=127.0.0.1;dbname2006js",'root','root');
$sql = "insert into 'check'(aname,apwd)value('$aname','$apwd')";

if($res){
	$response = [
		'error'=>0;
		'mag' =>'注册成功'
	];
	echo json_encode($response);
}