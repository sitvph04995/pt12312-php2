<?php
namespace App\Controller\Api;
/**
* 
*/
use App\Model\User;
class UserController
{
	
	function allUser()
	{
		$users = User::all();
		return json_encode($users);
	}
}

?>