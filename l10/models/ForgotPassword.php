<?php 
require_once 'BaseModel.php';
require_once 'User.php';
/**
* 
*/
class ForgotPassword extends BaseModel
{
	public $tableName = 'forgot_password';

	public $columns = [	'email', 'token', 'created_date'];
	
}

 ?>
