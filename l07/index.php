<?php
session_start();
function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
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
		break;

	
	default:
		$msg = "Trang bạn tìm kiếm không có thật. Vui lòng liên hệ với ban quản trị.";
		require_once 'views/not-found.php';
		break;
}


  ?>


