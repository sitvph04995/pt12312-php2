<?php 
require_once 'BaseModel.php';
require_once 'User.php';
/**
* 
*/
class Product extends BaseModel
{
	public $tableName = 'products';
	
	public function owner(){
		$owner = User::findOne($this->created_by);
		return $owner;
	}
}

 ?>
