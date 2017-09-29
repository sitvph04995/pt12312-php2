<?php
session_start();
function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}


$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

// lấy ra url gốc của project
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];

	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');

	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}

	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
}


require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';


switch ($url) {
	case "/":
		$ctl = new HomeController();
		echo $ctl->index();
		break;
	case "update-product":
		$ctl = new HomeController();
		echo $ctl->updateProduct();
		break;
	case "add-product":
		$ctl = new HomeController();
		echo $ctl->addProduct();
		break;
	case "post-save-product":
		$ctl = new HomeController();
		echo $ctl->postSaveProduct();
		break;
	case "save-update-product":
		$ctl = new HomeController();
		echo $ctl->saveUpdateProduct();
		break;
	case "remove-product":
		$ctl = new HomeController();
		echo $ctl->removeProduct();
		break;
	case "danh-muc":
		// yêu cầu: Hiển thị danh sách danh mục và sử dụng layout main.layout.php
		// trong layout yêu cầu nhúng css và js của bootstrap vào
		
		$ctl = new HomeController();
		echo $ctl->cateList();
		break;
	case "danh-muc/them":
		// yêu cầu: Hiển thị form thêm danh mục sau đó submit lên url danh-muc/luu
		
		$ctl = new HomeController();
		// echo $ctl->cateList();
		break;
	case "danh-muc/luu":
		// yêu cầu: tiến hành lưu dữ liệu gửi từ form lên, lưu vào csdl sau đó redirect về url: danh-muc
		
		$ctl = new HomeController();
		// echo $ctl->cateList();
		break;

	
	default:
		$msg = "Trang bạn tìm kiếm không có thật. Vui lòng liên hệ với ban quản trị.";
		require_once 'views/not-found.php';
		break;
}


  ?>


