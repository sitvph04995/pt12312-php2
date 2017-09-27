<?php 
require_once 'BaseModel.php';
/**
* 
*/
class Category extends BaseModel
{
	public $tableName = 'categories';

	public $columns = [	'name', 'parent_id'];
	
	function getParentName(){
		$parent = Category::findOne($this->parent_id);
		return $parent != null ? $parent->name : null;
	}
}

 ?>
