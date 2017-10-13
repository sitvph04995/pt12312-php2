<?php 
namespace App\Controller;
use App\Model\Product;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController
{
	
	// private function render($viewFile, $variable = []){
	// 	$blade = new Blade('app/views', 'storage');
	// 	echo $blade->make($viewFile, $variable);
	// }

	function index()
	{
		$products = Product::all();
		var_dump($products);die;
		// return $this->render('index', ['products' => $products]);
	}

	function adminUser($userid){
		var_dump($userid);die;
	}
	function sendmail()
	{
		$mail = new PHPMailer(true);
		$email = "thienth@fpt.edu.vn"; // email nhan 
		$name = "Thien POLY"; // ten ng nhan

		$email_from = 'tiennvph05036@fpt.edu.vn'; // email gui va nhan reply
		$name_from = 'tien nv';
		//Send mail using gmail
		// if($send_using_gmail){
	    $mail->IsSMTP(); // telling the class to use SMTP
	    $mail->SMTPAuth = true; // enable SMTP authentication
	    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	    $mail->Port = 465; // set the SMTP port for the GMAIL server
	    $mail->Username = "tiennvph05036@fpt.edu.vn"; // GMAIL username
	    $mail->Password = "7946138521998TT"; // GMAIL password
		// }
		 
		//Typical mail data
		$mail->AddAddress($email, $name);
		$mail->AddAddress('chungnqph03842@fpt.edu.vn', 'chungnq');
		$mail->AddAddress('doanlnph04866@fpt.edu.vn', 'Doan Chi Binh');
		$mail->SetFrom($email_from, $name_from);
		$mail->Subject = "My Subject";
		$mail->Body = "Mail contents";
		// $mail->addAttachment('./uploads/img1.jpg'); 
		 
		try{
		    $mail->Send();
		    echo "Success!";
		} catch(Exception $e){
		    //Something went bad
		    echo "Fail :(";
		}
	}
}

 ?>