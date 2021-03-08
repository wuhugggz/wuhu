<?php

function getPdo(){
	$host = "127.0.0.1";
	$user = "root";
	$pass = "123456";
	$db = "winter";

	PDO("mysql:host=$host:dbname=$db,$user,$pass");
}