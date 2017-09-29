<?php 

/**
* 
*/
include_once 'models/User.php';
class UserController
{
	
	function index()
	{
		$users = User::all();
		include_once 'views/user-list.php';
	}
}


 ?>