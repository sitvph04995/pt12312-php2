<?php 
require_once 'BaseModel.php';
require_once 'User.php';
/**
* 
*/
class Product extends BaseModel
{
	public $tableName = 'products';

	public $columns = [	'name', 'price', 'detail', 
						'feature_image', 'created_by'];
	
	public function owner(){
		$owner = User::findOne($this->created_by);
		return $owner;
	}
}

 ?>
