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
	case "them-san-pham":
		$ctl = new HomeController();
		echo $ctl->index();
		break;
	case "luu-san-pham":
		
		$ctl = new HomeController();
		$ctl->index();
		break;
	case "danh-sach-thanh-vien":
		$ctl = new UserController();
		$ctl->index();
		break;
	case 'san-pham':
		require_once 'models/Product.php';
		$products = Product::all();
		echo "<pre>";
		var_dump($products);
		break;
	
	default:
		$msg = "Trang bạn tìm kiếm không có thật. Vui lòng liên hệ với ban quản trị.";
		require_once 'views/not-found.php';
		break;
}


  ?>


