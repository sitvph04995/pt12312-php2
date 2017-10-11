<?php 
require_once './vendor/autoload.php';
use Route\Route;
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
Route::Setup($url);

 ?>