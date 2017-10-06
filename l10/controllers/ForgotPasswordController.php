<?php
/**
* 
*/
require_once 'models/ForgotPassword.php';
require_once 'models/User.php';

require_once 'controllers/BaseController.php';

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class ForgotPasswordController extends BaseController
{
	function sendForgotEmail(){
		$email = $_POST['email'];
		$user = User::where(['email', '=', $email])->first();
		if(!$user){
			echo "Da gui email, ban vui long kiem tra de lay lai mat khau!";
			die;
		}

		$forgotModel = ForgotPassword::where(['email', '=', $email])->first();
		if($forgotModel){
			$forgotModel->delete();
		}
		$forgotModel = new ForgotPassword();
		$forgotModel->email = $email;
		$token = md5($email.microtime());
		$forgotModel->token = $token;
		$forgotModel->created_date = date('Y-m-d H:i:s'); 
		$forgotModel->insert();

		$mail = new PHPMailer(true);
		$email = $email; // email nhan 
		$name = $user->name; // ten ng nhan

		$email_from = 'thienth32@gmail.com'; // email gui va nhan reply
		$name_from = 'thienth32';
		//Send mail using gmail
		// if($send_using_gmail){
		    $mail->IsSMTP(); // telling the class to use SMTP
		    $mail->SMTPAuth = true; // enable SMTP authentication
		    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
		    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
		    $mail->Port = 465; // set the SMTP port for the GMAIL server
		    $mail->Username = "sinhvienpoly.noreply@gmail.com"; // GMAIL username
		    $mail->Password = "thienth1234"; // GMAIL password
		// }
		 
		//Typical mail data
		$mail->AddAddress($email, $name);
		$mail->SetFrom($email_from, $name_from);
		$mail->Subject = "Lay lai mat khau";
		$mail->Body = '<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title></title>
			<link rel="stylesheet" href="">
		</head>
		<body>
			<h1>xin chao '.$user->name.',</h1>
			<strong>Vui long click vao duong dan duoi day de khoi tao lai mat khau cua ban:</strong>
			<a href="'.getUrl('reset-password?token='.$token).'">Click here</a>
			<p>Duong dan nay chi ton tai trong 24gio.</p>
		</body>
		</html>';
		 
		try{
		    $mail->Send();
		} catch(Exception $e){
		    //Something went bad
		    echo "Fail :(";
		}


		echo "Da gui email, ban vui long kiem tra de lay lai mat khau!";
		die;

	}
	
	function resetForm(){
		$token = $_GET['token'];
		$forgotModel = ForgotPassword::where(['token', '=', $token])->first();

		// kiểm tra thời gian hiện tại và thời gian created_date có nhiều hơn 24h hay không?
		// nếu lớn hơn thì đưa ra thông báo link này đã hết hạn
		// nếu nhỏ hơn 24h thì tiến hành hiển thị form để người dùng tạo mật khẩu mới đi kèm với hidden field chứa token
		
		// submit form để đổi mật khẩu của người dùng. Nhớ cần mã hóa md5
	}


}


  ?>

