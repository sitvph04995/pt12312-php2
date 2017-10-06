<?php
session_start();
include_once 'commons/utils.php';

if(!isset($_SESSION["CART"])){
	$_SESSION["CART"] = [];
}

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";


require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/ForgotPasswordController.php';


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
	case "add-to-cart":
		$ctl = new HomeController();
		$ctl->addToCart();
		break;

	case 'cart-detail':
		$ctl = new HomeController();
		echo $ctl->detailCart();
		break;
	case "reset-cart":
		$_SESSION['CART'] = [];
		break;

	case 'forgot-password':
		include_once 'views/forgot-password.php';
		break;
	case 'forgot-submit':
		$ctl = new ForgotPasswordController();
		$ctl->sendForgotEmail();
		break;
	case 'reset-password':
		$ctl = new ForgotPasswordController();
		$ctl->resetForm();
		break;
	default:
		$msg = "Trang bạn tìm kiếm không có thật. Vui lòng liên hệ với ban quản trị.";
		require_once 'views/not-found.php';
		break;
}


  ?>


