<?php 
require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
$email = "thienth@fpt.edu.vn"; // email nhan 
$name = "Thien POLY"; // ten ng nhan

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
$mail->AddAddress('chungnqph03842@fpt.edu.vn', 'chungnq');
$mail->AddAddress('doanlnph04866@fpt.edu.vn', 'Doan Chi Binh');
$mail->SetFrom($email_from, $name_from);
$mail->Subject = "My Subject";
$mail->Body = "Mail contents";
$mail->addAttachment('./uploads/img1.jpg'); 
 
try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail :(";
}
 

 ?>