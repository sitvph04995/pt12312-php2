<?php 
require_once './vendor/autoload.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

use App\Controller\HomeController;
use App\Controller\Api\UserController as ApiUserCtl;
switch ($url) {
	case "/":
		$ctl = new HomeController();
		echo $ctl->index();
		break;
	case "sendmail":
		$ctl = new HomeController();
		echo $ctl->sendmail();
		break;
	case "api/get-all-user":
		$ctl = new ApiUserCtl();
		echo $ctl->allUser();
		break;
	default:
		$msg = "Trang bạn tìm kiếm không có thật. Vui lòng liên hệ với ban quản trị.";
		require_once 'views/not-found.php';
		break;
}
 ?>