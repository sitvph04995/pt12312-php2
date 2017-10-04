<?php 
function getTotalCartItem(){

	return 0;
}

function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}

// lấy ra url gốc của project
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];

	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');

	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}

	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
}



 ?>