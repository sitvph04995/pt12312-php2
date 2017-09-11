<?php 

$servername = '127.0.0.1';
$dbname = 'pt12312-mvc';
$dbusername = 'root';
$dbpwd = '123456';

try{

	$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $dbusername, $dbpwd);
}catch(Exception $ex){
	var_dump($ex->getMessage());
	die;
}


 ?>