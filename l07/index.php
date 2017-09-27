<?php
session_start();
function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}


$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];
	$absoluteUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}
	return $absoluteUrl.$path;
}

require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';


switch ($url) {
	case "/":
		$ctl = new HomeController();
		echo $ctl->index();
		break;
	case "danh-muc":
		// yêu cầu: Hiển thị danh sách danh mục và sử dụng layout main.layout.php
		// trong layout yêu cầu nhúng css và js của bootstrap vào
		
		$ctl = new HomeController();
		echo $ctl->cateList();
		break;
	case "danh-muc/them":
		// yêu cầu: Hiển thị danh sách danh mục và sử dụng layout main.layout.php
		// trong layout yêu cầu nhúng css và js của bootstrap vào
		
		$ctl = new HomeController();
		// echo $ctl->cateList();
		break;

	
	default:
		$msg = "Trang bạn tìm kiếm không có thật. Vui lòng liên hệ với ban quản trị.";
		require_once 'views/not-found.php';
		break;
}


  ?>


